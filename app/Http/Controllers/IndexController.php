<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('brand')) {
            $query->whereIn('brand_id', $request->brand);
        }

        if ($request->filled('price_from')) {
            $query->where('price', '>=', $request->price_from);
        }

        if ($request->filled('price_to')) {
            $query->where('price', '<=', $request->price_to);
        }

        $products = $query->paginate(60);
        $brands = Cache::remember('brands', 60 * 60, function () {
            return Brand::all();
        });
        $categories = Cache::remember('categories', 60 * 60, function () {
            return Category::limit(100)->get();
        });

        return view('index', [
            'products' => $products,
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
        $brands = Cache::remember('brands', 60 * 60, function () {
            return Brand::all();
        });
        $categories = Cache::remember('categories', 60 * 60, function () {
            return Category::limit(100)->get();
        });

        return view('category', [
            'products' => $products,
            'category' => $category,
            'brands' => $brands,
            'categories' => $categories
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
