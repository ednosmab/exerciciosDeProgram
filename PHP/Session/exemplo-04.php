<?php
    session_id('7gfbhg43sklvtn4ud9534q8lr5');//Para recuperar sessão, inserir o id da sessão que deseja recuperar
    require_once("config.php");
    session_regenerate_id();//Para gerar novos IDs diferentes
    echo session_id()."<br/>";
    var_dump($_SESSION);

?>