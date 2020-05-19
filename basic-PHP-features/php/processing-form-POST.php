<?php

function processing_form_POST()
{
    $data  = "";
    if (isset($_POST['text'])) {
        $data = strip_tags($_POST['text']);
    }
    echo $data;
    return $data;
}

$str = processing_form_POST();

