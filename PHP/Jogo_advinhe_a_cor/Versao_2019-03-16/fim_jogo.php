<?php
    session_start();
    session_destroy();
    $_SESSION['chances'] = 0;
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../Versão 2019-03-16/_css/estilo.css"/>
        <title>Jogo Advinhe a COR</title>
    </head>
    <body>
        <main>
            <div id="cont">
                <header>
                    <h1>Fim de jogo</h1>
                    <h2>Obrigado por ter jogado, espero que tenha gostado</h2>
                    <?php echo "Placar total: ".$_SESSION['tot'];?>
                </header>
            </div>
        </main>
    </body>
</html>