<?php

    class Pessoa{
        public $nome = "Rasmus Lerdorf";
        protected $idade = "48";
        private $senha = "123456";

        public function verDados(){
            echo $this->nome."<br/>";
            echo $this->idade."<br/>";
            echo $this->senha."<br/>";
        }

    }

    class Programador extends Pessoa{

        public function verDados(){
            echo "Função verDados está vindo da Classe: ";
            echo get_Class($this)."<br/>";

            echo $this->nome."<br/>";
            echo $this->idade."<br/>";
            echo $this->senha."<br/>";
        }
    }
    $p1 = new Programador();
    $p1->verDados();


?>