<?php
    require_once "Pessoa.php";
    //Classe final não pode gerar folhas, filhas, herdeiros
    //final class Aluno extends Pessoa{
    class Aluno extends Pessoa{
        //Atributos
        private $matricula;
        private $curso;

        //Métodos
        //public final function pagarMensal(){//Informando que é um método final, na classe Bolsista
            // não poderá alterar o mesmo método
        public function pagarMensal(){
            echo "<p>Mensalidade paga com sucesso do aluno ".$this->nome."</p>";
        }

        //Métodos especias
        public function getMatricula(){
            return $this->matricula;
        }
        public function getCurso(){
            return $this->curso;
        }

        public function setMatricula($mat){
            $this->matricula = $mat;
        }
        public function setCurso($c){
            $this->curso = $c;
        }
    }
?>