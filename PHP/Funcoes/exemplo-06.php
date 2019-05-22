<?php
    $data = array('nome' => 'João', 'idade' => 20);
    foreach($data as $key => &$value){ //Utilidade de passagem por refeência dentro do foreach
        //echo $key.": ".$value."<br/>";
        if (gettype($value) === 'integer') $value += 10;
        echo $value."<br/>";
    }
    var_dump($data);

?>