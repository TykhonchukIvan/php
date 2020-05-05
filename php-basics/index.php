<pre>
<?php
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
        echo " Переменная a определена";
    else
        echo " Переменная a не определена";

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

?>
</pre>

