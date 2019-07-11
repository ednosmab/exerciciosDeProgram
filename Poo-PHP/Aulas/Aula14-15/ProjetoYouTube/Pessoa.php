<?php
    abstract class Pessoa{
        protected $nome;
        protected $idade;
        protected $experiencia;
        
        public function __construct($n, $i){
            $this->nome = $n;
            $this->idade = $i;
            $this->experiencia = 0;
        }
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

        public function ganharExp($n){
            $this->experiencia += $n;
        }
    }
    
?>