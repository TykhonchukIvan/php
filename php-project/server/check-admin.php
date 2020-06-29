<?php
$adminName = $_POST['name'];
$adminLogin = $_POST['login'];
$adminPassword = $_POST['password'];

$arrUserData = array(
    'name' => $adminName,
    'login' => $adminLogin,
    'password' => $adminPassword,
);

function checkAdmin ($data){

    $arr = array();
    foreach ($data as $key => $value){
        array_push($arr, $value);
    }

    $connect = new mysqli('localhost','root','','game-project');
    $inquiryDB = "SELECT * FROM `admin` WHERE `name` = '$arr[0]' AND `login` = '$arr[1]' AND `password` = '$arr[2]'";

    $result = mysqli_query($connect, $inquiryDB);
    $connect->close();

    if(mysqli_num_rows($result) == 1){
        echo json_encode(array('true_admin' =>'1'));
    } else {
        echo json_encode(array('false_admin' =>'0'));
    }
}

checkAdmin($arrUserData);






