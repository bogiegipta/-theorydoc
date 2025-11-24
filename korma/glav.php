<?php
$pageTitle = 'Главная страница - Альтернативный вид';
$pageDescription = 'Быстрый доступ к основным разделам сайта';
require_once 'inlcude/header.php';
?>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1 class="fw-light">Быстрый доступ</h1>
            <p class="lead text-body-secondary">Выберите нужный раздел</p>
        </div>
    </div>
</section>

<div class="container py-5">
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-4 text-center">
        <div class="col">
            <a href="products.php" class="btn btn-success btn-lg w-100 py-4">
                <i class="bi bi-shop fs-1"></i><br>
                <span class="d-none d-md-inline">Продукция</span>
            </a>
        </div>
        <div class="col">
            <a href="about.php" class="btn btn-info btn-lg w-100 py-4 text-white">
                <i class="bi bi-info-circle fs-1"></i><br>
                <span class="d-none d-md-inline">О нас</span>
            </a>
        </div>
        <div class="col">
            <a href="news.php" class="btn btn-warning btn-lg w-100 py-4">
                <i class="bi bi-newspaper fs-1"></i><br>
                <span class="d-none d-md-inline">Новости</span>
            </a>
        </div>
        <div class="col">
            <a href="yslugi.php" class="btn btn-danger btn-lg w-100 py-4">
                <i class="bi bi-cup-straw fs-1"></i><br>
                <span class="d-none d-md-inline">Услуги</span>
            </a>
        </div>
        <div class="col">
            <a href="contact.php" class="btn btn-primary btn-lg w-100 py-4">
                <i class="bi bi-telephone fs-1"></i><br>
                <span class="d-none d-md-inline">Контакты</span>
            </a>
        </div>
        <div class="col">
            <button class="btn btn-secondary btn-lg w-100 py-4" data-bs-toggle="modal" data-bs-target="#contactModal">
                <i class="bi bi-envelope fs-1"></i><br>
                <span class="d-none d-md-inline">Написать</span>
            </button>
        </div>
    </div>
</div>

<?php require_once 'inlcude/footer.php'; ?>