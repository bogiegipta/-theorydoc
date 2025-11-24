<?php
// Обработчик форм обратной связи
header('Content-Type: text/html; charset=utf-8');

// Настройки для отправки email
define('ADMIN_EMAIL', 'info@natural-petfood.ru');
define('SITE_NAME', 'Натуральные корма для питомцев');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение и очистка данных
    $name = trim(htmlspecialchars($_POST['name'] ?? ''));
    $email = trim(htmlspecialchars($_POST['email'] ?? ''));
    $phone = trim(htmlspecialchars($_POST['phone'] ?? ''));
    $message = trim(htmlspecialchars($_POST['message'] ?? ''));
    
    // Валидация
    $errors = [];
    if (empty($name)) $errors[] = 'Имя не указано';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email указан некорректно';
    if (empty($message)) $errors[] = 'Сообщение не заполнено';
    
    if (empty($errors)) {
        // Формирование письма
        $subject = 'Новое сообщение с сайта ' . SITE_NAME;
        $body = "Имя: $name\n";
        $body .= "Email: $email\n";
        if (!empty($phone)) $body .= "Телефон: $phone\n";
        $body .= "Сообщение:\n$message\n";
        
        // Заголовки
        $headers = "From: $siteName <no-reply@natural-petfood.ru>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
        
        // Отправка (в реальном проекте раскомментировать)
        // $sent = mail(ADMIN_EMAIL, $subject, $body, $headers);
        
        // Перенаправление с сообщением
        $status = 'success'; // или 'error' если mail() вернул false
        header("Location: contact.php?status=$status");
        exit;
    } else {
        // Перенаправление с ошибками
        $errorMsg = urlencode(implode(', ', $errors));
        header("Location: contact.php?status=error&errors=$errorMsg");
        exit;
    }
}

// Если файл открыт напрямую
header('Location: index.php');
exit;