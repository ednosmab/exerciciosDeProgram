<?php
    /*Utilizando For para números negativos
    for($c = 5; $c >= -10; $c--){
        echo $c."<br/>";
    }*/

    //Utilizando IF no For
    for($c = 0; $c <= 900; $c += 5){
        if($c >= 200 && $c <= 800) continue;//Foi retirado o intervado de 200 à 800
        echo $c."<br/>";
    }
?>