<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ManufacturersController extends Controller
{

    public function index(Request $request)
    {
        $letter = $request->get('letter');

        $brandsQuery = Brand::whereHas('products')->withCount('products');

        if (!empty($letter)) {
            $brandsQuery->where(function($query) use ($letter) {
                $query->where('name', 'like', $letter . '%')
                    ->orWhere('name', 'like', strtoupper($letter) . '%');
            });
        }

        Cache::delete('brands_' . $letter);
        $brands = Cache::remember('brands_' . $letter, 60 * 60, function () use ($brandsQuery) {
            return $brandsQuery->get();
        });

        $totalProducts = Product::count();
        $totalBrands = Brand::count();

        return view('manufacturers', [
            'brands' => $brands,
            'letter' => $letter,
            'totalProducts' => $totalProducts,
            'totalBrands' => $totalBrands
        ]);
    }
}
