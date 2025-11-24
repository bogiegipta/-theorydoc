<!doctype html>
<html lang="ru" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $pageDescription ?? 'Натуральные корма для кошек и собак'; ?>">
    <title><?php echo $pageTitle ?? 'Натуральные корма для питомцев'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header data-bs-theme="dark">
    <div class="navbar navbar-dark bg-success shadow-sm">
        <img src="assets/img/logo.png" alt="" class="logo">
        <div class="container">
            <nav class="navbar-brand d-flex align-items-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="index.php" class="color">Главная</a></li>
                    <li class="list-inline-item"><a href="about.php" class="color">О нас</a></li>
                    <li class="list-inline-item"><a href="products.php" class="color">Продукция</a></li>
                    <li class="list-inline-item"><button class="btn btn-link color p-0" data-bs-toggle="modal" data-bs-target="#contactModal" style="text-decoration: none;">Контакты</button></li>
                    <li class="list-inline-item"><a href="blog.php" class="color">Блог</a></li>
                    <li class="list-inline-item"><a href="yslugi.php" class="color">Услуги</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<main>