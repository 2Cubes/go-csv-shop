@if(isset($categories) && $categories)
    <span class="sub-title">Категории</span>
    <ul>
        @foreach($categories as $category)
            <li><a href="{{ route('category', $category->id) }}"><span class="name">{{ $category->name }}</span><span class="number">{{ $category->products_count }}</span></a></li>
        @endforeach
    </ul>
@endif

@if(isset($brands) && $brands)
    <span class="sub-title">Бренды</span>
    <ul>
        @foreach($brands as $brand)
            <li><a href="{{ route('brand', $brand->id) }}"><span class="name">{{ $brand->name }}</span></a></li>
        @endforeach
    </ul>
@endif
