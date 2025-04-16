<?php
// Путь к JSON файлу
$reviewsFile = 'reviews.json';

// Обработка отправки формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение и очистка данных
    $newReview = [
        'id' => uniqid(),
        'name' => htmlspecialchars(trim($_POST['name'])),
        'rating' => intval($_POST['rating']),
        'review' => htmlspecialchars(trim($_POST['review'])),
        'date' => date('Y-m-d H:i:s'),
        'approved' => false // Можно добавить модерацию
    ];

    // Валидация
    $errors = [];
    if (empty($newReview['name'])) $errors[] = 'Укажите ваше имя';
    if (empty($newReview['review'])) $errors[] = 'Напишите текст отзыва';
    if ($newReview['rating'] < 1 || $newReview['rating'] > 5) $errors[] = 'Выберите оценку';

    if (empty($errors)) {
        // Чтение существующих отзывов
        $reviews = [];
        if (file_exists($reviewsFile)) {
            $reviews = json_decode(file_get_contents($reviewsFile), true) ?: [];
        }
        
        // Добавление нового отзыва
        $reviews[] = $newReview;
        
        // Сохранение в JSON
        file_put_contents($reviewsFile, json_encode($reviews, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        
        // Перенаправление
        header('Location: http://localhost/site/index.php');
        exit;
    }
}

// Если есть ошибки, показываем форму снова
include 'reviews.php';
?>

