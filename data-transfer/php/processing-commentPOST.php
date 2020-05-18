<?php

function data_transfer_comment_POST(){

    $comment = $_POST;
    $comment_users = array();

    foreach ($comment as $key => $value) {
        if ($key === 'firstname'){
            echo "<p> Имя $value</p>";
            array_push($comment_users, $value);
        } elseif ($key === 'comment-left') {
            echo "<p> $value </p>";
            array_push($comment_users, $value);
        } elseif ($key === 'comment-right') {
            echo "<p> $value </p>";
            array_push($comment_users, $value);
        } elseif ($key === 'comment') {
            echo "<p> $value </p>";
            array_push($comment_users, $value);
        }
    }
}

