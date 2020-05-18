<?php

function data_transfer_POST()
{

    $data = $_POST;

    $user_data = array();

    foreach ($data as $key => $value) {
        if ($key === 'login'){
            array_push($user_data, $value);
        } elseif ($key === 'password') {
            array_push($user_data, $value);
        } elseif ($key === 'name') {
            array_push($user_data, $value);
        } elseif ($key === 'course') {
            array_push($user_data, $value);
        }
    }

    for ($i = 0; $i < count($user_data); $i++) {
        echo "<div class='answer'>$user_data[$i]</div>";
    }
}

?>
