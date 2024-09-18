<!-- Contact Form Section -->
<section class="contact-form text-white text-center p-5">
    <div class="container">
        <h2 class="prom-title">Отправьте заявку и узнайте стоимость прямо сейчас</h2>
        <p class="description">Ответим на ваш запрос в течение 15 минут</p>
        <form id="requestInlineForm" class="row g-3 form-row" action="{{ route('send.request') }}" method="POST">
            <div class="col-md-6 col-12">
                <input type="text" class="form-control phone" placeholder="Ваш телефон" name="phone" required>
            </div>
            <div class="col-md-6 col-12">
                <input type="text" class="form-control" placeholder="Артикул или описание" name="sku" required>
            </div>
            <div class="col-md-6 col-12">
                <input type="email" class="form-control" placeholder="Почта" name="email">
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
