<?php
    require_once ("exemplo-01-classAbstrata.php");
    require_once ("exemplo-01-class.php");
    //$carro = new Automovel();//Classe abstrata não pode instanciar objetos
    $carro = new DelRey();
    $carro->acelerar("200");
    $carro->empurrar();


?>