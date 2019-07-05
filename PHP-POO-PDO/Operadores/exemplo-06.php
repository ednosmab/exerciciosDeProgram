<?php
    $a = NULL;
    $b = 9;
    $c = 10;
    echo $a ?? $b ?? $c;//Se a variável $a conter o valor NULL a variável $b será exibida se não estiver nulo também, por causa do operador Null Coalesce 
?>