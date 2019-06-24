<?php
    require_once "Aluno.php";
    class Bolsista extends Aluno{
        //Atributos
        private $bolsa;
        
        //Métodos
        public function renovarBolsa(){
            echo "Bolsa renovada";
        }
        public function pagarMensal(){//Sobrepondo função
            echo "<p>Aluno $this->nome é bolsista, recebe desconto<br/>Mensalidade paga com sucesso do aluno ".$this->nome."</p>";
        }
        
        //Métodos especias
        public function getBolsa(){
            return $this->bolsa;
        }
        public function setBolsa($bol){
            $this->bolsa = $bol;
        }

    }

?>