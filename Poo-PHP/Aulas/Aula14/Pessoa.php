<?php
    abstract class Pessoa{
        protected $nome;
        protected $idade;
        protected $experiencia;
        abstract function ganharExp();

        public function getNome(){
            return $this->nome;
        }
        public function  getIdade(){
            return $this->idade;
        }
        public function  getExperiencia(){
            return $this->experiencia;
        }
        
        public function setNome($n){
            $this->nome = $n;
        }
        public function  setIdade($id){
            $this->idade = $id;
        }
        public function  setExperiencia($exp){
            $this->experiencia = $exp;
        }
    }

?>