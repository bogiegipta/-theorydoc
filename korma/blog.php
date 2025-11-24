<?php
$pageTitle = 'Блог | Натуральные корма для питомцев';
$pageDescription = 'Полезные статьи о питании питомцев, новости компании и советы ветеринаров';
require_once 'include/header.php';
?>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1 class="fw-light">Блог и новости</h1>
            <p class="lead text-body-secondary">Полезные статьи о питании и уходе за вашими питомцами</p>
        </div>
    </div>
</section>

<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <article class="card mb-4 featured-article">
                <img src="assets/img/blog1.jpg" class="card-img-top" alt="Основная статья">
                <div class="card-body">
                    <span class="badge pet-food-badge mb-2">Статьи</span>
                    <h2 class="card-title">Как выбрать правильный корм для щенка</h2>
                    <p class="card-text">Полноценное питание в первый год жизни щенка критически важно для его здоровья и развития. В нашей статье мы расскажем о ключевых принципах выбора корма...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-success">Читать далее</button>
                        <small class="text-body-secondary">15 ноября 2025</small>
                    </div>
                </div>
            </article>

            <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
                <div class="col">
                    <div class="card news-card">
                        <img src="assets/img/news1.jpg" class="card-img-top" alt="Новость 1">
                        <div class="card-body">
                            <span class="badge natural-badge mb-2">Новинки</span>
                            <h5 class="card-title">Новая линейка гипоаллергенных кормов</h5>
                            <p class="card-text">Мы запустили производство новой серии кормов для питомцев с чувствительным пищеварением...</p>
                            <small class="text-body-secondary">10 ноября 2025</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card news-card">
                        <img src="assets/img/news2.jpg" class="card-img-top" alt="Новость 2">
                        <div class="card-body">
                            <span class="badge bg-danger mb-2">Акции</span>
                            <h5 class="card-title">Скидки к празднику</h5>
                            <p class="card-text">Специальные цены на все корма для кошек и собак в честь Дня защитника Отечества...</p>
                            <small class="text-body-secondary">5 ноября 2025</small>
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item active"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Вперёд</a></li>
                </ul>
            </nav>
        </div>

        <div class="col-md-4">
            <aside class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Рубрики</h5>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-secondary">Питание кошек</span>
                        <span class="badge bg-secondary">Питание собак</span>
                        <span class="badge bg-secondary">Здоровье питомцев</span>
                        <span class="badge bg-secondary">Советы ветеринара</span>
                    </div>
                </div>
            </aside>

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Теги</h5>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-secondary">натуральный корм</span>
                        <span class="badge bg-secondary">витамины</span>
                        <span class="badge bg-secondary">щенки</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">FAQ</h5>
                    <div class="accordion" id="blogAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                    Как перевести питомца на новый корм?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#blogAccordion">
                                <div class="accordion-body">
                                    Переход должен быть постепенным в течение 7-10 дней...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'include/footer.php'; ?>