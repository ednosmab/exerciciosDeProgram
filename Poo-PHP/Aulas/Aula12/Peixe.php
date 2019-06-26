<?php
    require_once "Animal.php";
    class Peixe extends Animal{
        private $corEscama;
        public function locomover(){
            echo "<p>Nadando</p>";
        }
        public function alimentar(){
            echo "<p>Comendo substâncias</p>";
        }
        public function emitirSom(){
            echo "<p>Peixe não faz som ;)</p>";
        }
        public function soltarBolhas(){
            echo "<p>Soltou um bolha</p>";
        }
    }

?>