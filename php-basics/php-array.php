<?php
$phone = [];
$phone[0] = "Nokia";
$phone[1] = "Samsung";
$phone[2] = "apple";
$phone[3] = "Sony";

$phones_1 = array("nokia" => "Nokia N9",
    "samsumg"=>"Samsung Galaxy III",
    "apple"=>"iPhone5",
    "sony" => "Sony XPeria Z3");

$phones_2 = array(
    "apple"=> array("iPhone5", "iPhone5s", "iPhone6") ,
    "samsumg"=>array("Samsung Galaxy III", "Samsung Galaxy ACE II"),
    "nokia" => array("Nokia N9", "Nokia Lumia 930"),
    "sony" => array("Sony XPeria Z3", "Xperia Z3 Dual", "Xperia T2 Ultra"));

$technics = array(
    "phones" => array("apple" => "iPhone5",
        "samsumg" => "Samsung Galaxy III",
        "nokia" => "Nokia N9"),
    "tablets" => array("lenovo" => "Lenovo IdeaTab A3500",
        "samsung" => "Samsung Galaxy Tab 4",
        "apple" => "Apple iPad Air"));

?>

<div style="margin: 20px auto; max-width: 600px; padding: 10px; display: flex; justify-content: space-around; background: bisque; text-align: center;">
    <?php
        for($i=0; $i<count($phone); $i++){
            echo "<div style='padding: 5px; border: 1px solid black;'>$phone[$i]</div>" ;
        }
    ?>
</div>

<div style="margin: 20px auto; max-width: 600px; padding: 10px; display: flex; justify-content: space-around; background: bisque; text-align: center;">
    <?php
    foreach($phones_1 as $item)
        echo "<div style='padding: 5px; border: 1px solid black;'>$item</div>" ;
    ?>
</div>

<div style="margin: 20px auto; max-width: 600px; padding: 10px; background: bisque; ">
<?php
foreach ($phones_2 as $brand => $items)
{
    echo "<h3>$brand</h3>";
    echo "<ul>";
    foreach ($items as $key => $value)
    {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}
?>
</div>

<div style="margin: 20px auto; max-width: 600px; padding: 10px; background: bisque; ">
<?php
foreach ($technics as $tovar => $items)
{
    echo "<h3>$tovar</h3>";
    echo "<ul>";
    foreach ($items as $key => $value)
    {
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";
}
?>
</div>

<div style="margin: 20px auto; max-width: 600px; padding: 10px; background: #ffd5a9; display: flex; justify-content: space-around;">
    <div style='padding: 5px; border: 1px solid black;'>
    <?php
        $isar = is_array($phone);
        echo ($isar==true)?"это массив":"это не массив";
    ?>
    </div>
    <div style='padding: 5px; border: 1px solid black;'>
    <?php
        $isar_1 = is_array($phones_1);
        echo ($isar_1==true)?"это массив":"это не массив";
    ?>
    </div>
    <div style='padding: 5px; border: 1px solid black;'>
    <?php
        $isar_2 = is_array($phones_2);
        echo ($isar_2==true)?"это массив":"это не массив";
    ?>
    </div>
    <div style='padding: 5px; border: 1px solid black;'>
    <?php
        $isar_3 = is_array($technics);
        echo ($isar_3==true)?"это массив":"это не массив";
    ?>
    </div>
</div>

<div style="margin: 20px auto; max-width: 600px; padding: 10px; background: #ffd5a9; display: flex; justify-content: space-around; flex-direction: column; text-align: center">
    <div style='padding: 15px; border: 1px solid black; display: flex; justify-content: space-around; '>
        <div style='padding: 5px; border: 1px solid black; max-width: 80px'>
            <?php
            $count_ar = count($phone);
            echo "$count_ar количество элементов";
            ?>
        </div>
        <div style='padding: 5px; border: 1px solid black; max-width: 80px'>
            <?php
            $count_ar1 = count($phones_1);
            echo "$count_ar1 количество элементов";
            ?>
        </div>
        <div style='padding: 5px; border: 1px solid black; max-width: 80px'>
            <?php
            $count_ar2 = count($phones_2);
            echo "$count_ar2 количество элементов";
            ?>
        </div>
        <div style='padding: 5px; border: 1px solid black; max-width: 80px'>
            <?php
            $count_ar3 = count($technics);
            echo "$count_ar3 количество элементов";
            ?>
        </div>
    </div>
    <div style='padding: 15px; border: 1px solid black; display: flex; justify-content: space-around; margin-top: 20px;'>
        <div style='padding: 5px; border: 1px solid black; max-width: 80px'>
            <?php
            $count_ar = sizeof($phone);
            echo "$count_ar количество элементов";
            ?>
        </div>
        <div style='padding: 5px; border: 1px solid black; max-width: 80px'>
            <?php
            $count_ar1 = sizeof($phones_1);
            echo "$count_ar1 количество элементов";
            ?>
        </div>
        <div style='padding: 5px; border: 1px solid black; max-width: 80px'>
            <?php
            $count_ar2 = sizeof($phones_2);
            echo "$count_ar2 количество элементов";
            ?>
        </div>
        <div style='padding: 5px; border: 1px solid black; max-width: 80px'>
            <?php
            $count_ar3 = sizeof($technics);
            echo "$count_ar3 количество элементов";
            ?>
        </div>
    </div>
</div>