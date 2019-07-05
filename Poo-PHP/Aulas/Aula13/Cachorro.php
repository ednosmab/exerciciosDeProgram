<?php
    //No php não se utiliza polimorfismo de sobrecarga
    //Implementação desse tipo de polimorfismo da-se a uma nomeação diferente pra cada método que tenha
    //o mesmo objetivo
    require_once "Lobo.php";
    class Cachorro extends Lobo{
        public function emitirSom(){
            echo "<p>Au au au au au</p>";
        }

        public function reagirFrase($frase){
            if($frase == "toma comida" || $frase == 'Olá' || $frase == "vai apanhar"){
                echo "<p>Abanar o rabo e latir</p>";
            }
        }
        public function reagirHora($hora, $min){
            if($hora < 12){
                echo "<p>Abanar o rabo</p>";
            }elseif($hora >= 18){
                echo "<p>ignorar</p>";
            }else{
                echo "<p>Abanar o rabo e latir</p>";
            }
        }
        public function reagirDono($dono){
            if($dono == true){
                echo "<p>Abanar o rabo e latir</p>";
            }else{
                echo "<p>Rosnar e latir muitoooo!!!!</p>";
            }
        }
        public function reagirIdadePeso($idade, $peso){
            if($idade < 5){
                if($peso < 10){
                    echo "<p>Abanar</p>";
                }else{
                    echo "<p>Latir</p>";
                }
            }else{
                if($peso < 10){
                    echo "<p>Rosnar</p>";
                }else{
                    echo "<p>ignorar</p>";
                }
            }
        }

    }

?>