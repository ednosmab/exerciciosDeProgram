<?php
    $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro",                  "Dezembro");
    $mes = date("m");
    $mes == 4 ? $mes = 'Abril' : '';
    foreach($meses as $value){
        if($value == $mes){
            echo $value;
        }
            
    }
?>