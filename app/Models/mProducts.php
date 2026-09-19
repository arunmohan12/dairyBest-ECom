<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class mProducts extends Model
{
    protected $table = 'm_products';

    protected $primaryKey = 'pid';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    public function imageFilename(): string
    {
        return trim(str_replace(["\r", "\n"], '', $this->productimage ?? ''));
    }

    public function imageRelativePath(): ?string
    {
        $filename = $this->imageFilename();

        if ($filename === '') {
            return null;
        }

        return 'assets/images/products/' . Str::slug($this->bname) . '/' . $filename;
    }

    public function imagePublicPath(): ?string
    {
        $relativePath = $this->imageRelativePath();

        return $relativePath ? public_path($relativePath) : null;
    }

    public function hasProductImage(): bool
    {
        $path = $this->imagePublicPath();

        return $path !== null && is_file($path);
    }

    public function category()
    {
        return $this->belongsTo(Mcategory::class, 'category_code', 'category_code');
    }

    public function imageUrl(): string
    {
        if ($this->hasProductImage()) {
            return asset($this->imageRelativePath());
        }

        if ($this->relationLoaded('category') && $this->category) {
            return $this->category->imageUrl();
        }

        if ($this->category_code) {
            $category = Mcategory::find($this->category_code);

            if ($category) {
                return $category->imageUrl();
            }
        }

        return asset('assets/images/avatar/8.png');
    }

    public function scopeWithExistingImage(Builder $query): Builder
    {
        return $query
            ->whereNotNull('productimage')
            ->where('productimage', '!=', '')
            ->orderByDesc('pid');
    }

    public static function takeWithExistingImages(int $limit, ?Builder $query = null): \Illuminate\Support\Collection
    {
        $query ??= static::query()->orderByDesc('pid');

        $products = collect();

        foreach ($query->cursor() as $product) {
            if (! $product->hasProductImage()) {
                continue;
            }

            $products->push($product);

            if ($products->count() >= $limit) {
                break;
            }
        }

        return $products;
    }

    public static function pidsWithImages(): array
    {
        return cache()->remember('product_pids_with_images', 3600, function () {
            return static::query()
                ->get()
                ->filter(fn (self $product) => $product->hasProductImage())
                ->pluck('pid')
                ->all();
        });
    }

    public static function orderByImageAvailability(Builder $query): Builder
    {
        $pidsWithImages = static::pidsWithImages();

        if ($pidsWithImages === []) {
            return $query->orderByDesc('pid');
        }

        $placeholders = implode(',', array_fill(0, count($pidsWithImages), '?'));

        return $query
            ->orderByRaw("CASE WHEN pid IN ($placeholders) THEN 0 ELSE 1 END", $pidsWithImages)
            ->orderByDesc('pid');
    }

    public static function imageUrlFor(?string $bname, ?string $productimage): string
    {
        return static::fromImageParts($bname, $productimage)->imageUrl();
    }

    public function galleryUrls(): array
    {
        $urls = [];

        if ($this->hasProductImage()) {
            $urls[] = $this->imageUrl();
        }

        if ($this->otherimages) {
            foreach (explode(',', $this->otherimages) as $filename) {
                $filename = trim(str_replace(["\r", "\n"], '', $filename));

                if ($filename === '') {
                    continue;
                }

                $otherImage = static::fromImageParts($this->bname, $filename);

                if ($otherImage->hasProductImage()) {
                    $urls[] = $otherImage->imageUrl();
                }
            }
        }

        if ($urls === []) {
            $urls[] = $this->imageUrl();
        }

        return array_values(array_unique($urls));
    }

    private static function fromImageParts(?string $bname, ?string $productimage): self
    {
        $product = new static;
        $product->bname = $bname ?? '';
        $product->productimage = $productimage ?? '';

        return $product;
    }
}
