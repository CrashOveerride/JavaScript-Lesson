<?php

// Подгрузка всех настроек приложения
$config = array_merge(
   include 'app.php',
   include 'db.php'   
);

// Первоначальный запуск (сессия, константы, окружение)
define('ROOT', dirname(__DIR__));