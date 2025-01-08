@extends('layouts.app')

@section('title', 'Информация о компании')
@section('description', 'Промэлектроника ваш надежный поставщик оборудования и электронных компонентов')

@section('content')

    <section class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#">Главная</a></li>
                <li>О компании</li>
            </ul>
        </div>
    </section>

    <section class="suppliers-text">
        <div class="container">
            <span class="prom-title">О компании</span>
            <p>Добро пожаловать на сайт компании Промэлектроника — вашего надежного партнера в сфере поставок промышленных электронных компонентов. Мы предлагаем широкий ассортимент продукции для решения любых задач в области электроники и автоматизации.</p>
        </div>
    </section>

    @include("partials.order")

@endsection
