<?php
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador{
        //Atributos
        private $volume;
        private $ligado;
        private $tocando;

        //Metodos especiais
        public function __construct()
        {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        private function getVolume(){
            return $this->volume;
        }
        private function setVolume($v){
            $this->volume = $v;
        }

        private function getLigado(){
            return $this->ligado;
        }
        private function setLigado($s){
            $this->ligado = $s;
        }

        private function getTocando(){
            return $this->tocando;
        }
        private function setTocando($t){
            $this->tocando = $t;
        }
        ///////
        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo "---------MENU---------";
            echo "<br/>Está ligado: ";
            echo ($this->getLigado())?"SIM":"NÃO";
            echo "<br/>Está tocando: ";
            echo ($this->getTocando())?"SIM":"NÃO";
            echo "<br/>Volume: ";
            echo ($this->getVolume())?($this->getVolume())." ":"NÃO";
            for ($i = 0; $i <= $this->getVolume(); $i+=10){
                echo "| ";
            }
            echo "<br/>";
        }
        public function fecharMenu(){
            echo "Fechando Menu...";
        }
        public function maisVolume(){
            if ($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            }else{
                echo "<p>ERRO! TV desligada, impossível aumentar o volume</p>";
            }
        }
        public function menosVolume(){
            if ($this->getVolume()){
                $this->setVolume($this->getVolume() - 5);
            }else{
                echo "<p>ERRO! TV desligada, impossível diminuir o volume</p>";
            }
        }
        public function ligarMudo(){
            if ($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }else{
                echo "<p>ERRO! TV desligada, impossível executar função mudo</p>";
            }
        }
        public function desligarMudo(){
            if($this->getLigado() && $this->getVolume() == 0){
                $this-setVolume(50);
            }else{
                echo "<p>ERRO! TV desligada, impossível executar função mudo</p>";
            }
        }
        public function play(){
            if($this->getLgado() && !($this->getTocando())){
                $this->setTocando(true);
            }else{
                echo "<p>ERRO! TV desligada, impossível executar função tocar</p>";
            }
        }
        public function pause(){
            if($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }else{
                echo "<p>ERRO! TV desligada, impossível executar função pause</p>";
            }
        }

    }

?>