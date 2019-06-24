<?php
    require_once "Aluno.php";
    class Tecnico extends Aluno{
        //Atributos
        private $registroProfissional;

        //Métodos
        public function praticar(){

        }
        
        //Métodos especias
        public function getRgPro(){
            return $this->registroProfissional;
        }

        public function setRgPro($rgp){
            $this->registroProfissional = $rgp;
        }
    }

?>