@extends('layouts.app')

@php
if(isset($category) && $category) {
    $title = $category->name;
}elseif(isset($brand) && $brand) {
    $title = $brand->name;
}
if(isset($category) && $category) {
    $title = $category->name;
}elseif(isset($brand) && $brand) {
    $title = $brand->name;
}

$pageTitle = $title; // базовый заголовок
if (request()->has('page') && request()->page > 1) {
    $pageTitle .= " - Страница " . request()->page; // добавляем номер страницы только для тега <title>
}
@endphp


@section('title', $pageTitle . " от официального дилера Промэлектроника — широкий выбор и быстрая доставка")
@section('description', "Для заказа «".$title."» от официального дилера Промэлектроника: большой выбор промышленного оборудования, выгодные цены, быстрая доставка по России и странам СНГ. Оставьте запрос, получите индивидуальную консультацию и сделайте уверенный выбор для вашего бизнеса.")



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

                <p>Все поставки {{ $title }} осуществляются без посредников, что гарантирует оригинальность продукции и официальную гарантию завода-изготовителя. Мы предлагаем сертифицированное оборудование, соответствующее всем стандартам качества, с возможностью увеличенной гарантии до 12 месяцев. Прямые поставки {{ $title }} позволяют компании Промэлектроника предлагать выгодные условия на покупку высококачественного оборудования по всей России и странам СНГ.</p>
<span class="prom-title">{{ $title }} - преимущества работы с официальным дилером Промэлектроника</span>
<ul>
    <li>**Официальный статус дилера**: Компания Промэлектроника является официальным дилером {{ $title }}, что подтверждено сертификатами и долгосрочными партнёрскими соглашениями.</li>
    <li>**Широкий выбор оборудования**: Мы предлагаем тысячи наименований продукции {{ $title }}, подходящих для различных промышленных задач.</li>
    <li>**Оптимальные цены и условия**: Благодаря прямым поставкам и отсутствию посредников, мы обеспечиваем конкурентные цены и гибкие условия сотрудничества.</li>
    <li>**Быстрая доставка по РФ и СНГ**: Логистические процессы компании Промэлектроника оптимизированы для обеспечения минимальных сроков поставок.</li>
</ul>
<p>
    {{ $title }} доступны для заказа как оптом, так и в розницу. Наши менеджеры оперативно предоставят информацию о ценах, сроках доставки и других деталях. Вы можете отправить запрос через форму на сайте, позвонить по указанным телефонам или написать на электронную почту — мы отвечаем в течение 60 минут после запроса. 
</p>
<p>
    Компания Промэлектроника — ведущий поставщик промышленного электронного оборудования. Мы гордимся статусом официального дилера {{ $title }}, а также более 5000 мировых производителей. Надежность, качество и ориентированность на клиента делают нас вашим надежным партнером в сфере поставок промышленного оборудования.
</p>
            </div>

        </div>
    </section>

@endsection
