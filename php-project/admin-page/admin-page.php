<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="modal-registered" id="modalRegisteredAdmin">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div>
                <div class="modal-close" id="modalRegisteredAdminClose"></div>
            </div>
            <p id="registeredAdminText">Thank you!</p>
            <p id="registeredAdminTextTwo">Admin has been successfully added.</p>
        </div>
    </div>
</div>

<div class="modal-registered" id="modalRegisteredGame">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div>
                <div class="modal-close" id="modalRegisteredGameClose" ></div>
            </div>
            <p id="registeredGameText">Thank you!</p>
            <p id="registeredGameTextTwo">Game has been successfully added.</p>
        </div>
    </div>
</div>

<div class="header">

</div>

<div class="content">
    <div class="content-section">
        <div class="form-wrapper">
            <div class="form-name">
                Registration new game
            </div>
            <form class="form-add" id="formAddGame">
                <label id="pathPictureLabel">Path to picture</label>
                <input id="pathPictureValue" name="path-picture" >
                <label id="gameNameLabel">Game name</label>
                <input id="gameNameValue" name="game-name" >
                <label id="numberKeysLabel">Number of keys</label>
                <input id="numberKeysValue" name="number-keys" >
                <label id="gameDescriptionsLabel">Game descriptions</label>
                <textarea id="gameDescriptionsValue" name="game-descriptions" ></textarea>
                <div class="add-btn" id="addGameBtn">
                    Add new game
                </div>
            </form>
        </div>
        <div class="form-wrapper">
            <div class="form-name">
                Registration new admin
            </div>
            <form class="form-add" id="formAddAdmin">
                <label id="nameAddAdmin">Name</label>
                <input id="nameAddAdminValue" name="name">
                <label id="surnameAddAdmin">Surname</label>
                <input id="surnameAddAdminValue" name="surname">
                <label id="loginAddAdmin">Login</label>
                <input id="loginAddAdminValue" name="login">
                <label id="emailAddAdmin">Email</label>
                <input id="emailAddAdminValue" name="email">
                <label id="passwordAddAdmin">Password</label>
                <input id="passwordAddAdminValue" name="password">
                <div class="add-btn" id="formAddAdminBtn">
                    Add new admin
                </div>
            </form>
        </div>
    </div>
    <div class="content-section">
        <div class="list-select-db">
            <div class="select-name">
                Game in Database
            </div>
            <?php
            require 'E:\OpenServer\OSPanel\domains\php-project\server\select-game-db.php';
            get_game();
            ?>
        </div>
        <div class="list-select-db">
            <div class="select-name">
                Quantity Users in Database
            </div>
        </div>
    </div>
</div>
<div class="footer">

</div>


<script src="js/validation-form-adm-page.js"></script>
<script src="js/rest-form-server.js"></script>
<script src="js/init.js"></script>
</body>
</html>