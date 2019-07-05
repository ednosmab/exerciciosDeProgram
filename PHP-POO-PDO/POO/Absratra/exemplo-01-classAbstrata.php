<?php
    require_once ("exemplo-01-interface.php");
    abstract class Automovel implements Veiculo{ //Funcionalidade de Abstrata é conceder a utilização das suas funcionalidade e as regras não mudam em seus herdeiros, porém não permite instanciar objetos 
        public function acelerar($vel){
            echo "O veículo acelerou até ".$vel." Km/h <br/>";
        }

        public function frenar($vel){
            echo "O Veículo frenou até ".$vel." Km/h <br/>";
        }

        public function trocarMarcha($marcha)
        {
            echo "O Veículo trocou a marcha para ".$marcha."<br/>";
        }
    }

?>