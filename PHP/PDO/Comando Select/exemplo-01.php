<?php
    //Forma mais padronizada para utilizar banco de dados com aplicação php
    $conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    sort($result); //Ordenando de forma crescente
    
    //Foreach vai trazer linha por linha da tabela
    foreach($result as $row){
        foreach($row as $key => $value){
            echo "<strong>".$key.":</strong> ".$value."<br/>";
        }
        echo "<br/>=======================================<br/>";
    }

    //var_dump($result)
    

?>