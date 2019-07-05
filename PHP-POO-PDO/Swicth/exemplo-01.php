<?php
    $diaDaSemana = date("w");
    switch($diaDaSemana){
        case 1:
            echo "Sgunda-feira";
            break;
        case 2:
            echo "Terça-feira";
            break;
        case 3:
            echo "Quarta-feira";
            break;
        case 4:
            echo "Quinta-feira";
            break;
        case 5:
            echo "Sexta-feira";
            break;
        case 6:
            echo "Sábado";
            break;
        default:
            echo "Domingo";

    }

?>