<?php

$arrUserData = array(
    'name' => $_POST['name'],
    'surname' => $_POST['email'],
    'email' => $_POST['game'],
    'game' => $_POST['surname'],
);

function addOrderGame($data){

    $arr = array();
    foreach ($data as $key => $value){
        array_push($arr, $value);
    }

    $conn = $mysql = new mysqli('localhost','root','','game-project');

    $conn->query("INSERT INTO `users-order-game`(`name`, `surname`, `email`, `game`)
    VALUES('$arr[0]','$arr[1]','$arr[2]','$arr[3]')");

    $conn->close();

}

addOrderGame($arrUserData);

function checkAddOrderGame($data){

    $arr = array();
    foreach ($data as $key => $value){
        array_push($arr, $value);
    }

    $conn = $mysql = new mysqli('localhost','root','','game-project');
    $inquiryDB = "SELECT * FROM `users-order-game` WHERE `name`='$arr[0]' AND `surname`='$arr[1]' AND `email`='$arr[2]' AND `game`='$arr[3]'";

    $result = mysqli_query($conn, $inquiryDB);

    $conn->close();

    if(mysqli_num_rows($result) == 1){
        echo json_encode(array('true_checkAddOrderGame' =>'1'));
    } else {
        echo json_encode(array('false_checkAddOrderGame' =>'0'));
    }
}

checkAddOrderGame($arrUserData);