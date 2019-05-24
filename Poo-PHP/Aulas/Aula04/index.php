<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Curso POO em PHP Aula 04</title>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    </head>
    <body>
        <div>
            <?php
                require_once 'Caneta.php';
                $c1 = new Caneta("Cazam", "Verde", 0.3, '80%');
                $c2 = new Caneta("Face", "Preta", 0.7, '85%');
                var_dump($c1, $c2);

                /*Forma de utilização de Método Acessor e Método Moificador ou Mutante
                $c1->modelo = "Bic";
                //$c1->ponta = 0.8; //Não é possível fazer atribuições diretamente, somente com uso de metodos
                $c1->setModelo("Bic");
                $c1->setPonta(0.7);
                echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
                var_dump($c1, $c2);
                */
                
            ?>
        </div>
    </body>
</html>