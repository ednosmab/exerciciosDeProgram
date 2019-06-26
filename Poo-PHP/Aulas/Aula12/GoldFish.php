<?php
    require_once "Peixe.php";
    class GoldFish extends Peixe{
        private $corEscama;
        public function getCorEscama(){
            return $this->corEscama;
        }
        public function setCorEscama($esc){
            $this->corEscama = $esc;
        }
    }

?>