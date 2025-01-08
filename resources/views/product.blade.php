@extends('layouts.app')

@section('title', $product->name . " - покупайте в компании Промэлектроника")
@section('description', "Быстрая доставка «".$product->name ."» по России и странам СНГ. sales@prom-elec.com – электронная почта для заказа оборудования. Работаем напрямую с производителями оборудования.")

@section('content')

    <section class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/catalog">Каталог</a></li>
                <li>{{ $product->name }}</li>
            </ul>
        </div>
    </section>

    <section class="product">
        <div class="container">
            <div class="product-card">
                <div class="prod-img">
                    <img src="{{ asset('images/placeholder-big.jpg') }}" alt="">
                </div>
                <div class="prod-info">
                    <span class="name">{{ $product->name }}</span>
                    <div class="art">
                        <span class="label">Артикул</span>
                        <span class="val">{{ $product->sku }}</span>
                    </div>
                    <div class="prod">
                        <span class="label">Производитель</span>
                        <span class="val">{{ $product->brand->name }}</span>
                    </div>
                    <div class="price">
                        <span class="label">Цена</span>
                        <span class="val">@if($product->price * 1)
                                {{ number_format($product->price, 2, '.', ' ') }}  ₽
                            @else
                                Уточняйте цену
                            @endif
                        </span>
                    </div>
                    <div class="btn-controls">
                        <button class="btn prom-btn" data-bs-toggle="modal" data-bs-target="#requestModal">Заказать</button>
                        <button class="btn prom-btn-outline" data-bs-toggle="modal" data-bs-target="#requestModal">Консультанция</button>
                    </div>
                    <div class="description">
                        <span class="label">Описание</span>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </div>
            <span class="prom-title">Похожие товары</span>
            <div class="items-wrapper">
                @foreach($products as $product)
                    @include("partials.item")
                @endforeach
            </div>
        </div>
    </section>

@endsection
