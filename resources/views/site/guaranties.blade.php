@extends('layouts.app')

@section('title', 'Гарантия на приобретенное оборудование')
@section('description', 'На большинство позиций срок гарантий составляет 12 месяцев. Можете быть уверены в качестве приобретенного оборудования. Перед продажей оборудование проходит все стадии тестирования на возможный брак и неисправности')

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

    @include("partials.order")

@endsection
