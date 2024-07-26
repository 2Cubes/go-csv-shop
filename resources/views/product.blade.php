@extends('layouts.app')

@section('title', $product->name)

@section('content')

    <!-- Product section-->
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                                           src="{{ asset('images/placeholder-big.jpg') }}" alt="..."/></div>
                <div class="col-md-6">
                    <div class="small mb-1">Артикул: {{ $product->sku }}</div>
                    <h1 class="display-5 fw-bolder">{{ $product->name }}</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through">{{ number_format($product->price * 1.3, 2, '.', ' ') }} руб</span>
                        <span>{{ number_format($product->price, 2, '.', ' ') }} руб</span>
                    </div>
                    <p class="lead">{{ $product->description }}</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"
                               style="max-width: 3rem"/>
                        <button class="btn btn-outline-dark flex-shrink-0" type="button" data-bs-toggle="modal" data-bs-target="#requestModal" >
                            <i class="bi-cart-fill me-1"></i>
                            Заказать
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Похожие товары</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($products as $product)
                    <div class="col mb-5">
                        @include("partials.item")
                    </div>
                @endforeach
            </div>

@endsection
