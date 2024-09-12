@extends('layouts.app')

@section('title', 'Home Page')

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

    <!-- Contact Form Section -->
    <section class="contact-form text-white text-center p-5">
        <div class="container">
            <h2 class="prom-title">Отправьте заявку и узнайте стоимость прямо сейчас</h2>
            <p class="description">Ответим на ваш запрос в течение 15 минут</p>
            <form class="row g-3 form-row">
                <div class="col-md-6 col-12">
                    <input type="text" class="form-control" placeholder="Ваш телефон">
                </div>
                <div class="col-md-6 col-12">
                    <input type="text" class="form-control" placeholder="Артикул или описание">
                </div>
                <div class="col-md-6 col-12">
                    <input type="email" class="form-control" placeholder="Почта">
                </div>
                <div class="col-md-6 col-12">
                    <button type="submit" class="btn prom-btn">Отправить запрос</button>
                </div>
                <div class="col-12 checkbox-wrapper">
                    <input type="checkbox" class="form-check-input me-2" id="consentCheck">
                    <label class="form-check-label" for="consentCheck">Согласие с условиями <a href="#">политики конфиденциальности</a> и <a href="#">пользовательского соглашения</a></label>
                </div>
            </form>
        </div>
    </section>

@endsection
