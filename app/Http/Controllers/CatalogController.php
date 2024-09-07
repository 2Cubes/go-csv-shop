<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CatalogController extends Controller
{

    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->filled('search')) {
            $query->where('name', 'ILIKE', '%' . $request->search . '%');
        }

        $products = $query->paginate(60);
        $brands = Cache::remember('brands', 60 * 60, function () {
            return Brand::all();
        });
        $categories = Cache::remember('categories', 60 * 60, function () {
            return Category::whereHas('products')->withCount('products')->limit(100)->get();
        });

        return view('catalog', [
            'products' => $products,
            'count' => $query->count(),
            'brands' => $brands,
            'categories' => $categories,
            'selectedBrands' => $request->brand,
            'searchQuery' => $request->search,
            'priceFrom' => $request->price_from,
            'priceTo' => $request->price_to,
        ]);
    }

    public function category(Request $request, $id)
    {
        $category = Category::find($id);
        $products = Product::where("category_id", $id)->paginate(60);
        $totalProductsCount = Product::where('category_id', $id)->count();
        $brands = Cache::remember('brands_in_category_'.$id, 60 * 60, function () use ($id) {
            return Brand::whereIn('id', Product::where('category_id', $id)->pluck('brand_id'))->get();
        });

        return view('category', [
            'products' => $products,
            'category' => $category,
            'brands' => $brands,
            'count' => $totalProductsCount,
        ]);
    }

    public function brand(Request $request, $id)
    {
        $brand = Brand::find($id);
        $products = Product::where("brand_id", $id)->paginate(60);
        $totalProductsCount = Product::where('brand_id', $id)->count();
        $categories = Cache::remember('categories_in_brand_'.$id, 60 * 60, function () use ($id) {
            return Category::select('categories.*')
                ->join('products', 'products.category_id', '=', 'categories.id')
                ->where('products.brand_id', $id)
                ->distinct() // Убирает дубликаты категорий
                ->get();
        });


        return view('category', [
            'products' => $products,
            'categories' => $categories,
            'brand' => $brand,
            'count' => $totalProductsCount,
        ]);
    }

    public function product(Request $request, $id)
    {
        $product = Product::with('category')->where("id", $id)->first();
        $products = Product::where("category_id", $product->category_id)->limit(4)->get();

        return view('product', [
            'product' => $product,
            'products' => $products,
        ]);
    }


}
