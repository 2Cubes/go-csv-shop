@extends('layouts.app')

@section('title', 'Home Page')

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
            <p>6088 - поставки оборудование и комплектующих по России. Мы работаем с поставщиками по всему миру и в карте наших поставок более пяти тысяч производителей. Наша команда нацелена на привлечение новых поставщиков промышленного электронного оборудования, и проработку взаимовыгодных отношений с официальными дистрибьюторами разных брендов.<br>
                Мы осуществляем поставки по всей России и в страны СНГ. Готовы дать объемы поставок и возможность бесплатного размещения рекламы Вашей продукции на нашем сайте, на условиях получения уникальных предложений от Вас.
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

    <!-- Contacts Section -->
    <section class="contacts">
        <div class="container">
            <span class="prom-title">Контакты</span>
            <div class="contacts-wrapper">
                <div class="contact-item">
                    <img class="me-2" src="/img/location.svg" alt="">
                    <span>Адрес</span>
                </div>
                <div class="contact-item">
                    <img class="me-2" src="/img/phone.svg" alt="">
                    <span>8-800-350-57-63</span>
                </div>
                <div class="contact-item">
                    <img class="me-2" src="/img/mail.svg" alt="">
                    <span>info@mail.com</span>
                </div>
            </div>
        </div>
    </section>

@endsection
