<?php
    class Pessoa{
        public $nome;

        public function falar(){
            return "O meu nome é: <span style='color: red'>".$this->nome."</span>";
        }


    }
    $eu = new Pessoa;
    $eu->nome = "Edson";
    echo $eu->falar();


?>