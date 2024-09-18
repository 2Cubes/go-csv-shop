@extends('layouts.app')

@section('title', 'Доставка оборудования')
@section('description', "Доставляем проверенными транспортными компаниями по всей России и СНГ. Работаем с Деловыми линиями, СДЭК, ПЭК, DPD. Отгрузка большинства позиций в день заказа.")

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
                    <p>Менеджер компании даст детальный ответ на ваш запрос в течение 30 минут. Проконсультирует по всем вопросам, предоставит полную информацию о наличии товара на складе, цене, условиях оплаты, возможных сроках поставки и других параметрах сделки.</p>
                </div>
                <div class="delivery-item">
                    <span class="number">03</span>
                    <span class="sub-title">Оформление и оплата</span>
                    <p>После оформления заявки мы отправим вам счет на оплату.. Мы работаем только по безналичной оплате с юридическими лицами и ИП, зарегистрированными в странах Таможенного союза – России, Белоруссии, Казахстане и Армении.</p>
                </div>
            </div>
            <span class="prom-title">Варианты доставки</span>
            <div class="delivery-variants">
                <img src="/img/delivery.png" alt="" />
            </div>
        </div>
    </section>

    @include("partials.order")

@endsection
