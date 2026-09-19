<?php

namespace App\Support;

use App\Models\Mcategory;
use App\Models\mBrands;
use App\Models\mProducts;
use Illuminate\Support\Str;

class ExploreMenuBuilder
{
    public static function data(): array
    {
        $brands = mBrands::query()
            ->withCount('products')
            ->orderBy('name')
            ->get();

        $categories = Mcategory::query()
            ->withCount('products')
            ->having('products_count', '>', 0)
            ->orderByDesc('products_count')
            ->get()
            ->map(function (Mcategory $category) {
                $products = mProducts::query()
                    ->where('category_code', $category->category_code)
                    ->orderByDesc('pid')
                    ->limit(4)
                    ->get(['pid', 'pname', 'slugid', 'bname', 'category_code']);

                return [
                    'category' => $category,
                    'products' => $products,
                ];
            });

        return [
            'exploreBrands' => $brands,
            'exploreCategories' => $categories,
        ];
    }

    public static function listingUrl(
        ?string $categoryCode = null,
        ?int $subcategoryId = null,
        ?string $brandSlug = null
    ): string {
        $params = array_filter([
            'category' => $categoryCode,
            'subcategory' => $subcategoryId,
        ], fn ($value) => $value !== null && $value !== '');

        if ($brandSlug) {
            return route('innerpages.product-listing', array_merge(['brandName' => $brandSlug], $params));
        }

        return route('innerpages.Allproducts', $params);
    }

    public static function productUrl(mProducts $product): string
    {
        return route('innerpages.product-details', [
            'brandName' => Str::slug($product->bname),
            'slugid' => $product->slugid,
        ]);
    }
}
