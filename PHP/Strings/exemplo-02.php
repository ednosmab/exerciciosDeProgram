<?php
    $nome = 'joão rangel';
    echo $nome."<br/>";
    $nome = strtoupper($nome);//Converte tudo para maúsculo
    echo $nome."<br/>";
    $nome = strtolower($nome);//Converte tudo para minúsculo
    echo $nome."<br/>"; 
    $nome = ucwords($nome);//Converte a primeira letra de cada palavra em maiúsculo
    echo $nome."<br/>";
    $nome = strtolower($nome);
    $nome = ucfirst($nome);//Converte a primeira letra da primeira palavra em maiúsculo
    echo $nome."<br/>";
    
?>