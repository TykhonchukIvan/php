<?php

$regular_array_str = array('bmw', 'ford', 'porsche', 'mercedes', 'volkswagen', 'toyota', 'nissan', 'mazda', 'renault', 'volvo', 'fiat', 'aston martin');

$associative_array_str = array(
    'bmw' => 'Z4 Roadster', 'ford' => 'Focus', 'porsche' => 'Cayman', 'mercedes' => 'AMG GT Roadster', 'volkswagen' => 'Golf',
    'toyota' => 'Camry', 'nissan' => 'GT-R', 'mazda' => 'CX-9', 'renault' => 'CLIO RS', 'volvo' => 'S60 CROSS COUNTRY', 'fiat' => 'Siena',
    'aston martin' => 'Vanquish');

$multidimensional_array_str = array(
    'Germany' => array('porsche', 'bmw', 'mercedes', 'volkswagen'),
    'Japan' => array('toyota', 'nissan', 'mazda'),
    'England' => array('aston martin'),
    'French' => array('renault'),
    'Italy' => array('fiat'),
    'Sweden' => array('volvo'),
    'USA' => array('ford'),
);

function transfer_regular_array($ar)
{
    $arr = [];
    $len = count($ar);
    for ($i = 0; $i < $len; $i++) {
        array_push($arr, $ar[$i]);
    }
    return $arr;
}

function transfer_associative_array($ar)
{
    $arr = [];
    foreach ($ar as $key => $value) {
        array_push($arr, $value);
    }
    return $arr;
}

function transfer_multidimensional_array($ar)
{
    $arr = [];
    foreach ($ar as $country => $items) {
        array_push($arr, $country);
    }
    return $arr;
}

$car = transfer_regular_array($regular_array_str);
$car_model = transfer_associative_array($associative_array_str);
$car_country = transfer_multidimensional_array($multidimensional_array_str);

function arr_revers($ar)
{
    $arr = [];

    for ($i = 0; $i < count($ar); $i++) {
        array_unshift($arr, $ar[$i]);
    }
    return $arr;
}

$car_revers = arr_revers($car);
$car_model_revers = arr_revers($car_model);
$car_country_revers = arr_revers($car_country);

function output_arr($ar)
{
    for ($i = 0; $i < count($ar); $i++) {
        echo "<div style='padding: 5px; border: 1px solid #07001f;'>$ar[$i]</div>";
    }
}

function output_arr_sort($ar)
{
    asort($ar, SORT_STRING);
    for ($i = 0; $i < count($ar); $i++) {
        echo "<div style='padding: 5px; border: 1px solid #07001f;'>$ar[$i]</div>";
    }
}

?>

<div style="display: flex; flex-direction: column-reverse; max-width: 1000px; margin: 0 auto; background-color: #ffdab7; padding: 10px; border-bottom: solid black 1px">
    <div style="display: flex; justify-content: space-around; margin-top: 10px">
        <?php output_arr($car) ?>
    </div>
    <div style="display: flex; justify-content: space-around; margin-top: 10px">
        <?php output_arr($car_model) ?>
    </div>
    <div style="display: flex; justify-content: space-around; margin-top: 10px">
        <?php output_arr($car_country) ?>
    </div>
</div>
<div style="display: flex; flex-direction: column-reverse; max-width: 1000px; margin: 0 auto; background-color: #ffdab7; padding: 10px; border-bottom: solid black 1px">
    <div style="display: flex; justify-content: space-around; margin-top: 10px">
        <?php output_arr_sort($car) ?>
    </div>
    <div style="display: flex; justify-content: space-around; margin-top: 10px">
        <?php output_arr_sort($car_model) ?>
    </div>
    <div style="display: flex; justify-content: space-around; margin-top: 10px">
        <?php output_arr_sort($car_country) ?>
    </div>
</div>


<div style="display: flex; flex-direction: column-reverse; max-width: 1000px; margin: 0 auto; background-color: #ffdab7; padding: 10px; border-bottom: solid black 1px">
    <div style="display: flex; justify-content: space-around; margin-top: 10px">
        <?php output_arr($car_revers)  ?>
    </div>
    <div style="display: flex; justify-content: space-around; margin-top: 10px">
        <?php output_arr($car_model_revers)  ?>
    </div>
    <div style="display: flex; justify-content: space-around; margin-top: 10px">
        <?php output_arr($car_country_revers)  ?>
    </div>
</div>
<div style="display: flex; flex-direction: column-reverse; max-width: 1000px; margin: 0 auto; background-color: #ffdab7; padding: 10px; border-bottom: solid black 1px">
    <div style="display: flex; justify-content: space-around; margin-top: 10px">
        <?php output_arr_sort($car_revers)  ?>
    </div>
    <div style="display: flex; justify-content: space-around; margin-top: 10px">
        <?php output_arr_sort($car_model_revers)  ?>
    </div>
    <div style="display: flex; justify-content: space-around; margin-top: 10px">
        <?php output_arr_sort($car_country_revers)  ?>
    </div>
</div>
