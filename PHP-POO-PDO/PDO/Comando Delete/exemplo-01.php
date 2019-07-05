<?php
    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");
    $stmt->execute();
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
    foreach($result as $row){
        echo "<p>";
        foreach($row as $chave => $valor){
            echo "$chave: $valor<br/>";
        }
        echo "</p>";
    }

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
    $id = 18;
    $stmt->bindParam(":ID", $id);
    
    //Execute deve ser informado no final de todo o processo
    $stmt->execute();
    echo "Comando executado com sucesso";

    foreach($result as $row){
        echo "<p>";
        foreach($row as $chave => $valor){
            echo "$chave: $valor<br/>";
        }
        echo "</p>";
    }

?>