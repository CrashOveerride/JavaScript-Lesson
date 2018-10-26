<?php

/** Файл с функциями для работы с логами ... */

/**
 * Функция для логирования сообщений в директорию logs
 * @param $messege
 * @param string $type
 */
function systemLog($messege, string $type = 'info') 
{
   global $config;

   // Переводим тип сообщения в нижний регистр
   $type = mb_strtolower($type);

   // Устанавливаем путь для логов
   $logPath = $config['app']['logPath']."/{$type}.log";

   // Если переданный параметр не строка
   if (!is_string($messege))
   {
      // Переводим в строковый формат выводы
      $messege = print_r($messege, true);
   }

   // Генерируем строку длг-сообщения
   $output = "[".date('Y-m-d H:i:s')."]".mb_strtoupper($type).": ".$messege."\n"; //[0000-00-00 00:00:00] type: messege

   // Если директория логов не создана
   if(!is_dir(dirname($logPath)))
   {
      mkdir(dirname($logPath), 644, true);
   }

   // Добавляем строку в файл
   file_put_contents($logPath, $output, FILE_APPEND);
}