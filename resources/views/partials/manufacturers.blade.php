<section class="manufacturers bg-white text-center py-5">
    <div class="container">
        <span class="title prom-title"><span class="accent-text">{{ $totalBrands }}</span>  {{ trans_choice('messages.producers', $totalBrands) }},</span>
        <span class="title prom-title"><span class="accent-text">{{ number_format($totalProducts, 0, '.', ' ') }}</span> товаров</span>
        <div class="manufacture-wrapper">
            @foreach($brands as $index => $brand)
                <div class="item bg">
                    <a href="{{ route('brand', $brand->id) }}" class="name">{{ $brand->name }}</a>
                    <span class="number">{{ $brand->products_count }}</span>
                </div>
            @endforeach
        </div>

        <a href="{{ route('manufacturers') }}" style="width: 200px" class="btn prom-btn mt-5 mb-3">Показать все бренды</a>
    </div>
</section>
