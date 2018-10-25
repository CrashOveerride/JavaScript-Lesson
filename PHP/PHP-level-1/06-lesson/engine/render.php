<?php

/** Файл с функциями для ряботы с шаблонами страниц ... */

/**
 * Генерация шаблона страниц для отображения
 * @param string $template Название шабблона
 * @param array $data Массив данных для передачи
 * @param bool @withLayout Использовать ли основной макет
 * @param string $layout Название основного макетта
 * 
 * @return string HTML-код готового шаблона
 */
function render(string $template, array $data = [], bool $withLayout = true, string $layout = 'layout')
{
   global $config;

   //ПУТЬ К ШАБЛОНАМ
   $templates = [
      'layout' => "{$config['app']['templatesPath']}/{$layout}.php",
      'page' => "{$config['app']['templatesPath']}/{$template}.php"
   ];

   // Загружаем натстройки приложения для глобального доступа
   $data['config'] = $config['app'];

   // Загружаем содержимое шаблона
   $pageView = getTemplateContent($templates['page'], $data);

   // подключаем основной макет, если $withLayout
   if($withLayout)
   {
      $data['content'] = $pageView;

      return getTemplateContent($templates['layout'], $data);
   }
   else
   {
      // Выводим просто страницу
      return $pageView;
   }
}

/**
 * Чтение шаблона из буфера выводы
 * @param string $filepath Путь к шаблону
 * @param array $data Массив данных для обработки
 * 
 * @return string HTML-код шаблона
 */
function getTemplateContent(string $filepath, array $data)
{
   // Открываем буфер выводы
   ob_start();

   // Извлекаем переменные из переданного массива
   extract($data); // ['user' => 'Admin', 'password' => '123123'] =====> $user = 'Admin'; $password ='123123';

   // Выполняем файл шаблона
   include $filepath;

   // Возвращаем данные из буфера выводы
   return ob_get_clean();
}