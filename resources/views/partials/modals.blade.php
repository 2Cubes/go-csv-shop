<!-- Modal -->
<div class="modal fade" id="requestModal" tabindex="-1" aria-labelledby="requestModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="requestModalLabel">Заполните данные по заявке</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="requestForm" action="{{ route('send.request') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="request_name" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="request_name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="request_phone" class="form-label">Телефон</label>
                        <input type="text" class="form-control phone" id="request_phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="request_email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="request_email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="request_comment" class="form-label">Комментарий к заказу</label>
                        <textarea class="form-control" id="request_comment" name="comment" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn prom-btn">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="callModal" tabindex="-1" aria-labelledby="callModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="requestModalLabel">Закажите обратный звонок</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="callForm" action="{{ route('send.call') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="call_name" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="call_name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="call_phone" class="form-label">Телефон</label>
                        <input type="text" class="form-control phone" id="call_phone" name="phone" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn prom-btn">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>

@if (session('success'))
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1100">
        <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif

<script>
    $(document).ready(function() {
        var toastElement = $('#successToast');
        if (toastElement.length) {
            var toast = new bootstrap.Toast(toastElement);
            toast.show();
        }

        $('.phone').mask('+7(999)-999-9999');

        $('#requestForm, #requestInlineForm').on('submit', function(event) {
            var form = $(this);
            if (form[0].checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.addClass('was-validated');
        });

        $('#callForm').on('submit', function(event) {
            var form = $(this);
            if (form[0].checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.addClass('was-validated');
        });
    });
</script>
