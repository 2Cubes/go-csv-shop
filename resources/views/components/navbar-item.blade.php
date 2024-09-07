@props(['route'])

@php
    $active = request()->routeIs($route) || ($route === 'catalog' && request()->routeIs('catalog', 'product', 'brand', 'category'));
@endphp

<li class="py-3 navbar-item {{ $active ? 'active' : '' }}">
    <a href="{{ route($route) }}">{{ $slot }}</a>
</li>
