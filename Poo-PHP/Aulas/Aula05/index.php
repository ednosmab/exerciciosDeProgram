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
                require_once "ContaBanco.php";
                $p1 = new ContaBanco; //Jubileu
                $p2 = new ContaBanco; //Crueza

                //Abrindo a conta
                //Jubileu
                $p1->abrirConta("CC");
                $p1->setDono("Jubileu");
                $p1->setNumConta(1111);
                $p1->depositar(300);
                $p1->pagarMensal();
                $p1->fecharConta();

                //Creuza
                $p2->abrirConta("CP");
                $p2->setDono("Creuza");
                $p2->setNumConta(2222);
                $p2->depositar(500);
                $p2->sacar(100);
                $p2->pagarMensal();
                $p2->sacar(530);
                $p2->fecharConta();
                
                //Visualizar estatus das contas
                echo "<pre>";
                var_dump($p1, $p2);
                echo"</pre>";
            ?>
        </div>
    </body>
</html>