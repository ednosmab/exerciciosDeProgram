<?php
    //Sub rotina: Não recebe parametros
    function ola(){
        echo "Olá mundo";
    }

    //Sub rotina com o uso do RETURN
    function ola2(){
        return "Olá mundo!<br/>";
    }
    

    //Utilizei um laço for para evitar escrever a chamada da função ola e ola2!!kkk
    for ($c = 1; $c <= 3; $c++){
        echo "<br/>".ola();
        echo ($d = ola2());
    }

    echo "<br/>";
    //Utilizando abstração para melhor atender as funcionalidades na aplicação
    $frase = ola2();
    echo strlen($frase);
    
    
?>