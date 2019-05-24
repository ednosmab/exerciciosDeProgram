<?php
    class ContaBanco{
        //Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        //Para atribuir tipo de conta:
        //cc = conta corrente, cp = conta poupanca
        //Ao abrir uma conta, cliente recebe para conta corrente R$50,00, para conta poupanca R$150,00
        //Para fechar conta, não pode ter dinheiro na conta, nem pendencias financeiras
        //Não pode:
        //Para depositar dinheiro na conta o status tem que constar como aberto
        //Sacar dinheiro o status que estar como aberto, e tem que ter saldo, não pode fazer saques maiores do que constar na conta
        //Mensalidade quando chamada, tem que ser pago R$12,00 para cc e R$20,00

        ///////////
        //Métodos//
        ///////////
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC"){
                $this->setSaldo(50);
            }elseif ($t == "CP"){
                $this->setSaldo(150);
            }
        }

        public function fecharConta(){
            if ($this->getSaldo() > 0){
                echo "<p>Conta com saldo positivo, saque o valor total do saldo, para fechar sua conta</p>";
            }elseif ($this->getSaldo() < 0){
                echo "<p>Conta com débito, para fecar sua conta realize o pagamanto do débito</p>";
            }else{
                $this->setStatus(false);
                echo "<p>Solicitação de fechamento de conta para ".$this->getDono()." realizada com sucesso</p>";
            }
        }

        public function depositar($v){
            if ($this->getStatus()){
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Deposito de $v autorizado e realizado com sucesso para ".$this->getDono()."</p>";
            }else{
                echo "<p>Não é possível depositar, conta inexistente</p>";
            }
        }

        public function sacar($v){
            if ($this->getStatus()){
                if($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v); 
                    echo "Saque de $v para ".$this->getDono()." autorizado e realizado com sucesso";
                }else{
                    echo "<p>Saldo insuficiente para saques</p>";
                }
            }else{
                echo "<p>Não foi possível realizar saque, conta inexistente</p>";
            }
        }

        public function pagarMensal(){
            if($this->getTipo() == "CC"){
                $v = 12;
            }elseif($this->getTipo() == "CP"){
                $v = 20;
            }
            if ($this->getStatus()){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de R$$v,00 debitada na conta de ".$this->getDono()."</p>";
            }else{
                echo "<p>Conta inexistente</p>";
            }
        }
        /////////////////////
        //Métodos Especiais//
        /////////////////////
        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso</p>";
        }

        public function getNumConta(){
            return $this->numConta;
        }
        public function setNumConta($num){
            $this->numConta = $num;
        }

        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function getDono(){
            return $this->dono;
        }
        public function setDono($dono){
            $this->dono = $dono;
        }

        public function getSaldo(){
            return $this->saldo;
        }
        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        public function getStatus(){
            return $this->status;
        }
        public function setStatus($status){
            $this->status = $status;
        }
        
    }
?>

















