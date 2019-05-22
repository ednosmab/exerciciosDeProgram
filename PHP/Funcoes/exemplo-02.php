<?php
    function sal(){
        return 946.00;
    }

    //echo "<br/>";
    $r = sal() * 3;
    echo "José recebeu 3 salários: R$".(sal()*3)

    //Deste modo eu formatei o salário no formato de moeda
    //echo "José recebeu 3 salários: R$".number_format($r, 2, ",", ".");

?>