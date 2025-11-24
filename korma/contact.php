<?php
$pageTitle = 'Контакты | Натуральные корма для питомцев';
$pageDescription = 'Свяжитесь с нами: адрес, телефоны, email и форма обратной связи';
require_once 'include/header.php';
?>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1 class="fw-light">Контакты</h1>
            <p class="lead text-body-secondary">Свяжитесь с нами удобным для вас способом</p>
        </div>
    </div>
</section>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="card-title"><i class="bi bi-geo-alt-fill text-success"></i> Наш адрес</h3>
                    <p class="mt-3"><strong>Натуральные корма для питомцев</strong></p>
                    <address>
                        г. Москва, ул. Эко-Парковая, д. 12<br>
                        Бизнес-центр "ЗооПарк", офис 205<br>
                        <i class="bi bi-telephone text-success"></i> +7 (495) 765-43-21<br>
                        <i class="bi bi-whatsapp text-success"></i> +7 (999) 123-45-67<br>
                        <i class="bi bi-envelope text-success"></i> info@natural-petfood.ru<br>
                        <i class="bi bi-envelope text-success"></i> orders@natural-petfood.ru
                    </address>
                    <hr>
                    <h4>Режим работы</h4>
                    <p><strong>Пн-Пт:</strong> 9:00 - 19:00<br>
                    <strong>Сб:</strong> 10:00 - 16:00<br>
                    <strong>Вс:</strong> выходной</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><i class="bi bi-chat-dots-fill text-success"></i> Форма обратной связи</h3>
                    <form method="post" action="servers.php" class="mt-3">
                        <div class="mb-3">
                            <label for="name" class="form-label">Ваше имя *</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Телефон</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Сообщение *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg w-100">Отправить сообщение</button>
                    </form>
                    <p class="mt-3 text-muted">* — поля, обязательные для заполнения</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; ?>