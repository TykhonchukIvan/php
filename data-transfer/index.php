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
    <div class="log-in">
        <div class="section-answer">
            <?php
                include "./php/processing-form-POST.php";
                    method_login_POST(); method_password_POST(); method_name_POST();
            ?>
        </div>
        <div class="section-answer">
            <?php
                include "./php/processing-form-GET.php";
                    method_login_GET(); method_password_GET(); method_name_GET();
            ?>
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

    <div class="comment">

    </div>

</div>
<script rel="script" src="init.js" defer></script>
</body>
</html>




