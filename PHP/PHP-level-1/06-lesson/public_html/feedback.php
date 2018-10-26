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

function sqlInsertFeed()
{

   $sql = "INSERT INTO `feedback` (`user`, `text`) VALUES ('" . $_POST['name'] . "', '" . $_POST['feed'] . "')";


   if (isset($_POST['name']) || isset($_POST['feed'])) {

   // Проверяем на ошибки
      $errors = array();

      if ($_POST['name'] == '') {
         $errors = 'Введите имя!';
      }

      if ($_POST['feed'] == '') {
         $errors = 'Введите комментарий!';
      }

      if (empty($errors)) {
         execute($sql);
         header('Location: /feedback.php');
      } else {
         echo $errors['0'];
      }
   }
}