@php
    $currentRoute = Illuminate\Support\Facades\Route::currentRouteName();
@endphp

<div class="item">
    <div class="img-wrapper">
        <a href="{{ route('product', ["sku" => preg_replace('/[^A-Za-z0-9\-_]/', '', $product->sku), "id" => $product->id]) }}"><img src="{{ asset('images/placeholder.png') }}" alt=""></a>
    </div>
    <a href="{{ route('product', ["sku" => preg_replace('/[^A-Za-z0-9\-_]/', '', $product->sku), "id" => $product->id]) }}" class="name">{{ $product->name }}</a>
    <p>{{ Str::limit($product->description, 100) }}</p>
<span class="price">
    @if($product->price * 1)
        {{ number_format($product->price, 2, '.', ' ') }}  ₽
    @else
        по запросу
    @endif
</span>
</div>
