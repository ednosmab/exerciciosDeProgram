<?php
    class Carro{
        //Atributos
        private $modelo;
        private $motor;
        private $ano;
        
        //Métodos especias
        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($m){
            $this->modelo = $m." ";
        }

        public function getMotor():float{ //Tipagem de Retorno :float
            return $this->motor;
        }
        public function setMotor($mt){
            $this->motor = $mt." ";
        }

        public function getAno():int{//Tipagem de Retorno :int
            return $this->ano;
        }
        public function setAno($n){
            $this->ano = $n." ";
        }

        public function exibir(){
            return array("modelo"=>$this->modelo, "motor"=>$this->motor, "ano"=>$this->ano);
        }

    }
    $carro1 = new Carro();
    $carro1->setModelo("<span style='color: yellow; background: black'>Camaro</span>");
    $carro1->setMotor("4.0");
    $carro1->setAno("2019");

    $carro2 = new Carro();
    $carro2->setModelo("<span style='color: red; background: black'>Ferrari</span>");
    $carro2->setMotor("4.2");
    $carro2->setAno("2019");

    foreach($carro1->exibir() as $key => $value){
        echo "$key: $value";
    }
    echo "<br/>";
    foreach($carro2->exibir() as $key => $value){
        echo "$key: $value";
    }
    

?>