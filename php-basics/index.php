<div style="margin: 20px auto; max-width: 600px; padding: 10px; background: bisque; ">
<?php

include_once "php-function.php";

    echo "Hello word<br>";
    $a = 10;
    echo "$a<br>";
    $b = $a;
    echo "$b<br>";
    unset($a);
    if (isset($a))
        echo $a;
    else
        echo "переменная a не определена";

    // Integer  -2 147 483 648 - 2 147 483 647

    $int = 2147483648;
    echo "$int<br>";

    // Integer  1.8e308

    $double1 = 1.5;
    $double2 = 1.11545448;
    $double3 = 0.00000006;
    echo $double1 . " | " . $double2 . " | " . $double3;

    // boolean

    $boolean_1 = true;
    if ($boolean_1 = false) {
        echo "<br>";
        echo $double1 + $double2;
    } else {
        echo "<br>";
        echo $double1 - $double2;
    }

    // NULL

    $null_1 = NULL;

    if (isset($null_1))
        echo " Переменная  определена";
    else
        echo " Переменная  не определена";

    // string

    $result = "<br>$double1+$double2<br>";
    echo $result;
    $result = '$double1+$double2';
    echo $result;

    $text = "<br>Модель \"Apple II\"";
    echo $text;

    // array
    $phones = array('iPhone', 'Samsung Galaxy S III', 'Nokia N9', 'Samsung ACE II');
    echo "<br>";
    echo $phones[1];

    define("NUMBER", 22);
    echo "<br>";
    echo NUMBER;
    echo "<br>";

    echo "Cтрока " . __LINE__ . " в файле " . __FILE__;

    $int_1 = 1000;
    $double_2 = 15.15151;
    $string_3 = "abcd";

    echo "<br>";
    echo gettype($int_1);
    echo "<br>";
    echo gettype($double_2);
    echo "<br>";
    echo gettype($string_3);

    settype($double_2, "integer");
    echo "<br>";
    echo $double_2;

    // + операция сложения
    // - операция вычитания
    // * умножение
    // / деление
    // % получение остатка от деления

    $int_op = 544;
    $int_op_2 = '544.4444';

    operators($int_op);
    echo get_sum(1, 20);

    if_else($int_op, $int_op_2);
?>
</div>

<?php
require_once "php-loop.php";
require_once "php-array.php";






