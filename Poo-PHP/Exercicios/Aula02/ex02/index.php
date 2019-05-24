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
               require_once 'Trabalhar.php';
               $dia1 = new Trabalhar;
               $dia1->sair_de_casa = false;
               $dia1->cheguei = true;
               $dia1->computador = false;
               $dia1->programas = false;
               $dia1->verificar_serviço = "Tradicional";
               $dia1->puxar_no_f6 = "Sim";
               
               $dia1->sair();
               $dia1->chegar();
               $dia1->func_trabalhar();
            ?>
        </div>
    </body>
</html>