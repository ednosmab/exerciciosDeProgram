
<?php
    require_once ("exemplo-01-interface.php");
    class Civic implements Veiculo{
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
    $carro = new Civic();
    $carro->trocarMarcha("1");
    $carro->frenar("100");

?>