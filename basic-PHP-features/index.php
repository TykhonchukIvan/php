<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="section">
    <div class="section-form">
        <form method="POST" class="form-area">
            <input name="name">
            <textarea name="text" class="form-area__text"></textarea>
            <button type="submit" class="form-area__btn">Отправить</button>
        </form>
    </div>
    <div class="section-answer">
        <?php include "./php/processing-form-POST.php";
        echo_text($srt_text);
        echo_name($srt_name);
        ?>
    </div>
    <div class="section-answer">
        <?php work_on_string($srt_text,$srt_name); ?>
    </div>
</div>
</body>
</html>