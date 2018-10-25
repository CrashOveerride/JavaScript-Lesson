<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// вывод шаблона
echo render('site/feedback', [
   'feedback' => getItemArray("SELECT * FROM `feedback` ORDER BY id DESC"),
   'user_name' => $_GET['user_name'],
   'feed' => $_GET['feed']
]);

   $user_name = $_POST['user_name'];
   $feed = $_POST['feed'];
   $sql = "INSERT INTO `feedback` (`user`, `text`) VALUES ('{$user_name}', {$feed}')";
   

      if( isset($_POST['user_name']) || isset($_POST['feed']) )
      {

      // Проверяем на ошибки
      $errors = array();

      if( $_POST['user_name'] == '' )
      {
         $errors = 'Введите имя!';
      }

      if( $_POST['feed'] == '' )
      {
         $errors = 'Введите комментарий!';
      }

      if ( empty($errors) )
      {
         execute("INSERT INTO `feedback` (`user`, `text`) VALUES ('{$user_name}', {$feed}')");
      }
      else
      {
         echo $errors ['0'];
      }   
      }

   ?>