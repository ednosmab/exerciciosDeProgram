<?php
    //Abrindo a conexão com o banco MySql
    $conn = new PDO("mysql: host=localhost; dbname=dbphp7", "root", "");
    
    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $row){
        echo "<p>"; 
        foreach($row as $chave => $valor){
            echo $chave.": ".$valor."<br/>";
        }
        echo "</p>==================================";
    }

    $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
    
    $login = "Carlos";
    $password = "456789";
    $id = 18;

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);
    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "<p>Login e senha alterados com sucesso</p>";

    foreach($result as $row){
        echo "<p>"; 
        foreach($row as $chave => $valor){
            echo $chave.": ".$valor."<br/>";
        }
        echo "</p>==================================";
    }
    
?>