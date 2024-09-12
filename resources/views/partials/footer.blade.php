@if(Route::currentRouteName() !== 'index')
<!-- Contact Form Section -->
<section class="contact-form text-white text-center p-5">
    <div class="container">
        <h2 class="prom-title">Отправьте заявку и узнайте стоимость прямо сейчас</h2>
        <p class="description">Ответим на ваш запрос в течение 15 минут</p>
        <form class="row g-3 form-row">
            <div class="col-md-6 col-12">
                <input type="text" class="form-control" placeholder="Ваш телефон">
            </div>
            <div class="col-md-6 col-12">
                <input type="text" class="form-control" placeholder="Артикул или описание">
            </div>
            <div class="col-md-6 col-12">
                <input type="email" class="form-control" placeholder="Почта">
            </div>
            <div class="col-md-6 col-12">
                <button type="submit" class="btn prom-btn">Отправить запрос</button>
            </div>
            <div class="col-12 checkbox-wrapper">
                <input type="checkbox" class="form-check-input me-2" id="consentCheck">
                <label class="form-check-label" for="consentCheck">Согласие с условиями <a href="#">политики конфиденциальности</a> и <a href="#">пользовательского соглашения</a></label>
            </div>
        </form>
    </div>
</section>
@endif

<!-- Contacts Section -->
<section class="contacts">
    <div class="container">
        <span class="prom-title">Контакты</span>
        <div class="contacts-wrapper">
            <div class="contact-item">
                <img class="me-2" src="/img/location.svg" alt="">
                <span>Адрес: г. Казань, ул. Восстания 100</span>
            </div>
            <div class="contact-item">
                <img class="me-2" src="/img/phone.svg" alt="">
                <span>8-800-350-57-63</span>
            </div>
            <div class="contact-item">
                <img class="me-2" src="/img/mail.svg" alt="">
                <span>sales@prom-elec.com</span>
            </div>
        </div>
    </div>
</section>

<section class="map">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Карта Яндекса -->
                <div id="yandex-map" style="width: 100%; height: 500px;"></div>
            </div>
        </div>
    </div>
</section>

<footer class="text-white py-4">
    <div class="container">
        <span class="prom-title">Обратная связь</span>
        <p>Оставьте заявку и наши менеджеры свяжутся с вами в течении 15 минут</p>
        <form id="callFooterForm" action="{{ route('send.call') }}" method="POST" class="input-group mt-4">
            @csrf
            <input type="text" class="phone" placeholder="Ваш телефон" required/>
            <button type="submit" class="btn prom-btn">Отправить</button>
        </form>
        <div class="bottom-line">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/contacts">Контакты</a></li>
                <li><a href="/catalog">Каталог</a></li>
            </ul>
            <span >© 2024 Все права защищены</span>
            <span class="ms-5">Политика конфиденциальности</span>
        </div>
    </div>
</footer>

<script>
    $(document).ready(function() {

        $('#callFooterForm').on('submit', function(event) {
            var form = $(this);
            if (form[0].checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.addClass('was-validated');
        });
    });
</script>
