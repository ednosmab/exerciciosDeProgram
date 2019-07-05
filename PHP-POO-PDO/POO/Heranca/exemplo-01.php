<?php
    class Documento{
        private $numero;

        public function getNumero(){
            return $this->numero;
        }

        public function setNumero($n){
            $this->numero = $n;
        }

    }


    class CPF extends Documento{
        
        public function validar():bool{
            require_once ("../validacao_cpf.php");//Utilizando função externa
            validaCPF($this->getNumero());
            return true;
        }
    }
$doc = new CPF();
$doc->setNumero("111222333-44");
var_dump($doc->validar());
echo "<br/>".$doc->getNumero();

?>