<?php
    require_once "config.php";
    class Video implements AcoesVideo{
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzinho;

        public function getTitulo(){
            return $this->titulo;
        } 
        public function getAvaliacao(){
            return $this->avaliacao;
        }
        public function getViews(){
            return $this->views;
        } 
        public function getCurtidas(){
            return $this->curtidas;
        } 
        public function getReproduzindo(){
            return $this->reproduzinho;
        }

        public function setTitulo($t){
            $this->titulo = $t ;
        } 
        public function setAvaliacao($av){
            $media = ($this->avaliacao + $av)/$this->views;
            $this->avaliacao = $media;
        }
        public function setViews($v){
            $this->views = $v;
        } 
        public function setCurtidas($c){
            $this->curtidas = $c;
        } 
        public function setReproduzindo($r){
            $this->reproduzinho = $r;
        }

        public function __construct($t){
            $this->titulo = $t;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzinho = false;
        }
        public function play(){

        }
        public function pause(){

        }
        public function like(){

        }
    }
?>