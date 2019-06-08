<?php
    namespace Cliente;
    class Cadastro extends \Cadastro{

        public function registrarVenda(){
            echo "Foi gerada uma venda para o cliente ".$this->getNome();
        }

    }

?>