<?php
    $pessoas = array();
    array_push($pessoas, array(
        'Nome' => 'Edson',
        'Idade' => 30
    ));
    array_push($pessoas, array(
        'Nome' => 'Maria',
        'Idade' => 25
    ));
    //print_r($pessoas);

    echo json_encode($pessoas); //Para inserir o array no json
?>