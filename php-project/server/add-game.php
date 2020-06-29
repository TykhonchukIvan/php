<?php
$pathPicture = $_POST['path-picture'];
$gameName = $_POST['game-name'];
$numberKeys = $_POST['number-keys'];
$gameDescriptions = $_POST['game-descriptions'];

$addGameData = array(
    'path-picture' => $pathPicture,
    'game-name' => $gameName,
    'number-keys' => $numberKeys,
    'game-descriptions' => $gameDescriptions,
);


require 'db-connection.php';

function addGame($data){

    $arr = array();
    foreach ($data as $key => $value) {
        array_push($arr, $value);
    }

    $mysql = db_connection();
    $mysql->query("INSERT INTO `list_game`(`path_to_picture`, `game_name`, `number_of_keys`, `game_descriptions`)
    VALUES('$arr[0]','$arr[1]','$arr[2]','$arr[3]')");

    $mysql->close();
}

addGame($addGameData);


function checkAddGame($data){

    $arr = array();
    foreach ($data as $key => $value) {
        array_push($arr, $value);
    }

    $mysql = db_connection();
    $inquiryDB = "SELECT * FROM `list_game` WHERE `path_to_picture`='$arr[0]' AND `game_name`='$arr[1]' AND `number_of_keys`='$arr[2]' AND `game_descriptions`='$arr[3]'";

    $result = mysqli_query($mysql, $inquiryDB);

    $mysql->close();

    if (mysqli_num_rows($result) == 1) {
        echo json_encode(array('true_addGame' => '1'));
    } else {
        echo json_encode(array('false_addGame' => '0'));
    }
}

checkAddGame($addGameData);