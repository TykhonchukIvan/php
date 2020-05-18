<?php

function data_transfer_GET()
{

    $data = $_GET;
    $user_data = array();

    foreach ($data as $key => $value) {
        array_push($user_data, $value);

    }

    for ($i = 0; $i < count($user_data); $i++) {
        echo "<div class='answer'>$user_data[$i]</div>";

    }

}

?>
