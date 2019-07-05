<?php
    $conn = new mysqli("localhost", "root", "", "dbphp7"); //Conecta ao banco: servidor, usuario, senha e banco
    if($conn->connect_error){//Exibe as falhas de conexão
        echo "Erro: ".$conn->connect_error;
    }
    $stmt = $conn->prepare("insert into tb_usuarios(deslogin, dessenha) values(?, ?)");//Prepara um ambiente p/
    //receber dados
    $stmt->bind_param("ss", $login, $pass);//Informa qual é o tipo de dado e seta os dados para serem inseridos
    
    /*//Esse trecho está funcionando 
    $login = "user";
    $pass = "12345";

    $stmt->execute(); //Executa todo o processo e por final insere no banco de dados

    //Uma vez criada a conexão com banco de dados, não precisa refazer toda a instrução
    $login = "root";
    $pass = '@#$rrf';

    $stmt->execute();
    */
    $login = isset($_GET['user'])?$_GET['user']:"";
    $pass = isset($_GET['pass'])?$_GET['pass']:"";
    if($login && $pass){
        $stmt->execute();
    }else{
        echo "Nome de usuário ou senha inválidos";
        sleep(5000);
        header("Location: index.html");
    }
    header("Location: save.html");

?>