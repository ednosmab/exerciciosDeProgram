<?php
    $dt = new DateTime();

    $periodo = new DateInterval("P15D");//Criar um intervalor
    $dt->add($periodo);//Adiciona o objeto $periodo na função add, para somar o intervalor à data atual
    echo $dt->format("d/m/Y");

?>