<?php
    require_once "Pessoa.php";
    class Funcionario extends Pessoa{
        //Atributos
        private $setor;
        private $trabalhando;

        //Métodos
        public function mudarTrabalho(){
            $this->trabalhando = ! $this->trabalhando;
        }

        //Métodos especias
        public function getSetor(){
            return $this->setor;
        }
        public function getTrabalhando(){
            return $this->trabalhando;
        }

        public function setSetor($set){
            $this->setor = $set;
        }
        public function setTrabalhando($tra){
            $this->trabalhando = $tra;
        }

    }
?>