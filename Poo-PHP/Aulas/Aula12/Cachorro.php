<?php
    require_once "Mamifero.php";
    class Cachorro extends Mamifero{
        public function enterrarOsso(){
            echo "Enterrando Osso";
        }
        public function abanarRabo(){
            echo "Abanando Rabo";
        }
        public function emitirSom(){
            echo "<p>Auauauau auauau</p>";
        }
    }

?>