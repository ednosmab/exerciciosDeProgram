<?php
    require_once "Pessoa.php";
    class Gafanhoto extends Pessoa{
        private $login;
        private $totAssistido;
        
        public function __construct($nome, $idade, $sexo, $login){
            parent::__construct($nome, $idade, $sexo);
            $this->login = $login;
            $this->totAssistido = 0;
        }

        public function getLogin(){
            return $this->login;
        }
        public function getTotAssistido(){
            return $this->totAssistido;
        }

        public function setLogin($log){
            $this->login = $log;
        }
        public function setTotAssistido($ta){
            $this->totAssistido = $ta;
        }

        public function viuMaisUm(){
            $this->$totAssistido ++;
        }

    }

?>