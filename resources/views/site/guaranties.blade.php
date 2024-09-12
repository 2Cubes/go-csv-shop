@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <section class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#">Главная</a></li>
                <li>Доставка и оплата</li>
            </ul>
        </div>
    </section>

    <section class="delivery">
        <div class="container">
            <span class="prom-title">Доставка и оплата</span>
            <div class="delivery-wrapper">
                <div class="delivery-item">
                    <span class="number">01</span>
                    <span class="sub-title">Оставьте свой запрос</span>
                    <p>Отправьте заявку на оборудование, которое планируете приобрести. Если вы обращаетесь к нам впервые, то в заявке укажите реквизиты вашего юр.лица/ИП и контактные данные.</p>
                </div>
                <div class="delivery-item">
                    <span class="number">02</span>
                    <span class="sub-title">Получите ответ</span>
                    <p>Менеджер компании даст детальный ответ на ваш запрос в течение 10 минут. Проконсультирует по всем вопросам, предоставит полную информацию о наличии товара на складе, цене, условиях оплаты, возможных сроках поставки и других параметрах сделки.</p>
                </div>
                <div class="delivery-item">
                    <span class="number">03</span>
                    <span class="sub-title">Оформление и оплата</span>
                    <p>После оформления заявки мы отправим вам счет на оплату в евро. Оплата товара производится на основании полученного счета по курсу Центрального банка Российской Федерации на день оплаты. Мы работаем только по безналичной оплате с юридическими лицами и ИП, зарегистрированными в странах Таможенного союза – России, Белоруссии, Казахстане и Армении.</p>
                </div>
            </div>
            <span class="prom-title">Варианты доставки</span>
            <div class="delivery-variants">
                <img src="/img/delivery.png" alt="" />
            </div>
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
