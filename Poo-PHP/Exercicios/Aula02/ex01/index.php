<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <title>Curso POO em PHP</title>
    </head>
    <body>
        <div>
            <?php
                require_once 'Carro.php';
                $carro1 = new Carro;
                $carro1->rodas = 4;
                $carro1->cor = "Beje";
                $carro1->motor = true;
                $carro1->estacionar = true;

                echo "<p>";
                $carro1->andar();
                echo "</p>";
                $carro1->estacionar();

                $carro2 = new Carro;
                $carro2->moto = true;
                $carro2->cor = "Azul";
                $carro2->motor_estado = "funciona";

                echo "<p>"; 
                $carro2->manutencao();
                echo "</p>";

            ?>
        </div>
    </body>
</html>