<?php
    $conn = new mysqli("localhost", "root", "", "dbphp7");
    if($conn->connect_error){
        echo "Erro: ".$conn->connect_error;
    }

    $data = array();
    $result = $conn->query("select * from tb_usuarios order by deslogin");
    while($row = $result->fetch_assoc()){
        array_push($data, $row);
    }
    echo json_encode($data);

?>