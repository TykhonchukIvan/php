<?php

function processing_form_text_POST()
{
    $data_text = '';
    if (isset($_POST['text'])) {
        $data_text = strip_tags($_POST['text']);
    }
    return $data_text;
};

function processing_form_name_POST()
{
    $data_name = '';
    if (isset($_POST['name'])) {
        $data_name = strip_tags($_POST['name']);
    }
    return $data_name;
};

$srt_text = processing_form_text_POST();
$srt_name = processing_form_name_POST();

function echo_text($a)
{
    echo "<div>$a</div>";
};

function echo_name($b)
{
    echo "<div>$b</div>";
};

function work_on_string($str, $str1)
{

    if(boolval($str) === true || boolval($str1) === true)
    {
        $position = strpos($str, $str1);

        if ($position !== false) {

            echo "<div>Позиция подстроки '$str1' в строке '$str': $position</div>";
        } else {
            echo "<div>Подстрока '$str1' в строке '$str' отсутсвует</div>";
        }

        $str2 = trim($str);
        echo "<div>$str2</div>";

        $str3 = strtolower($str2);
        echo "<div>$str3</div>";

        $str4 = strlen($str);
        echo "<div>$str4</div>";

        $str5 = strlen($str1);
        echo "<div>$str5</div>";
    }
}


