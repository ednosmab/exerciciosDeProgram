<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <title>Curso Aula 02 POO em PHP</title>
    </head>
    <body>
        <div>
            <?php
                require_once 'Caneta.php';
                $c1 = new Caneta;
                $c1->cor = "Azul";
                $c1->ponta = 0.5;
                $c1->tampada = false;
                
                $c1->tampar();
                $c1->rabiscar();
                print_r($c1)."<p>";

                $c2 = new Caneta;
                $c2->cor = "Verde";
                $c2->carga = "50%";
                
                $c2->tampar();
                echo "<p>";
                print_r($c2)."</p>";
            ?>
        </div>
    </body>
</html>