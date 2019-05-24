<?php
    class Caneta{
        public $modelo;
        private $cor;
        private $ponta;
        protected $carga;
        private $tampada;


        //Dessa forma utilizando o nome Construct com duas Underlines
        /*
        public function __construct(){
            $this->cor = "Azul";
            $this->modelo = "Bic";
            $this->ponta = 0.5;
            $this->tampar();
        }*/

        /*//Essa forma entrará em desuso para versões futuras, recomendado utilização de Construct
        //Dessa forma utilizando o nome da Classe
        public function Caneta(){
            $this->cor = "Vermelho";
            $this->modelo = "Cazam";
            $this->ponta = 0.3;
            $this->tampar();
        }*/

        public function __construct($m, $c, $p, $cg){
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->carga = $cg;
            $this->tampar();
        }

        public function tampar(){
            $this->tampada = true;
        }

        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($m){
            $this->modelo = $m;
        }
        public function getPonta(){
            return $this->ponta;
        }
        public function setPonta($p){
            $this->ponta = $p;
        }
    }
?>