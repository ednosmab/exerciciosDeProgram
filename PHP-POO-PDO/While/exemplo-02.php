<?php
    $total = 150;
    $desconto = 0.9;
    do{
        $total *= $desconto; //Aplica a formula para desconto
    }while($total > 100);
    echo $total;
?>