@extends('layouts.app')

@section('title', "Производители Промэлектроника")
@section('description', "Для заказа пришлите запрос на электронную почту sales@prom-elec.com. Быстрая доставка по России и странам СНГ.")

@php
    $initialCount = 32;
@endphp

@section('content')

    <style type="text/css">
        .manufacturers .manufacture-wrapper .item:not(.shown) {
            display: none;
        }
    </style>
    <section class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Главная</a></li>
                <li>Производители</li>
            </ul>
        </div>
    </section>

    <section class="manufacturers bg-white text-center py-3">
        <div class="container">
            <span class="title prom-title"><span class="accent-text">{{ $totalBrands }}</span>  {{ trans_choice('messages.producers', $totalBrands) }},</span>
            <span class="title prom-title"><span class="accent-text">{{ number_format($totalProducts, 0, '.', ' ') }}</span> товаров</span>

            <div class="checker">
                <span class="all"><a href="{{ route('manufacturers') }}">Все бренды</a></span>
                <div class="letters">
                    <span><a href="{{ route('manufacturers', ['letter' => 'a']) }}">a</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'b']) }}">b</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'c']) }}">c</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'd']) }}">d</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'e']) }}">e</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'f']) }}">f</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'g']) }}">g</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'h']) }}">h</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'i']) }}">i</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'j']) }}">j</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'k']) }}">k</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'l']) }}">l</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'm']) }}">m</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'n']) }}">n</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'o']) }}">o</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'p']) }}">p</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'q']) }}">q</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'r']) }}">r</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 's']) }}">s</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 't']) }}">t</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'u']) }}">u</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'v']) }}">v</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'x']) }}">x</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'y']) }}">y</a></span>
                    <span><a href="{{ route('manufacturers', ['letter' => 'z']) }}">z</a></span>
                    <span>4</span>
                </div>
            </div>
            <div class="manufacture-wrapper">
                @foreach($brands as $index => $brand)
                    <div class="item bg {{ $index < $initialCount || $letter ? 'shown' : '' }}">
                        <a href="{{ route('brand', $brand->slug) }}" class="name">{{ $brand->name }}</a>
                        <span class="number">{{ $brand->products_count }}</span>
                    </div>
                @endforeach
            </div>
            @if(!$letter)
                <button class="btn prom-btn mt-5 mb-3" id="toggleBrandsBtn">Показать все бренды</button>
            @endif
        </div>
    </section>

@endsection
