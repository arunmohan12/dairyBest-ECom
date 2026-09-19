<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mcategory extends Model
{
    protected $table = 'mcategories';

    protected $primaryKey = 'category_code';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    public static function getAllCategories()
    {
        return self::select('category_code', 'name', 'image_path')->get();
    }

    public function products()
    {
        return $this->hasMany(mProducts::class, 'category_code', 'category_code');
    }

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'category_code', 'category_code');
    }

    public function imageFilename(): string
    {
        return trim($this->image_path ?? '');
    }

    public function resolvedImageFilename(): string
    {
        $filename = $this->imageFilename();

        if ($filename !== '' && $this->categoryImageExists($filename)) {
            return $filename;
        }

        return $this->defaultImageFilename();
    }

    public function imageUrl(): string
    {
        return asset('assets/images/products/categories/' . $this->resolvedImageFilename());
    }

    public function carouselImageUrl(): string
    {
        $products = $this->relationLoaded('products')
            ? $this->products
            : $this->products()->orderByDesc('pid')->get();

        foreach ($products as $product) {
            if ($product->hasProductImage()) {
                return $product->imageUrl();
            }
        }

        $firstProduct = $products->first();

        if ($firstProduct) {
            return $firstProduct->imageUrl();
        }

        return $this->imageUrl();
    }

    private function categoryImageExists(string $filename): bool
    {
        return is_file(public_path('assets/images/products/categories/' . $filename));
    }

    private function defaultImageFilename(): string
    {
        $defaults = [
            'Biscuits' => 'biscuits.webp',
            'Cakes' => 'biscuits.webp',
            'Chocolate' => 'icecreampowder.webp',
            'Creams' => 'cream.webp',
            'Food Coloring' => 'cream.webp',
            'Fruit Filling' => 'frape.webp',
            'Fruit Paste Gelato' => 'icecreampowder.webp',
            'Fruit puree 70%' => 'frape.webp',
            'Fruit Puree with Seeds' => 'frape.webp',
            'Fruit Purees' => 'frape.webp',
            'Ice Cream Powders' => 'icecreampowder.webp',
            'Ready Mix powder' => 'icecreampowder.webp',
            'Sauce' => 'sauce.png',
            'Slush' => 'slush.png',
            'Sugar Pastes' => 'sugar-pastes.png',
            'Syrups' => 'syrups.png',
            'Zero sugar' => 'biscuits.webp',
        ];

        return $defaults[$this->name] ?? 'cream.webp';
    }
}
