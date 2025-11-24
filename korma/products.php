<?php
$pageTitle = 'Продукция | Натуральные корма для питомцев';
$pageDescription = 'Натуральные корма для кошек и собак всех возрастов. Лакомства, витамины, гипоаллергенные и лечебные диеты.';
require_once 'include/header.php';
?>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1 class="fw-light">Наша продукция</h1>
            <p class="lead text-body-secondary">Качественные натуральные корма для здоровья и счастья ваших питомцев</p>
        </div>
    </div>
</section>

<!-- Основные категории -->
<div class="container py-5">
    <h2 class="text-center mb-5">Категории продукции</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        
        <!-- Корма для кошек -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-4">
                        <i class="bi bi-heart-fill" style="font-size: 3rem; color: #28a745;"></i>
                    </div>
                    <h5 class="card-title">Корма для кошек</h5>
                    <p class="card-text">Полнорационные корма для кошек всех возрастов. Беззерновые формулы, гипоаллергенные варианты, корма для стерилизованных животных.</p>
                    <button class="btn btn-outline-success mt-auto">Смотреть ассортимент</button>
                </div>
            </div>
        </div>

        <!-- Корма для собак -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-4">
                        <i class="bi bi-star-fill" style="font-size: 3rem; color: #28a745;"></i>
                    </div>
                    <h5 class="card-title">Корма для собак</h5>
                    <p class="card-text">Сбалансированные корма для собак разных пород и размеров. Для щенков, взрослых и пожилых собак, активных питомцев.</p>
                    <button class="btn btn-outline-success mt-auto">Смотреть ассортимент</button>
                </div>
            </div>
        </div>

        <!-- Лакомства -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-4">
                        <i class="bi bi-gem" style="font-size: 3rem; color: #28a745;"></i>
                    </div>
                    <h5 class="card-title">Натуральные лакомства</h5>
                    <p class="card-text">Полезные лакомства для дрессировки и поощрения. Сушеное мясо, овощные чипсы, витаминные подушечки.</p>
                    <button class="btn btn-outline-success mt-auto">Смотреть ассортимент</button>
                </div>
            </div>
        </div>

        <!-- Витамины -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-4">
                        <i class="bi bi-droplet-fill" style="font-size: 3rem; color: #28a745;"></i>
                    </div>
                    <h5 class="card-title">Витаминные добавки</h5>
                    <p class="card-text">Комплексы витаминов и минералов для поддержания здоровья шерсти, кожи, суставов и иммунной системы.</p>
                    <button class="btn btn-outline-success mt-auto">Смотреть ассортимент</button>
                </div>
            </div>
        </div>

        <!-- Гипоаллергенные -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-4">
                        <i class="bi bi-shield-check" style="font-size: 3rem; color: #28a745;"></i>
                    </div>
                    <h5 class="card-title">Гипоаллергенные корма</h5>
                    <p class="card-text">Специальные корма для питомцев с чувствительным пищеварением и аллергиями. Ограниченное количество ингредиентов.</p>
                    <button class="btn btn-outline-success mt-auto">Смотреть ассортимент</button>
                </div>
            </div>
        </div>

        <!-- Лечебные корма -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="mb-4">
                        <i class="bi bi-bandaid-fill" style="font-size: 3rem; color: #28a745;"></i>
                    </div>
                    <h5 class="card-title">Лечебные диеты</h5>
                    <p class="card-text">Специализированные корма для животных с заболеваниями почек, суставов, мочекаменной болезнью и другими проблемами.</p>
                    <button class="btn btn-outline-success mt-auto">Смотреть ассортимент</button>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Преимущества -->
<div class="container py-5 bg-light rounded-3">
    <h2 class="text-center mb-4">Наши преимущества</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col-md-6">
            <div class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill me-3" style="font-size: 2rem; color: #28a745;"></i>
                <div>
                    <h5>100% натуральные ингредиенты</h5>
                    <p>Все корма производятся только из натуральных ингредиентов без искусственных добавок и консервантов.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex align-items-start">
                <i class="bi bi-truck me-3" style="font-size: 2rem; color: #28a745;"></i>
                <div>
                    <h5>Быстрая доставка</h5>
                    <p>Доставка по Москве в день заказа. Отправка в регионы транспортными компаниями с отслеживанием.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex align-items-start">
                <i class="bi bi-award me-3" style="font-size: 2rem; color: #28a745;"></i>
                <div>
                    <h5>Сертификаты качества</h5>
                    <p>Вся продукция имеет ветеринарные сертификаты и соответствует международным стандартам качества.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex align-items-start">
                <i class="bi bi-headset me-3" style="font-size: 2rem; color: #28a745;"></i>
                <div>
                    <h5>Консультация ветеринара</h5>
                    <p>Бесплатная консультация по подбору корма от наших специалистов-ветеринаров.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ секция -->
<div class="container py-5">
    <h2 class="text-center mb-5">Часто задаваемые вопросы</h2>
    <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    Как перевести питомца на натуральный корм?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Переход должен быть постепенным в течение 7-10 дней. Смешивайте новый корм со старым, постепенно увеличивая долю натурального корма. Наблюдайте за реакцией питомца.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    Как хранить натуральные корма?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Храните в сухом прохладном месте, защищенном от прямых солнечных лучей. После вскрытия упаковки используйте в течение 2 месяцев. Рекомендуем пересыпать в герметичный контейнер.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    Есть ли гарантия на вашу продукцию?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Да, на всю продукцию предоставляется гарантия качества. Если у вашего питомца возникла аллергическая реакция, мы вернем деньги или предложим альтернативный корм.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Призыв к действию -->
<div class="container py-5 text-center bg-success text-white rounded-3">
    <h2>Нужна консультация по подбору корма?</h2>
    <p class="lead">Наши специалисты помогут подобрать идеальный корм для вашего питомца</p>
    <button class="btn btn-light btn-lg" data-bs-toggle="modal" data-bs-target="#contactModal">Получить консультацию</button>
</div>

<?php require_once 'include/footer.php'; ?>