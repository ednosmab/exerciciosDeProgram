<?php
    //Conectando com o banco MySql
    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    //Preparando o comando insert 
        //O PDO tem um recurso bem interessante que é o ID, 
        //inserindo um ID e depois vinculando com uma variável, com a função interna bindParam
    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");
    
    $login = "jose";
    $password = "123456";

    //Vinculando as variáveis com a função bindParam
    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);

    //Depois de tudo pronto, executar com o execute
    $stmt->execute();
    echo "<p>Inserido com sucesso</p>";

    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $row){
        echo "<p>";
        foreach($row as $chave => $valor){
            echo $chave.": ".$valor."<br/>";
        }
        echo "</p>";
        echo "=============================";
    }


?>