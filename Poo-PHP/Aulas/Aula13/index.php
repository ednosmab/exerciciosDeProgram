<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css" />
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            require_once "config.php";
            //Programa principal
            $l = new Lobo();
            $l->emitirSom();

            $c = new Cachorro();
            $c->emitirSom();
            $c->reagirFrase("Olá");
            $c->reagirFrase("vai apanhar");
            $c->reagirFrase("toma comida");
            $c->reagirHora(11, 45);
            $c->reagirHora(21, 00);
            $c->reagirDono(true);
            $c->reagirDono(false);
            $c->reagirIdadePeso(2, 12.5);
            $c->reagirIdadePeso(17, 4.5);
        ?>
    </div>
    
</body>
</html>