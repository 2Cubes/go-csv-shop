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

        $brandsQuery = Brand::whereHas('products')->withCount('products');

        $brands = Cache::remember('brands_index', 60 * 60, function () use ($brandsQuery) {
            return $brandsQuery->limit(32)->get();
        });

        $categories = Cache::remember('categories_index', 60 * 60, function () {
            return Category::whereHas('products')->withCount('products')->limit(30)->get();
        });

        $totalProducts = Product::count();
        $totalBrands = Brand::count();
        $totalCategories = Category::count();

        return view('index', [
            'brands' => $brands,
            'categories' => $categories,
            'totalProducts' => $totalProducts,
            'totalBrands' => $totalBrands,
            'totalCategories' => $totalCategories
        ]);
    }
}
