<?php
    class Carro{
        var $rodas;
        var $direcao;
        var $cor;
        var $motor;
        var $estacionar;
        var $motor_estado;

        function andar(){
            if($this->motor == true){
                echo "Posso andar com o carro, pois o motor está ligado";
            }else{
                echo "Quero andar, vou ligar o carro e dar partida no motor";
            }
        }
        function estacionar(){
            if($this->estacionar == true){
                echo "Cheguei ao meu destino, vou estacionar o carro";
            }else{
                echo "Falta pouco pra chegar";
            }
        }
        function manutencao(){
            if($this->motor_estado == "quebrado"){
                echo "Agora ferrou, vou ter que concertar o meu carro";
            }else{
                echo "A manutenção do meu carro está em dia";
            }
            
        }
    }
?>