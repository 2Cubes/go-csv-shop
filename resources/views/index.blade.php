@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    <!-- Main Banner -->
    <section class="main-intro text-white">
        <div class="container">
            <span class="prom-title mb-4">Промышленное электронное оборудование и комплектующие</span>
            <p class="main-description">из Европы, Америки и Азии по всей России</p>
            <div class="row items-wrapper">
                <div class="col-md-3 col-6 intro-item">
                    <div class="icon-wrapper mb-4"><img src="img/intro-icon1.svg" alt="" /></div>
                    <p>Бесплатная доставка <br> до клиента</p>
                </div>
                <div class="col-md-3 col-6 intro-item">
                    <div class="icon-wrapper mb-4"><img src="img/intro-icon2.svg" alt="" /></div>
                    <p>Экспресс доставка <br> от 1 дня</p>
                </div>
                <div class="col-md-3 col-6 intro-item">
                    <div class="icon-wrapper mb-4"><img src="img/intro-icon3.svg" alt="" /></div>
                    <p>Можем предложить <br> точный аналог</p>
                </div>
                <div class="col-md-3 col-6 intro-item">
                    <div class="icon-wrapper mb-4"><img src="img/intro-icon4.svg" alt="" /></div>
                    <p>Гарантия 12 <br>месяцев</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Manufacturers Section -->
    @include("partials.manufacturers")

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

    @include("partials.categories")

    <section class="about">
        <div class="container">
            <div class="left">
          <span class="prom-title">
            О компании
          </span>
                <p>Добро пожаловать на сайт компании Промэлектроника — вашего надежного партнера в сфере поставок промышленных электронных компонентов. Мы предлагаем широкий ассортимент продукции для решения любых задач в области электроники и автоматизации.</p>
            </div>
            <div class="right">
                <img src="/img/about.png" alt="" />
            </div>
        </div>
    </section>

    <!-- Slider Section -->
    <section class="slick-slider">
        <div class="container my-5">
      <span class="prom-title">
        Более 2300 компаний заказывают оборудование у нас
      </span>
            <div class="row">
                <div class="col-12 px-5">
                    <div class="slick-carousel d-none">
                        <div><img src="/img/example-logo.png" alt="Слайд 1" class="img-fluid"></div>
                        <div><img src="/img/example-logo.png" alt="Слайд 2" class="img-fluid"></div>
                        <div><img src="/img/example-logo.png" alt="Слайд 3" class="img-fluid"></div>
                        <div><img src="/img/example-logo.png" alt="Слайд 4" class="img-fluid"></div>
                        <div><img src="/img/example-logo.png" alt="Слайд 5" class="img-fluid"></div>
                        <div><img src="/img/example-logo.png" alt="Слайд 6" class="img-fluid"></div>
                        <div><img src="/img/example-logo.png" alt="Слайд 7" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
