@php
    $currentRoute = Illuminate\Support\Facades\Route::currentRouteName();
@endphp

<div class="item">
    <div class="img-wrapper">
        <a href="{{ route('product', $product->id) }}"><img src="{{ asset('images/placeholder.png') }}" alt=""></a>
    </div>
    <a href="{{ route('product', $product->id) }}" class="name">{{ $product->name }}</a>
    <p>{{ Str::limit($product->description, 100) }}</p>
    <span class="price">
        @if($product->price * 1)
            {{ number_format($product->price, 2, '.', ' ') }}  ₽
        @else
            Уточняйте цену
        @endif
    </span>
</div>
