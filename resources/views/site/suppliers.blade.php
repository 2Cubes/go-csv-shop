@extends('layouts.app')

@section('title', 'Промэлектроника осуществляет поставки оборудование и комплектующих по России. Мы работаем с поставщиками по всему миру и в карте наших поставок более пяти тысяч производителей.')
@section('description', 'Мы будем рады сотрудничеству если: ваша компания поставляет качественное оборудование и вы ищите надежные каналы продаж.')

@section('content')

    <section class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#">Главная</a></li>
                <li>Категории</li>
            </ul>
        </div>
    </section>

    <section class="suppliers-text">
        <div class="container">
            <span class="prom-title">Поставщикам</span>
            <p>
                Промэлектроника осуществляет поставки оборудование и комплектующих по России.
                Мы работаем с поставщиками по всему миру и в карте наших поставок более пяти тысяч производителей.
                Наша команда нацелена на привлечение новых поставщиков промышленного электронного оборудования, и проработку взаимовыгодных отношений с официальными дистрибьюторами разных брендов.<br />
                Мы осуществляем поставки по всей России и в страны СНГ.
                Готовы дать объемы поставок и возможность бесплатного размещения рекламы Вашей продукции на нашем сайте, на условиях получения уникальных предложений от Вас.
            </p>
            <span class="prom-title">Мы будем рады <br>сотрудничеству если:</span>
            <ul>
                <li>Ваша компания поставляет качественное оборудование и Вы ищете каналы сбыта</li>
                <li>Вы работаете по договору, с соблюдением гарантийных обязательств</li>
                <li>Вся поставляемая продукция оригинальная и имеет соответствующие сертификаты качества</li>
                <li>Вы готовы предоставить полный перечень продукции с актуальной стоимостью и описанием</li>
            </ul>
        </div>
    </section>

    @include("partials.order")

@endsection
