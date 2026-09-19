<?php

namespace App\Http\Controllers;

use App\Models\mBrands;
use Illuminate\Http\Request;
use App\Models\Mcategory;
use App\Models\mProducts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class IndexController extends Controller
{
    private function aboutCarouselSlides(): array
    {
        return [
            [
                'image' => 'chocolate-hazelnut-cream.png',
                'title' => 'Flavored Creams & Fillings',
                'caption' => 'Smooth, stable creams for donuts, pastries, and layered desserts.',
            ],
            [
                'image' => 'milk-chocolate-sauce.png',
                'title' => 'Milk Chocolate Sauce',
                'caption' => 'Rich and creamy classic perfection for every menu.',
            ],
            [
                'image' => 'pistachio-sauce.png',
                'title' => 'Pistachio Sauce',
                'caption' => 'Premium dessert topping with a vibrant pistachio profile.',
            ],
            [
                'image' => 'mango-collection.png',
                'title' => 'Mango Collection',
                'caption' => 'Ice cream mixes and fruit-forward sauces for summer menus.',
            ],
            [
                'image' => 'chocolate-hazelnut-sauce.png',
                'title' => 'Chocolate Hazelnut Sauce',
                'caption' => 'A timeless indulgence for breakfast, desserts, and beverages.',
            ],
            [
                'image' => 'pistachio-sauce-studio.png',
                'title' => 'Studio Collection',
                'caption' => 'Ingredients styled for professional kitchens and patisseries.',
            ],
        ];
    }

    public function loadIndexDatas()
    {
        $categories = Mcategory::query()
            ->whereHas('products')
            ->with(['products' => function ($query) {
                $query->orderByDesc('pid');
            }])
            ->orderBy('name')
            ->get();
        $brands = mBrands::all();
        $products = mProducts::takeWithExistingImages(8);
        $aboutCarouselSlides = $this->aboutCarouselSlides();

        return view('welcome', compact('categories', 'brands', 'products', 'aboutCarouselSlides'));
    }

    public function getProductsHtmlByType(Request $request)
    {
        $type = $request->input('type');
        $products = collect();

        if ($type === 'new-products') {
            $products = mProducts::takeWithExistingImages(8);
        } elseif ($type === 'other-products') {
            $newProductIds = mProducts::takeWithExistingImages(8)->pluck('pid');
            $products = mProducts::takeWithExistingImages(8, mProducts::query()
                ->whereNotIn('pid', $newProductIds)
                ->inRandomOrder());
        }

        $html = view('partials.product-item', ['products' => $products])->render();

        return response()->json(['html' => $html]);
    }

    private function applyListingFilters($query, Request $request)
    {
        if ($request->filled('category')) {
            $query->where('category_code', $request->category);
        }

        if ($request->filled('subcategory')) {
            $query->where('subcategory_id', $request->subcategory);
        }

        return $query;
    }

    public function loadProductsByBrand(Request $request, $brandName)
    {
        $brand = DB::table('m_brands')
            ->whereRaw('LOWER(REPLACE(name, " ", "-")) = ?', [strtolower($brandName)])
            ->first();

        if (!$brand) {
            abort(404, 'Brand not found');
        }
        $query = mProducts::query()->where('bname', $brand->name);
        $query = $this->applyListingFilters($query, $request);

        $products = mProducts::orderByImageAvailability($query)->paginate(6)->withQueryString();

        if ($request->ajax()) {
            return view('partials.listingpagination', compact('products'))->render();
        }
        $categories = Mcategory::whereHas('products', function ($q) use ($brand) {
            $q->where('bname', $brand->name); // or use brand_id if available
        })
        ->with(['subcategories' => function ($q) use ($brand) {
            $q->whereHas('products', function ($sub) use ($brand) {
                $sub->where('bname', $brand->name);
            })
            ->withCount(['products as products_count' => function ($sub) use ($brand) {
                $sub->where('bname', $brand->name);
            }]);
        }])
        ->withCount(['products as products_count' => function ($q) use ($brand) {
            $q->where('bname', $brand->name);
        }])
        ->get();
                $brands = mBrands::withCount('products')->get();

        $totalProductsCount = mProducts::count();

        return view('innerpages.productlisting', compact('products', 'brand', 'categories', 'brands', 'totalProductsCount'));
    }


    public function loadAllProducts(Request $request)
    {
        $query = mProducts::query();
        $query = $this->applyListingFilters($query, $request);

        $products = mProducts::orderByImageAvailability($query)->paginate(6)->withQueryString();

        if ($request->ajax()) {
            return view('partials.listingpagination', compact('products'))->render();
        }

        $categories = Mcategory::with(['subcategories' => function ($q) {
                $q->withCount('products');
            }])
            ->withCount('products')
            ->get();
        $brands = mBrands::withCount('products')->get();
        $totalProductsCount = mProducts::count();

        return view('innerpages.productlisting', compact('products', 'categories', 'brands', 'totalProductsCount'));
    }

    public function ShowProductDescription(Request $request, $brandName, $slugid)
    {
        $brand = DB::table('m_brands')
            ->whereRaw('LOWER(REPLACE(name, " ", "-")) = ?', [strtolower($brandName)])
            ->first();

        if (!$brand) {
            abort(404, 'Brand not found');
        }

        $product = mProducts::query()
            ->where('slugid', $slugid)
            ->where('bname', $brand->name)
            ->first();

        if (!$product) {
            abort(404, 'Product not found');
        }

        $productImages = $product->galleryUrls();

        $previousProduct = mProducts::query()
            ->where('bname', $brand->name)
            ->where('pid', '<', $product->pid)
            ->orderByDesc('pid')
            ->first();

        $nextProduct = mProducts::query()
            ->where('bname', $brand->name)
            ->where('pid', '>', $product->pid)
            ->orderBy('pid', 'asc')
            ->first();

        return view('innerpages.productdescription', compact('product', 'brand', 'productImages', 'previousProduct', 'nextProduct'));
    }

    public function filterProducts(Request $request)
    {
        $query = mProducts::query();

        if ($request->category) {
            $query->where('category_code', $request->category);
        }

        $query->when($request->input('subcategory'), function ($q, $subcategoryId) {
            return $q->where('subcategory_id', $subcategoryId);
        });

        if ($request->brands) {
            $query->whereIn('brand_id', $request->brands);
        }

        $products = mProducts::orderByImageAvailability($query)->paginate(12);

        return view('partials.listingpagination', compact('products'))->render();
    }


    public function filterCategories(Request $request)
    {
        logger()->info("inside..........................");
        $brandIds = $request->brands ?? [];
    
        // If no brand selected, return empty
        if (empty($brandIds)) {
            return '';
        }
    
        $categories = Mcategory::whereHas('products', function ($q) use ($brandIds) {
                $q->whereIn('brand_id', $brandIds);
            })
            ->with(['subcategories' => function ($q) use ($brandIds) {
                $q->whereHas('products', function ($sub) use ($brandIds) {
                    $sub->whereIn('brand_id', $brandIds);
                })
                ->withCount(['products as products_count' => function ($sub) use ($brandIds) {
                    $sub->whereIn('brand_id', $brandIds);
                }]);
            }])
            ->withCount(['products as products_count' => function ($q) use ($brandIds) {
                $q->whereIn('brand_id', $brandIds);
            }])
            ->get();
            foreach ($categories as $cat) {
                logger()->info("Category: {$cat->name}, Products Count: {$cat->products_count}");
                foreach ($cat->subcategories as $sub) {
                    logger()->info("   Subcategory: {$sub->name}, Products Count: {$sub->products_count}");
                }
            }
        return view('partials.category-sidebar', compact('categories'))->render();
    }
    
}
