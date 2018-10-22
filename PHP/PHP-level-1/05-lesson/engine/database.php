<?php

// Файл с функциями для работы с БД

$connetcion = mysqli_connect(
   $config['db']['host'],
   $config['db']['user'],
   $config['db']['password'],
   $config['db']['database']
);

function getItem(string $sql)
{
   // Получение одной строки
   global $connetcion;
   $result = mysqli_query($connetcion, $sql);

   $row = mysqli_fetch_assoc($result);
   return $row;
}

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

function execute(string $sql)
{
   // 
}