<section >
    <div class="container px-4 px-lg-5 mt-4">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <nav
                style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    @foreach ($breadcrumbs as $breadcrumb)
                        @if (!$loop->last)
                            <li class="breadcrumb-item"><a
                                    href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['title'] }}</a></li>
                        @else
                            <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb['title'] }}</li>
                        @endif
                    @endforeach
                </ol>
            </nav>
        </div>
    </div>
</section>
