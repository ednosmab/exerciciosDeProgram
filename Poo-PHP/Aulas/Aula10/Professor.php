<?php
    require_once "Pessoa.php";
    class Professor extends Pessoa{
        //Atributos
        private $especialidade;
        private $salario;

        //Métodos
        public function receberSal($aum){
            $this->salario += $aum;
        }

        //Métodos especias
        public function getEspecialidade(){
            return $this->especialidade;
        }
        public function getSalario(){
            return $this->salario;
        }

        public function setEspecialidade($esp){
            $this->especialidade = $esp;
        }
        public function setSalario($sal){
            $this->salario = $sal;
        }
    }

?>