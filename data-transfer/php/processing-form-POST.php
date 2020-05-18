<?php
function method_login_POST()
{
    $login = "";
    if(isset($_POST['login'])){
        $login = strip_tags($_POST['login']);
    }
    echo "<div class='answer'>$login</div>";
};

function method_password_POST(){
    $password = "";
    if(isset($_POST['password'])){
        $password = strip_tags($_POST['password']);
    }
    echo "<div class='answer'>$password</div>";
};

function method_name_POST(){
    $name = "";
    if(isset($_POST['name'])){
        $name = strip_tags($_POST['name']);
    }
    echo "<div class='answer'>$name</div>";
};


?>
