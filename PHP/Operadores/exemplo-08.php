<?php
    //Ordem dos precedentes
    $resultado1 = 10 + 3 / 2;
    echo $resultado1;
    echo "<br/>";
    $resultado2 = (10 + 3) / 2;
    echo $resultado2;
    echo "<br/>";
    $resultado3 = (10 + 3) / 2 > 5 && 10 + 5 < 20;
    var_dump($resultado3);
    echo "<br/>";
    $resultado4 = (10 + 3) / 2 > 5 || 10 + 5 < 3;
    var_dump($resultado4);
    echo "<br/>";
    $resultado5 = (10 + 3) / 2 > 5 && !(10 + 5 < 3);
    var_dump($resultado5);
    echo "<br/>";
?>