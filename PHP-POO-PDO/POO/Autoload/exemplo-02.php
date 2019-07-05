<?php
    function incluirClasses($nomeClasse){
        if(file_exists($nomeClasse.".php") === true) {
            require_once($nomeClasse.".php");
            
        }
    }
    spl_autoload_register("incluirClasses");//Executa funções que procura por classes no mesmo diretório
    spl_autoload_register(function($nomeClasse){
        if(file_exists("Abstrata". DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){//Busca por classes dentro de outros diretórios
            require_once("Abstrata".DIRECTORY_SEPARATOR.$nomeClasse.".php");
        }
    });
    $carro = new DelRey();
    $carro->acelerar(80);

?>