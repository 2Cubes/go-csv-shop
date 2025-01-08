@extends('layouts.app')


@section('title', "Покупайте электронные компоненты и промышленное оборудование в компании Промэлектроника")
@section('description', "Быстрая доставка оборудования по России и СНГ. Низкие цены на оборудование. Оптовые поставки электронных компонентов, продажа электрооборудования, датчиков, контроллеров, сервоприводов, электромеханического оборудования  и комплектующих, интернет-магазин радиодеталей. Один из крупнейших  поставщиков электронных компонентов в России.")

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

    @include("partials.manufacturers")

    @include("partials.order")

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
                        <div><img src="/img/logos/gasprom.jpg" alt="Газпром" class="img-fluid"></div>
                        <div><img src="/img/logos/lukoil.jpg" alt="Лукойл" class="img-fluid"></div>
                        <div><img src="/img/logos/mac.jpg" alt="МАК" class="img-fluid"></div>
                        <div><img src="/img/logos/surgutneftegas.jpg" alt="СургутНефтеГаз" class="img-fluid"></div>
                        <div><img src="/img/logos/tatneft.jpg" alt="ТатНефть" class="img-fluid"></div>
                        <div><img src="/img/logos/tehnonikol.jpg" alt="ТехноНиколь" class="img-fluid"></div>
                        <div><img src="/img/logos/uralmashzavod.jpg" alt="УралМашЗавод" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
