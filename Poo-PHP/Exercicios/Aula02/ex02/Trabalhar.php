<?php
    class Trabalhar{
        var $sair_de_casa;
        var $cheguei;
        var $computador;
        var $programas;
        var $verificar_serviço;
        var $puxar_no_f6;

        function sair(){
            if($this->sair_de_casa == true){
                echo "<p>Entro no meu carro, dou partida, abro o portão e dirijo até o meu trabalho</p>";
            }else{
                echo "<p>Preciso sair para o trabalho</p>";
            }
        }
        function chegar(){
            if($this->cheguei == true){
                echo "<p>Cheguei no trabalho, vou verificar se o computador está ligado e os programas ativados</p>";
            }else{
                echo "<p>Ainda estou chegando no trabalho</p>";
            }
        }
        function func_trabalhar(){
            if($this->programas == false and $this->computador == false){
                echo "<p>Vou ligar o computador</p>";
                $this->computador = true;
                echo "<p>Vou ativar os programas</p>";
                $this->programas = true;
                echo "<p>Vou começar a trabalhar</p>";
            }
            if($this->verificar_serviço == "Tradicional"){
                echo "<p>Vou começar os serviços tradicionais</p>";
            }else{
                echo "<p>Vou começar os serviços digitais</p>";
            }
            if($this->puxar_no_f6 == "Sim"){
                echo "<p>Agora está tudo certo, vou começar a trabalhar</p>";
            }
        }

    }
?>