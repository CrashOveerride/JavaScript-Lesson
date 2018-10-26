<!----------------------------------------------------------------------------- 
//                    Калькулятор номер 1                                    //
------------------------------------------------------------------------------->
<form method="post" class="form-group">

   <input type="text" name="f1" placeholder="Введите число 1">
   <input type="text" name="f2" placeholder="Введите число 2">

   <br><br>

   <input type="submit" name="summa" value="Сложить">
   <input type="submit" name="minus" value="Вычесть">
   <input type="submit" name="umn" value="Умножить">
   <input type="submit" name="del" value="Делить">

</form>
    
    <?php

    if (isset($_POST['del'])) {
        if ($_POST['f2'] != 0) {
            if (is_numeric($_POST['f1']) && is_numeric($_POST['f2']) || is_double($_POST['f1']) && is_double($_POST['f2'])) {
                $first = $_POST['f1'];
                $two = $_POST['f2'];
                $result = $first / $two;
                echo $result;
            } else {
                unset($_POST['del']);
                unset($_POST['f1']);
                unset($_POST['21']);
                echo 'Введено не правильное число.';
            };
        } else {
            echo 'На ноль делить нельзя.';
        };
    };

    if (isset($_POST['minus'])) {
        if (is_numeric($_POST['f1']) && is_numeric($_POST['f2']) || is_double($_POST['f1']) && is_double($_POST['f2'])) {
            $first = $_POST['f1'];
            $two = $_POST['f2'];
            $result = $first - $two;
            echo $result;
        } else {
            unset($_POST['minus']);
            unset($_POST['f1']);
            unset($_POST['21']);
            echo 'Введено не правильное число.';
        };
    };

    if (isset($_POST['umn'])) {
        if (is_numeric($_POST['f1']) && is_numeric($_POST['f2']) || is_double($_POST['f1']) && is_double($_POST['f2'])) {
            $first = $_POST['f1'];
            $two = $_POST['f2'];
            $result = $first * $two;
            echo $result;
        } else {
            unset($_POST['umn']);
            unset($_POST['f1']);
            unset($_POST['21']);
            echo 'Введено не правильное число.';
        };
    };

    if (isset($_POST['summa'])) {
        if (is_numeric($_POST['f1']) && is_numeric($_POST['f2']) || is_double($_POST['f1']) && is_double($_POST['f2'])) {
            $first = $_POST['f1'];
            $two = $_POST['f2'];
            $result = $first + $two;
            echo $result;
        } else {
            unset($_POST['summa']);
            unset($_POST['f1']);
            unset($_POST['21']);
            echo '>Введено не правильное число.';
        };
    };
    ?>

<!----------------------------------------------------------------------------- 
//                    Калькулятор номер 2                                    //
------------------------------------------------------------------------------->

<form method="post" class="form-group">

   <input type="text" name="a" placeholder="Введите число 1">

   <select name="operation">
      <option selected disabled>Выберите операцию</option>
      <option value="+">Плюс</option>
      <option value="-">Минус</option>
      <option value="*">Умножение</option>
      <option value="/">Деление</option>
   </select>

   <input type="text" name="b" placeholder="Введите число 2">
   <input type="submit" name="submit" value="Посчитать" />

</form>

<?php

if (isset($_POST['submit'])) {
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];
    $p = $_POST['operation'];
    $c;

    if ($p == '+') $c = $a + $b;
    if ($p == '-') $c = $a - $b;
    if ($p == '*') $c = $a * $b;
    if ($p == '/') {
        if ($b == 0) {
            echo 'На ноль делить нельзя';
        } else {
            $c = $a / $b;
        }
    }

    if ($c) {
        echo $c;
    }
}

?>