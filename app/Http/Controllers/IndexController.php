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

    public function loadIndexDatas()
    {
        $categories = Mcategory::getAllCategories();
        $brands = mBrands::all();
        $products = mProducts::orderByDesc('pid')
            ->inRandomOrder()
            ->take(8)
            ->get();

        return view('welcome', compact('categories', 'brands', 'products'));
    }

    public function getProductsHtmlByType(Request $request)
    {
        $type = $request->input('type');
        $products = collect();

        if ($type === 'new-products') {
            $products = mProducts::orderByDesc('pid')->take(8)->get();
        } elseif ($type === 'other-products') {
            $newProductIds = mProducts::orderByDesc('pid')->take(8)->pluck('pid');
            $products = mProducts::whereNotIn('pid', $newProductIds)
                ->inRandomOrder()
                ->take(8)
                ->get();
        }

        $html = view('partials.product-item', ['products' => $products])->render();

        return response()->json(['html' => $html]);
    }

    public function loadProductsByBrand(Request $request, $brandName)
    {
        $brand = DB::table('m_brands')
            ->whereRaw('LOWER(REPLACE(name, " ", "-")) = ?', [strtolower($brandName)])
            ->first();

        if (!$brand) {
            abort(404, 'Brand not found');
        }
        $products = DB::table('m_products')
            ->where('bname', $brand->name)
            ->paginate(6);

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
        $products = DB::table('m_products')
            ->orderBy('pid', 'desc')
            ->paginate(6);

        if ($request->ajax()) {
            return view('partials.listingpagination', compact('products'))->render();
        }

        $categories = collect();
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

        $product = DB::table('m_products')
            ->where('slugid', $slugid)
            ->where('bname', $brand->name)
            ->first();

        if (!$product) {
            abort(404, 'Product not found');
        }

        $productImages = [];

        if ($product->productimage) {

            $productImages[] = asset('assets/images/products/' . Str::slug($product->bname)  . '/' . $product->productimage);
        }


        if ($product->otherimages) {
            $otherImageFilenames = explode(',', $product->otherimages);
            foreach ($otherImageFilenames as $filename) {
                $filename = trim($filename);
                if (!empty($filename)) {
                    $productImages[] = asset('assets/images/products/' . Str::slug($product->bname) . '/' . $filename);
                }
            }
        }


        $previousProduct = DB::table('m_products')
            ->where('bname', $brand->name)
            ->where('pid', '<', $product->pid)
            ->orderBy('pid', 'desc')
            ->first();

        $nextProduct = DB::table('m_products')
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

        $products = $query->paginate(12);

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
