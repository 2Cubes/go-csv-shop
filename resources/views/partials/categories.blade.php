<section class="manufacturers bg-white text-center py-5">
    <div class="container">
        <span class="title prom-title my-3 mb-5"><span class="accent-text">{{ number_format($totalCategories, 0, '.', ' ') }}</span> категорий товаров</span>
        <div class="manufacture-wrapper three-columns">
            @foreach($categories as $index => $category)
                <div class="item bg">
                    <a href="{{ route('category', $category->id) }}" class="name">{{ $category->name }}</a>
                    <span class="number">{{ $category->products_count }}</span>
                </div>
            @endforeach

        </div>
        <a href="/catalog" style="width: 250px;" class="btn prom-btn mt-5 mb-3">Показать все категории</a>
    </div>
</section>
