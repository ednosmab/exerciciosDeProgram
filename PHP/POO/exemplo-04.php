<?php
    class Endereco{
        private $logradouro;
        private $numero;
        private $cidade;

        public function __construct($log, $num, $cid)
        {
            $this->logradouro = $log;
            $this->numero = $num;
            $this->cidade = $cid;
        }

        public function __destruct()
        {
            var_dump("Destruir");
        }

        public function __toString(){
            return $this->logradouro.", ".$this->numero." - ".$this->cidade;
        }

    }

    //Método Construtor
    $meuEndereco = new Endereco("Rua Benedito Alonso", "67", "Franco da rocha");
    var_dump($meuEndereco);
    echo "<br/>";

    //Conversão para String, retorna o endereço quando o objeto é chamado de forma direta no echo
    echo "<p>";
    echo $meuEndereco;
    echo "</p>";

    //Destruir variáveis, objetos e afins
    unset($meuEndereco);
    var_dump($meuEndereco);//Retorna NULL, por não existir

?>