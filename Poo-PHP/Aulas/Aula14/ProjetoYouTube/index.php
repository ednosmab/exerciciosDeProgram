<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Projeto YouTube</title>
</head>
<body>
    <div>
        <?php
            require_once "config.php";
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 2 de PHP");
            $v[2] = new Video("Aula 3 de HTML");
            echo "<pre>";
            print_r($v);
            echo "<pre>";

            $g[0] = new Gafanhoto("Edson", 30, "m", "Edson.Garcia");
            $g[1] = new Gafanhoto("Maria", 25, "f", "ma_r");
            echo "<pre>";
            print_r($g);
            echo "<pre>";

        ?>
    </div>
</body>
</html>