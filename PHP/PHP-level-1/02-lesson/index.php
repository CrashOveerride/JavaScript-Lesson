<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 2</title>
</head>
<body>
    <b><p>Task 1:<br>Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
     Затем написать скрипт, который работает по следующему принципу:<br>
     если $a и $b положительные, вывести их разность;<br>
     если $а и $b отрицательные, вывести их произведение;<br>
     если $а и $b разных знаков, вывести их сумму;</p></b>

        <?php

        $a = 5;
        $b = 10;

        echo "a$ = " . $a . "<br>";
        echo "b$ = " . $b . "<br>";

        if($a >= 0 && $b >= 0)
        {
            echo "Разность: " . ($a - $b) . "<br>";
        }

        if($a >= 0 && $b >= 0)
        {
            echo "Произведение: " . ($a * $b) . "<br>";
        }

        if($a >= 0 && $b >= 0)
        {
            echo "Сумма: " . ($a + $b) . "<br>";
        }

        ?>

    <b><p>Task 2<br>Присвоить переменной $а значение в промежутке [0..15]. 
     С помощью оператора switch организовать вывод чисел от $a до 15.</p></b>

        <?php

        $random_num = 4;

        switch($random_num)
        {
        case 1:
            echo "1 ";
        case 2:
            echo "2 ";
        case 3:
            echo "3 ";
        case 4:
            echo "4 ";
        case 5:
            echo "5 ";
        case 6:
            echo "6 ";
        case 7:
            echo "7 ";
        case 8:
            echo "8 ";
        case 9:
            echo "9 ";
        case 10:
            echo "10 ";
        case 11:
            echo "11 ";
        case 12:
            echo "12 ";
        case 13:
            echo "13 ";
        case 14:
            echo "14 ";
        case 15:
            echo "15 ";
            break;
        default:
            echo "Указанное вами число не входит в диапозон. Укажите число от 1 до 15";
            break;
        }

        ?>

    <b><p>Task 3<br>Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
     Обязательно использовать оператор return.</p></b>

        <?php

        function plus($a, $b){return $a+$b;};
        function minus($a, $b){return $a-$b;};
        function umn($a, $b){return $a*$b;};
        function del($a, $b){return $a/$b;};

        ?>

    <b><p>Task 4<br>Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
     где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
     В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3)
     и вернуть полученное значение (использовать switch).</p></b>

        <?php

            function mathOperation($arg1, $arg2, $operation)
            {
                switch($operation)
                {
                    case 'plus':
                        return plus($arg1, $arg2);
                        break;
                    case 'minus':
                        return minus($arg1, $arg2);
                        break;
                    case 'umn':
                        return umn($arg1, $arg2);
                        break;
                    case 'del':
                        return del($arg1, $arg2);
                        break;
                    default:
                        echo "Вы не указали никакую операцию.";
                }
            }

            echo mathOperation(5, 10, 'plus') . "<br>";
            echo mathOperation(5, 10, 'minus') . "<br>";
            echo mathOperation(5, 10, 'umn') . "<br>";
            echo mathOperation(5, 10, 'del');
        ?>

    <b><p>Task 5<br>Посмотреть на встроенные функции PHP.
     Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.</p></b>

        <?php

            echo date('H\h:i l d F', time());

        ?>
     
    <b><p>Task 6<br>*С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow),
     где $val – заданное число, $pow – степень.</p></b>

        <?php

        function power($val, $pow) 
        {
            if($pow == 0)
            {
                return 1;
            }

            return $val * power($val, $pow-1);
        };

        echo power(2,3);

        ?>

    <b><p>Task 7<br>*Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:<br>
     22 часа 15 минут<br>
     21 час 43 минуты</p></b>

        <?php

            $hour = date('H');
            $minute = date('i');

        //Вывод часов            
            if (($hour > 1 && $hour < 5) || ($hour > 21))
            {
                echo $hour . " часа ";
            } 
            else if ($hour == 1 || $hour == 21)
            {
                echo $hour . " час ";
            } 
            else
            {
                echo $hour . " часов ";
            }

        //Вывод минут
            if ($minute == 1 || $minute == 21 || $minute == 31 || $minute == 41 || $minute == 51)
            {
                echo $minute . " минута ";
            } 
            else if (($minute > 1 && $minute < 5) || ($minute > 21 && $minute < 25)
            || ($minute > 31 && $minute < 35) || ($minute > 41 && $minute < 45) || ($minute > 51 && $minute < 55))
            {
                echo $minute . " минуты ";
            } 
            else
            {
                echo $minute . " минут ";
            }

        ?>
</body>
</html>