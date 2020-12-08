<?php
$theme = [
    'layout'=>"../resource/bootstrap/layout.html"
];
$layout = file_get_contents($theme['layout']);
echo $layout;