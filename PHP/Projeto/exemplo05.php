<?php
    $nome = "Glaucio";
    function teste(){
        global $nome;//Para utilizar a variável $nome que está fora do escopo da função teste
        echo $nome;
    }
    function teste2(){
        $nome = "Edson";
        echo $nome." Agora no teste dois";
    }
    teste();
    echo "<br/>";
    teste2();
?>