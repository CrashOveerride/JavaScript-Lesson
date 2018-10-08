<?php

    $a = 5;
    $b = '05';
    $hour = date("G");
    $minute = date("i");
    $second = date("s");
    $space = " : ";

    $h1 = "<h1>";
    $_h1 = "</h1>";

    $title = "<title>";
    $_title = "</title>";

    $c = 10;
    $d = 5;

    $time = $hour . $space . $minute . $space . $second;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    echo $title . "Lesson 1" . $_title; 
    ?>
</head>
<body>
    <b><p>Task 1:<br>Объяснить, как работает данный код:</p></b>
    <?php
        var_dump($a == $b);                             // Почему true?
    ?>

    <p>var_dump($a == $b); // Почему true?<br>
    "==" Приравнивает значения по типам. В типе integer переменная $b(05) равняется 5. 5=5. Все верно.
    </p>

    <?php
        var_dump((int)'012345');                        // Почему 12345?
    ?>
    <p>var_dump((int)'012345');// Почему 12345?<br>
    Возвращает число. В числе 012345 тип integer 0 ничего не стоит и int убирает его. 012345 равносильно 12345,
    также как и в прошлом примере.
    </p>

    <?php
        var_dump((float)123.0 === (int)123.0); // Почему false?
    ?>
    <p>var_dump((float)123.0 === (int)123.0); // Почему false?<br>
    float возвращает число с плавающими токами, а integer возвращает целое число. Следовательно 
    123.0 != 123.
    </p>

    <?php    
        var_dump((int)0 === (int)'hello, world'); // Почему true?
    ?>
    <p>var_dump((int)0 === (int)'hello, world'); // Почему true?<br>
    integer от слов, возвращает ноль. 0 = 0.
    </p>

    <?php

        echo $h1 . "Task 2:" . $_h1;
        echo "<b><p> Используя имеющийся HTML шаблон, сделать так, чтобы главная страница генерировалась через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.</p></b>";
        echo $time;

    ?>
    <b><p>Task 3:<br>Используя только две переменные, поменяйте их значение местами. Например, если c = 1, d = 2, надо, чтобы получилось: c = 1, d = 2. Дополнительные переменные использовать нельзя.</p></b>
    <?php

        echo "\$C=" . $c . "<br>";
        echo "\$D=" . $d . "<br>";
        echo "$c = $c + $d" . " \$C=" . ($c = $c + $d) . "<br>";
        echo "$d = $d + $c" . " \$D=" . ($d = $d - $c) . "<br>";
        echo "$d = -$d" . " \$D=" . ($d = -$d) . "<br>";
        echo "$c = $c d $d" . " \$C=" . ($c = $c - $d) . "<br>";

    ?>

</body>
</html>