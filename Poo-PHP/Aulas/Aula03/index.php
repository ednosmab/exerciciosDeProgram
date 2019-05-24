<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <title>Curso POO em PHP Aula 02</title>
    </head>
    <body>
        <div>
            <?php
                require_once 'Caneta.php';
                $c1 = new Caneta;
                $c1->modelo = "BIC cristal";
                $c1->cor = "Azul";
                //$c1->ponta = 0.7;
                //$c1->carga = 80;
                //$c1->tampada = true;
                
                $c1->rabiscar();
                $c1->tampar();
                $c1->destampar();
                var_dump($c1);
            ?>
        </div>
    </body>
</html>