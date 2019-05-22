<?php
    //Funções anônimas
    function teste($callback){
        //Processo lente
        $callback();
    }
    teste(function(){
        echo "Terminou";
    });


?>