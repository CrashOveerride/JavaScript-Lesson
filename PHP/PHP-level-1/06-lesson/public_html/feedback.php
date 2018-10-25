<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// вывод шаблона
echo render('site/feedback', [
   'feedback' => getItemArray("SELECT * FROM `feedback` ORDER BY id DESC")
]);

 