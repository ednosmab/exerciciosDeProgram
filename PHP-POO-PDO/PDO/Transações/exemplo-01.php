<?php
    $conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "");

    $conn->beginTransaction();
    
    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
    
    $id = 23;
    
    $stmt->execute(array($id));
    
    //Para executar o comando tive que habilitar a engine innodb no banco 
    //No workbench: alter table tb_usuarios engine = innodb;
    //$conn->rollBack();//Comando cancela se estiver errado

    $conn->commit();//Confirma e executa o comando se estiver certo


?>