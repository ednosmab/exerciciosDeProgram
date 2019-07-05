<?php
    //Valores que não recebem parâmetros, ficam a esquerda
    
    function ola($texto = "mundo", $periodo = "Bom dia"){ //atribuir um valor padrão
        return "Olá $texto! $periodo!<br/>";

    }
    echo ola("mundo", "");
    echo ola("Glaucio", "Boa tarde");
    echo ola("João");//Rertona valor padrão na função
    echo ola("","Boa noite");//não passando valor para a função, o retorno padrão atribuido na função foi acionado e exibido

?>