<?php
    $a = 10;
    echo "Valor atribuido: ".$a;
    function trocaValor(&$b){ //Inserindo o & comercial, ao lado da variável que deseja alterar, ocorre uma passagem por referência 
        $b += 50;
        return $b;
    }
    echo "<br/>";
    echo "Valor alterado pela chamada da função : ".trocaValor($a);
    echo "<br/>";
    echo "Valor alterado pela chamada da função : ".trocaValor($a);
    echo "<br/>";
    echo "Valor atual: ".$a;
?>