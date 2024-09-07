@extends('layouts.app')

@php
if(isset($category) && $category) {
    $title = $category->name;
}elseif(isset($brand) && $brand) {
    $title = $brand->name;
}

@endphp

@section('title', $title . " - покупайте в компании Промэлектроника")
@section('description', "Для заказа «название категории» пришлите запрос на электронную почту sales@prom-elec.com. Быстрая доставка по России и странам СНГ.")


@section('content')

    <section class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/catalog">Каталог</a></li>
                <li>{{ $title }}</li>
            </ul>
        </div>
    </section>

    <section class="catalog">
        <div class="container title"><span class="prom-title">{{ $title }}</span></div>
        <div class="container">
            <div class="sidebar">
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

                <p>Все поставки Siemens осуществляются без посредников и имеют официальную гарантию завода-изготовителя. На отдельные группы товаров гарантия увеличена до 18 месяцев. На Siemens и весь ассортимент Siemens прилагается сертификат в соответствии с законодательством. Прямые поставки Siemens позволяют нам предлагать высококачественное оборудование Siemens в Москве по выгодной невысокой цене по всей России и странам СНГ.</p>
                <span class="prom-title">Siemens - преимущества поставки от компании 6088</span>
                <ul>
                    <li>удобный сервис экспресс-доставки</li>
                    <li>возможность организации адресной доставки до двери</li>
                    <li>выполнение небольших заказов от 50 евро</li>
                    <li>снятое с производства, а также бывшее в эксплуатации оборудование</li>
                </ul>
                <p>
                    Купить Siemens в Москве можно оптом и в розницу. Для уточнения вопросов по стоимости и срокам поставки Siemens, а также другим моментам, нам можно позвонить, отправить запрос через форму обратной связи или написать письмо на электронный адрес. Ответы предоставляются в течение 15-ти минут после отправки запроса.
                    6088 – ведущий поставщик импортного промышленного электронного оборудования и компонентов. В карте наших поставок более 5000 производителей, в том числе и Siemens.
                </p>
            </div>

        </div>
    </section>

@endsection
