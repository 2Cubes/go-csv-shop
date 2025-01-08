@extends('layouts.app')

@section('title', $product->name . " – Оригинальное оборудование | Промэлектроника")
@section('description', "Купите ".$product->name." с быстрой доставкой по России и СНГ. Прямые поставки, гарантия качества. Свяжитесь с нами: sales@prom-elec.com. Промэлектроника – ваш надежный поставщик промышленного оборудования..")


@section('content')

    <section class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/catalog">Каталог</a></li>
                <li>{{ $product->name }}</li>
<span></span>

            </ul>
        </div>
    </section>
<script src="//code.jivo.ru/widget/vki4j0IcAI" async></script>
    <section class="product">
        <div class="container">
            <div class="product-card">
                <div class="prod-img">
                    <img src="{{ asset('images/placeholder-big.jpg') }}" alt="">
                </div>
                <div class="prod-info">
                    <span class="name">{{ $product->name }}</span>
<span></span>
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
    <span class="val">по запросу</span>
</div>

                    <div class="btn-controls">
    <a href="https://forms.yandex.ru/u/67374a5749363926b5f71541/" class="btn prom-btn" target="_blank">Заказать</a>
    <a href="https://forms.yandex.ru/u/67374a5749363926b5f71541/" class="btn prom-btn-outline" target="_blank">Консультанция</a>
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
