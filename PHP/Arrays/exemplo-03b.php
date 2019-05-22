<?php
    function adiciona(array $pessoas, $nome, $idade){
        
        array_push($pessoas, array(
            'nome' => $nome, 
            'idade' => $idade
        ));  
        //$retorno = array($nome, $idade);
        //return $retorno;  
        //return $nome;
        //return $idade;
        return $pessoas;
    }
    $pessoas = array();
    $pessoa1 = adiciona($pessoas, 'Edson', 30);
    $pessoa2 = adiciona($pessoas, 'Maria', 25);
    $pessoas = array($pessoa1, $pessoa2);
    /*
    $pessoa1 = adiciona('Edson', 30);
    $pessoa2 = adiciona('Maria', 25);
    $pessoas = array($pessoa1, $pessoa2);
    */
    
    print_r($pessoas)
?>