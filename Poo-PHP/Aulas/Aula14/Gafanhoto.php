<?php
    require_once "Pessoa.php";
    class Gafanhoto extends Pessoa{
        private $login;
        private $totAssistido;
        
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

        }

        public function ganharExp(){

        }
    }

?>