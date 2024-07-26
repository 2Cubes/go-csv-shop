<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\Product;

class Breadcrumb extends Component
{
    public $breadcrumbs = [];

    public function __construct()
    {
        $this->breadcrumbs = $this->generateBreadcrumbs();
    }

    protected function generateBreadcrumbs()
    {
        $routeName = Route::currentRouteName();
        $breadcrumbs = [];

        $breadcrumbs[] = ['title' => 'Главная', 'url' => route('index')];

        switch ($routeName) {
            case 'category':
                $categoryId = Request::route('id');
                $breadcrumbs[] = ['title' => 'Категория', 'url' => route('category', ['id' => $categoryId])];
                break;

            case 'product':
                $productId = Request::route('id');
                $product = Product::find($productId);

                if ($product && $product->category) {
                    $breadcrumbs[] = ['title' => $product->category->name, 'url' => route('category', ['id' => $product->category->id])];
                }

                $breadcrumbs[] = ['title' => $product->name, 'url' => route('product', ['id' => $productId])];
                break;
        }

        return $breadcrumbs;
    }

    public function render()
    {
        return view('components.breadcrumb');
    }
}
