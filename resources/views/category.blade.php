@extends('layouts.app')

@section('title', $category->name . " - покупайте в компании Промэлектроника")
@section('description', "Для заказа «название категории» пришлите запрос на электронную почту sales@prom-elec.com. Быстрая доставка по России и странам СНГ.")

@section('content')

            <div class="row gx-4 gx-lg-5 justify-content-center">
                @include("filter")
                <!-- Product List -->
                <div class="col-lg-9">
                    <h3 class="pb-3">{{ $category->name }}</h3>
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach($products as $product)
                            <div class="col mb-5">
                                @include('partials.item')
                            </div>
                        @endforeach
                    </div>
                    <!-- Pagination Links -->
                    <div class="d-flex justify-content-center">
                        {{ $products->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>

@endsection
