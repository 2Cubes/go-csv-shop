@extends('layouts.app')

@section('title', 'Компания Промэлектроника представляем полный каталог оборудования от ведущих мировых производителей')
@section('description', "Тысячи позиций на нашем складе готовы к отгрузке в течении 1 дня. Предлагаем оборудование от самых надежных изготовителей. В наличии на складе с быстрой отгрузкой.")

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
