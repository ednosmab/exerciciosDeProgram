<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <title>Curso POO em PHP</title>
    </head>
    <body>
        <div>
            <h1>Projeto Controle Remoto</h1>
            <?php
                require_once 'ControleRemoto.php';
                $c = new ControleRemoto();
                //$c->ligar();
                
                $c->maisVolume();
                $c->abrirMenu();
                
            ?>
        </div>
    </body>
</html>