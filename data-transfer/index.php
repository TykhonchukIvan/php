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
                    data_transfer_POST()
            ?>
        </div>
        <div class="section-answer">
            <?php
                include "./php/processing-form-GET.php";
                    data_transfer_GET()
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
                <div class="login__flag">
                    <input type="radio" name="course" value="POST" />POST
                    <input type="radio" name="course" value="GET" />GET
                </div>
                <button type="submit" class="btn-style"> Отправить </button>
            </form>
        </div>
        <div class="section-login-get" id="formGET">
            <form class="login__form" method="GET">
                <input class="login__inp" type="text" name="login">
                <input class="login__inp" type="text" name="password">
                <input class="login__inp" type="text" name="name">
                <div class="login__flag">
                    <input type="radio" name="course" value="POST" />POST
                    <input type="radio" name="course" value="GET" />GET
                </div>
                <button type="submit" class="btn-style"> Отправить </button>
            </form>
        </div>
    </div>
    <div class="comment-container">
        <div class="comment">
            <div class="comment-btn">
                <div id="btnCommentPost" class="btn-style">
                    POST
                </div>
                <div id="btnCommentGet" class="btn-style">
                    GET
                </div>
            </div>
            <div class="comment-post" id="commentPOST">
                <form method="POST">
                    <div>
                        <p>Введите имя:</p>
                        <input type="text" name="firstname" class="comment-input"/>
                    </div>
                    <div class="comment__flag">
                        <input type="radio" name="comment-left" value="Коментарий" />Коментарий
                        <input type="radio" name="comment-right" value="Отзыв" />Отзыв
                    </div>
                    <div>
                        <textarea name="comment" maxlength="200" class="text-comment" id="textComentOne"></textarea>
                    </div>
                    <button type="submit" class="btn-style"> Отправить </button>
                </form>
            </div>
            <div class="comment-get" id="commentGET">
                <form method="GET">
                    <div>
                        <p>Введите имя:</p>
                        <input type="text" name="firstname" class="comment-input"/>
                    </div>
                    <div class="comment__flag">
                        <input type="radio" name="comment-left" value="Коментарий" />Коментарий
                        <input type="radio" name="comment-right" value="Отзыв" />Отзыв
                    </div>
                    <div>
                        <textarea name="comment" maxlength="200" class="text-comment" id="textComentTwo"></textarea>
                    </div>
                    <button type="submit" class="btn-style"> Отправить </button>
                </form>
            </div>
        </div>
        <div class="comment-answer">
            <div class="comment-answerPOST">
                <?php include "./php/processing-commentPOST.php"; data_transfer_comment_POST() ?>
            </div>
            <div class="comment-answerGET">
                <?php include "./php/processing-commentGET.php";  data_transfer_comment_GET()?>
            </div>
        </div>
    </div>
</div>
<script rel="script" src="init.js" defer></script>
</body>
</html>




