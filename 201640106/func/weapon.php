<?php

$weapon = ["knife", "gun", "hatchet"];

foreach ($weapon as $w){
    #echo $w;
    /*switch($w){
        case 'knife';
            echo "<b>칼</b>로 공격을 합니다.";
            break;
        case 'gun';
            echo "<b>총</b>으로 공격을 합니다.";
            break;
        case 'hatchet';
            echo "<b>손도끼</b>로 공격을 합니다.";
            break;
    }*/
    $w();
    print "<br>";