<?php
function method_login_GET()
{
    $login = "";
    if(isset($_GET['login'])){
        $login = strip_tags($_GET['login']);
    }
    echo "<div class='answer'>$login</div>";
};

function method_password_GET(){
    $password = "";
    if(isset($_GET['password'])){
        $password = strip_tags($_GET['password']);
    }
    echo "<div class='answer'>$password</div>";
};

function method_name_GET(){
    $name = "";
    if(isset($_GET['name'])){
        $name = strip_tags($_GET['name']);
    }
    echo "<div class='answer'>$name</div>";
};



?>
