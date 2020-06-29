<?php
$adminName = $_POST['name'];
$adminSurname = $_POST['surname'];
$adminLogin = $_POST['login'];
$adminEmail = $_POST['email'];
$adminPassword = $_POST['password'];

$addAdminData = array(
    'name' => $adminName,
    'surname' => $adminSurname,
    'login' => $adminLogin,
    'email' => $adminEmail,
    'password' => $adminPassword,
);

require 'db-connection.php';

function addAdmin($data){

    $arr = array();
    foreach ($data as $key => $value) {
        array_push($arr, $value);
    }

    $mysql = db_connection();

    $mysql->query("INSERT INTO `list-admins`(`name`, `surname`, `login`, `email`, `password`)
    VALUES('$arr[0]','$arr[1]','$arr[2]','$arr[3]','$arr[4]')");

    $mysql->close();
}

addAdmin($addAdminData);



function checkAddAdmin($data){
    $arr = array();
    foreach ($data as $key => $value) {
        array_push($arr, $value);
    }

    $mysql = new mysqli('localhost','root','','game-project');

    $inquiryDB = "SELECT * FROM `list-admins` WHERE `name`='$arr[0]' AND `surname`='$arr[1]' AND `login`='$arr[2]' AND `email`='$arr[3]' AND `password`='$arr[4]'";

    $result = mysqli_query($mysql, $inquiryDB);

    $mysql->close();

    if (mysqli_num_rows($result) == 1) {
        echo json_encode(array('true_registered' => '1'));
    } else {
        echo json_encode(array('false_registered' => '0'));
    }
}

checkAddAdmin($addAdminData);