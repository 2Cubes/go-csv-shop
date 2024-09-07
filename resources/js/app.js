import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min';

ymaps.ready(function () {
    var map = new ymaps.Map("yandex-map", {
        center: [55.751574, 37.573856],
        zoom: 18,
        controls: []
    });
    map.behaviors.disable(['scrollZoom', 'drag', 'rightMouseButtonMagnifier']);
});

$(document).ready(function(){
    $('.slick-carousel').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        speed: 300,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button type="button" class="slick-prev"><img src="/img/chevron-left.svg" alt="Предыдущий"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="/img/chevron-right.svg" alt="Следующий"></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.slick-carousel').removeClass('d-none').css('visibility', 'visible');
    $('.menu-toggle').on('click', function() {
        $('header').toggleClass('opened');
    });
    var isHidden = true;
    $('#toggleBrandsBtn').click(function () {
        if (isHidden) {
            $('.manufacture-wrapper .item').show();
            $(this).text('Скрыть бренды');
        } else {
            $('.manufacture-wrapper .item').not('.shown').hide();
            $(this).text('Показать все бренды');
        }
        isHidden = !isHidden;
    });

});
