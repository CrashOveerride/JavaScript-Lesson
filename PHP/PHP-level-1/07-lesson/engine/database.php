<?php

// Файл с функциями для работы с БД

$connetcion = mysqli_connect(
   $config['db']['host'],
   $config['db']['user'],
   $config['db']['password'],
   $config['db']['database']
);

/**
 * Получеие одной строки из базы данных по SQL запросу
 * @param string $sql
 * @return array|null
 */
function getItem(string $sql)
{
   // Получение одной строки
   global $connetcion;
   $result = mysqli_query($connetcion, $sql);

   $row = mysqli_fetch_assoc($result);
   
   return $row;
}

/**
 * Получеие нескольких строк из базы данных по SQL запросу
 * @param string $sql
 * @return array
 */
function getItemArray(string $sql)
{
   // Получение нескольких строк
   global $connetcion;
   $result = mysqli_query($connetcion, $sql);

   $rows = [];
   while($row = mysqli_fetch_assoc($result))
   {
      $rows[] = $row;
   }

   return $rows;
}

/**
 * Простое выполнение SQL запроса к базе данных
 * @param string $sql
 * @return bool|mysqli_result
 */
function execute(string $sql)
{
   global $connetcion;
   $result = mysqli_query($connetcion, $sql);

   return $result;
}