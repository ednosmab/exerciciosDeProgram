<?php
    abstract class Pessoa{
        //Atributos
        protected $nome;
        protected $idade;
        protected $sexo;

        //Métodos
        public final function fazerAniver(){
            $this->idade ++;
        }
        //Métodos especias
        public function getNome(){
            return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getSexo(){
            return $this->sexo;
        }

        public function setNome($n){
            $this->nome = $n;
        }
        public function setIdade($id){
            $this->idade = $id;
        }
        public function setSexo($s){
            $this->sexo = $s;
        }
    }

?>