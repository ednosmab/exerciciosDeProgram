<?php
    function ola(){
        $argumentos = func_get_args();
        return $argumentos;
    }
    var_dump(ola("Bom dia", 10));
    echo "<br/>";

    //Outro exemplo do uso do agrupamento de argumentos da função fun_get_args()
    function soma(){
        $somar = 0;
        $arg = func_get_args();
        foreach($arg as $value){
            $somar = $somar + $value;
        }
        return $somar;
    }
    echo "Resultado da soma entre os valores é: " . soma(100, -100, 100)
?>