<?php
    require_once "Reptil.php";
    class Tartaruga extends Reptil{
        private $corCasco;
        public function getCorCasco(){
            return $this->corCasco;
        }
        public function setCorCasco($cor){
            $this->corCasco = $cor;
        }
        public function locomover(){
            echo "Andando beeeeeeem devagar";
        }
    }

?>