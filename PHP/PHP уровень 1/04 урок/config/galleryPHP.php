<?php
    //Путь к нашей папке с изображениями
    $dir = "img/";

    //Массив с файлами каталога
    $imgArr = scandir($dir);

    for($i = 2; $i < count($imgArr); $i++)
    {
        //Разбиваем имя файла до точки, чтобы узнать формат.
        $filename = $imgArr[$i];
        $format = substr($filename, strpos($filename, '.'));

        //Массив с форматами
        $formatArr = array('.jpeg', '.jpg', '.gif', '.png');

        //Делаем проверку на формат файла и выводим картинку
        for($j = 0; $j <= count($formatArr); $j++)
        {
        if($format == $formatArr[$j])
            {
                echo "<a href=".$dir."/".$imgArr[$i]."><img class=\"cartoon\" src=".$dir."/".$imgArr[$i]."></a>";
            }
        }
    }