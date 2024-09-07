<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SiteController extends Controller
{

    public function contacts(Request $request)
    {
        return view('site.contacts');
    }

    public function delivery(Request $request)
    {
        return view('site.delivery');
    }

    public function guaranties(Request $request)
    {
        return view('site.guaranties');
    }

    public function suppliers(Request $request)
    {
        return view('site.suppliers');
    }

    public function aboutUs(Request $request)
    {
        return view('site.about-us');
    }

}
