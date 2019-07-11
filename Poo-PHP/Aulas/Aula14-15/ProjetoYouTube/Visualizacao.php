<?php
    require_once "config.php";
    class Visualizacao{
        private $espectador;
        private $filme;
        
        public function __construct($esp, $film){
            $this->espectador = $esp;
            $this->filme = $film;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        }
        public function getEspectador(){
            return $this->espectador;
        }
        public function setEspectador($esp){
            $this->espectador = $esp;
        }
        
        public function getFilme(){
            return $this->filme;
        }
        public function setFilme($flm){
            $this->filme = $flm;
        }
        
        public function avaliar(){
            $this->filme->setAvaliacao(5);
        }

        public function avaliarN($nota){
            $this->filme->setAvaliacao($nota);
        }

        public function avaliarP($porc){
            $nova = 0;
            if($porc < 20){
                $nova = 3;
            }elseif($porc <= 50){
                $nova = 5;
            }elseif($porc <= 90){
                $nova = 8;
            }else{$nova = 10;}
            $this->filme->setAvaliacao($nova);
        }
    }

?>