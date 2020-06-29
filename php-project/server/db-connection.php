<?php

function db_connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dataBase = "game-project";

    $mysql = new mysqli('localhost','root','','game-project');
    return $mysql;
}