<!-- Filter Form -->
<div class="col-lg-3 mb-5">
    <div class="card">
        <div class="card-body">
            <form method="GET" action="{{ route('index') }}">
                <!-- Search Field -->
                <div class="mb-3">
                    <label for="search" class="form-label">Поиск</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="search" name="search" placeholder="Поиск..."
                               value="{{ isset($searchQuery) ? old('search', $searchQuery) : '' }}">
                        <button class="btn btn-outline-secondary" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <!-- Brand Filter -->
                <!-- Brand Filter with Checkboxes -->
                <div class="mb-3">
                    <label class="form-label">Бренды</label>
                    <div
                        style="overflow: scroll; height: 400px; border: 1px solid #eee; border-radius: 5px; padding: 10px;">
                        @foreach($brands as $brand)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="brand[]"
                                       id="brand{{ $brand->id }}" value="{{ $brand->id }}"
                                       @if(isset($selectedBrands) && is_array(old('brand', $selectedBrands)) && in_array($brand->id, old('brand', $selectedBrands))) checked @endif>
                                <label class="form-check-label" for="brand{{ $brand->id }}">
                                    {{ $brand->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Category Filter -->
                <div class="mb-3">
                    <label class="form-label">Категории</label>
                    <ul class="list-unstyled">
                        @foreach($categories as $category)
                            <li><a href="{{ route('category', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Price Filter -->
                <div class="mb-3">
                    <label for="price_from" class="form-label">Цена от</label>
                    <input type="number" class="form-control" id="price_from" name="price_from" placeholder="0"
                           value="{{ isset($priceFrom) ? old('price_from', $priceFrom) : '' }}">
                </div>
                <div class="mb-3">
                    <label for="price_to" class="form-label">Цена до</label>
                    <input type="number" class="form-control" id="price_to" name="price_to" placeholder="0"
                           value="{{ isset($priceTo) ? old('price_to', $priceTo) : '' }}">
                </div>
                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Применить фильтры</button>
                </div>
            </form>
        </div>
    </div>
</div>
