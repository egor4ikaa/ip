<?php
// Настройки
$logFile = 'visitors.txt'; // Файл для хранения логов
$redirectUrl = 'https://vk.com/video-123456789_123456789'; // Ссылка на видео

// Получаем данные
$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d H:i:s');
$browser = $_SERVER['HTTP_USER_AGENT'];
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'прямой заход';

// Форматируем запись
$logEntry = "Дата: $date | IP: $ip | Браузер: $browser | Откуда: $referer\n";

// Сохраняем в файл
file_put_contents($logFile, $logEntry, FILE_APPEND);

// Перенаправляем
header("Location: $redirectUrl");
exit;
?>