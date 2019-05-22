<?php
    function soma(int ...$valores){ //passagem de parâmetro "Declaração de tipo escalares"
        return array_sum($valores); //Função calcula os parâmetros de um array
    }
    echo soma(2, 2);
    echo "<br/>";
    echo soma(25, 33);
    echo "<br/>";
    echo soma(1.5, 3.2);
    echo "<br/>";
    
?>

