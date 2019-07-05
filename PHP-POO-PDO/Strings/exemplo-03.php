<?php
    $empresa = 'Hcode';
    $empresa = str_replace("o", 0, $empresa);//Primeiro parâmetro o que está procurando, o segundo o que deseja trocar, o terceiro parâmetro é o local que deseja trocar
    echo $empresa."<br/>";
    $empresa = str_replace("e", 3, $empresa);
    echo $empresa."<br/>";
?>