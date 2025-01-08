<header class="main-header">
    <div class="container mobile-header">
        <div class="logo-wrapper">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
            <i class="bi bi-list menu-toggle" ></i>
        </div>
    </div>
    <div class="container header-wrapper d-flex justify-content-between align-items-center">

        <div class="logo-wrapper">
            <a href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}" alt="Logo"></a>
        </div>
        <div class="right">
            <i class="bi bi-x menu-toggle" ></i>
            <form action="{{ route('catalog') }}" method="GET" class="input-group search-group flex-grow-1">
                <img class="search-icon" src="{{ asset('img/search.svg') }}" alt="">
                <input name="search" type="text" class="form-control d-inline-block w-auto" placeholder="Поиск по сайту" />
                <button class="btn prom-btn p-4">Найти</button>
            </form>
            <div class="d-flex justify-content-between align-items-center">
                <a href="tel:+8-800-350-57-63" class="ms-3 main-phone"><img src="{{ asset('img/phone.svg') }}" class="ms-4" alt="" /> 8-800-350-57-63</a>
            <a href="https://forms.yandex.ru/u/67374a5749363926b5f71541/" class="header-btn ms-4 p-4 btn prom-btn-outline" target="_blank">Отправить запрос</a>
               <a href="https://forms.yandex.ru/u/67374a5749363926b5f71541/" class="header-btn ms-4 p-4 btn prom-btn-outline" target="_blank">Отправить запрос</a>
            </div>
        </div>

        <!-- Main Navbar -->
        <nav class="main-navbar">
            <ul class="p-0 main-navbar-wrapper">
                <x-navbar-item route="index">Склад</x-navbar-item>
                <x-navbar-item route="manufacturers">Производители</x-navbar-item>
                <x-navbar-item route="catalog">Каталог</x-navbar-item>
                <x-navbar-item route="delivery">Доставка</x-navbar-item>
                <x-navbar-item route="guaranties">Гарантии</x-navbar-item>
                <x-navbar-item route="suppliers">Поставщикам</x-navbar-item>
                <x-navbar-item route="about-us">О компании</x-navbar-item>
                <x-navbar-item route="contacts">Контакты</x-navbar-item>
            </ul>
        </nav>

    </div>
</header>
