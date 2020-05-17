<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Transfer</title>
    <link href="style/style.css" rel="stylesheet">
</head>
<body>
<div class="section">
    <div class="section-answer">
        <div class="answer"><?php method_login_POST()?></div>
        <div class="answer"><?php method_login_GET()?></div>
        <div class="answer"><?php method_password_POST()?></div>
        <div class="answer"><?php method_password_GET()?></div>
        <div class="answer"><?php method_name_POST()?></div>
        <div class="answer"><?php method_name_GET()?></div>
    </div>

    <div class="section-btn">
        <div id="btnPost" class="btn-style">
            POST
        </div>
        <div id="btnGet" class="btn-style">
            GET
        </div>
    </div>

    <div class="section-login-post" id="formPOST">
        <form class="login__form" method="POST">
            <input class="login__inp" type="text" name="login">
            <input class="login__inp" type="text" name="password">
            <input class="login__inp" type="text" name="name">
            <input type="submit" value="Войти">
        </form>
    </div>

    <div class="section-login-get" id="formGET">
        <form class="login__form" method="GET">
            <input class="login__inp" type="text" name="login">
            <input class="login__inp" type="text" name="password">
            <input class="login__inp" type="text" name="name">
            <input type="submit" value="Войти">
        </form>
    </div>

</div>
<script rel="script" src="init.js" defer></script>
</body>
</html>


<?php

function method_login_POST()
{
    $login = "";
    if(isset($_POST['login'])){
        $login = strip_tags($_POST['login']);
    }
    echo $login;
}

function method_password_POST(){
    $password = "";
    if(isset($_POST['password'])){
        $password = strip_tags($_POST['password']);
    }
    echo $password;
}
function method_name_POST(){
    $name = "";
    if(isset($_POST['name'])){
        $name = strip_tags($_POST['name']);
    }
    echo $name;
}

function method_login_GET()
{
    $login = "";
    if(isset($_GET['login'])){
        $login = strip_tags($_GET['login']);
    }
    echo $login;
}

function method_password_GET(){
    $password = "";
    if(isset($_GET['password'])){
        $password = strip_tags($_GET['password']);
    }
    echo $password;
}
function method_name_GET(){
    $name = "";
    if(isset($_GET['name'])){
        $name = strip_tags($_GET['name']);
    }
    echo $name;
}

?>
