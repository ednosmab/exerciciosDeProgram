<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <title>Curso POO em PHP</title>
    </head>
    <body>
        <div>
            <h1>Projeto Emoji Combat</h1>
            <?php
                require_once "Lutador.php";
                require_once "../Aula08/Luta.php";
                $l = array();
                $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
                $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
                $l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
                $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
                $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
                $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

                /*
                $l[0]->status();
                foreach($l as $value){
                    $value->apresentar();
                }*/
                
                /*
                //Testando classe Lutador
                $l[3]->empatarLuta();
                $l[3]->empatarLuta();
                $l[3]->ganharLuta();
                $l[3]->perderLuta();
                $l[3]->status();
                */
                $UEC01 = new Luta;
                //$UEC01->marcarLuta($l[0], $l[1]);//Luta acontece
                //$UEC01->marcarLuta($l[1], $l[1]);//Luta não acontece
                //$UEC01->marcarLuta($l[1], $l[5]);//Luta não acontece
                $UEC01->marcarLuta($l[4], $l[5]);//Luta acontece
                $UEC01->lutar();

                //Após luta verificar status
                /*$l[0]->status();
                $l[1]->status();*/


            ?>
        </div>
    </body>
</html>