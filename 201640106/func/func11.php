<?php

function myname($info)
{
    return $info['first'] . $info['last'];
}

$my = myname(['first'=>"kim", 'last'=>"donghyuk"]);
echo "<hr>";
echo $my;