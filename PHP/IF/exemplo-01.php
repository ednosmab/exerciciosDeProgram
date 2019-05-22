<?php
    $qualASuaIdade = 11;
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;
    if ($qualASuaIdade < $idadeCrianca) {
        echo "Criança";
    }
    if ($qualASuaIdade < $idadeMaior) {
        echo "Adulto";
    }
    if($qualASuaIdade < $idadeMelhor){
        echo "Idoso";
    }

?>