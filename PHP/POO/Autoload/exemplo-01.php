<?php
    function __autoload($nomeClasse){//Busca os arquivos contendo classes dentro do mesmo diretório
        require_once("$nomeClasse.php");//Retorna todos os arquivos contendo classes dentro do mesmo diretório
        var_dump($nomeClasse);
    }
    $carro = new DelRey();
    $carro->acelerar(80);

?>