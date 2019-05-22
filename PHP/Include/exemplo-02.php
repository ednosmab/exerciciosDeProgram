<?php
    //include "inc/exemplo-01.php";//Para uma boa prática, interessante colocar os arquivos que serão incluídos em outros arquivos, dentro de uma pasta 
    //require "inc/exemplo-01.php";
    require_once "inc/exemplo-01.php";
    $result = soma(100, 200);
    echo $result;
?>