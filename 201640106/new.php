<?php

$path = "../resource/bootstrap";
$theme = [
    'layout'=>$path."layout.html",
    'list'=>$path."list.html",
    'new'=>$path."new.html"
];
$layout = file_get_contents($theme['layout']);
$newpage = file_get_contents($theme['new']);

$layout = str_replace("{{contents}}",$newpage,$layout);

echo $layout;

