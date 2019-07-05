<?php
    function opcao_cor($n){
        switch ($n){
            case 1:
                $cor = "1 Rosa";
                break;
            case 2:
                $cor = "2 Vermelho";
                break;
            case 3:
                $cor = "3 Amarelo";
                break;
            case 4:
                $cor = "4 Azul";
        };
        return($cor);
    }
    function resetar(){
        setcookie("visitas", $_COOKIE["visitas"] = 1);
    }
?>