@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <section class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#">Главная</a></li>
                <li>Каталог</li>
            </ul>
        </div>
    </section>

    <section class="catalog">
        <div class="container">
            <div class="sidebar">
                <span class="prom-title">Каталог</span>
                @include("filter")
                <span class="total">{{ $count }} товаров найдено</span>
            </div>
            <div class="catalog-content">
                <div class="items-wrapper">
                    @foreach($products as $product)
                        @include('partials.item')
                    @endforeach
                </div>
                {{ $products->links('pagination::catalog') }}

            </div>

        </div>
    </section>

@endsection
