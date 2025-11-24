<!-- Модальное окно контактов -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="contactModalLabel">Контакты</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Наш адрес</h3>
                        <p><strong>Натуральные корма для питомцев</strong></p>
                        <p>г. Москва, ул. Эко-Парковая, д. 12</p>
                        <p>Бизнес-центр "ЗооПарк", офис 205</p>
                        
                        <h4 class="mt-4">Телефоны</h4>
                        <p>📞 +7 (495) 765-43-21</p>
                        <p>📱 +7 (999) 123-45-67 (WhatsApp)</p>
                        
                        <h4 class="mt-4">Email</h4>
                        <p>✉️ info@natural-petfood.ru</p>
                        <p>✉️ orders@natural-petfood.ru</p>
                        
                        <h4 class="mt-4">Режим работы</h4>
                        <p>Пн-Пт: 9:00 - 19:00</p>
                        <p>Сб: 10:00 - 16:00</p>
                        <p>Вс: выходной</p>
                    </div>
                    <div class="col-md-6">
                        <h3>Форма обратной связи</h3>
                        <form method="post" action="servers.php">
                            <div class="mb-3">
                                <label for="name" class="form-label">Имя</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Сообщение</label>
                                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>