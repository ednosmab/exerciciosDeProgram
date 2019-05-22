<?php
    require_once("config.php");
    unset($_SESSION["nome"]); //Para limpar a variável
    echo $_SESSION["nome"];
    $_SESSION["valor"] = 10;

?>