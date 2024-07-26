@php
    $currentRoute = Illuminate\Support\Facades\Route::currentRouteName();
@endphp

<div class="card h-100">
    <!-- Product image-->
    <img class="card-img-top" src="{{ asset('images/placeholder.png') }}" alt="..." />
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <h6 class="fw-bolder"><a href="{{ route('product', $product->id) }}">{{ $product->name }}
                    @if($currentRoute !== 'category' && $currentRoute !== 'product')
                        - {{ $product->category->name }}
                    @endif
                </a>
            </h6>
            <!-- Product price-->
            @if($product->price * 1)
                {{ number_format($product->price, 2, '.', ' ') }} руб
            @else
                Уточняйте цену
            @endif

        </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#requestModal" href="#">Заказать</a></div>
    </div>
</div>
