<?php
    $json = '[{"Nome":"Edson","Idade":30},{"Nome":"Maria","Idade":25}]';
    $data = json_decode($json, true); //Se não inserir o atributo TRUE, a chamada do json vira um objeto
    var_dump($data);
?>