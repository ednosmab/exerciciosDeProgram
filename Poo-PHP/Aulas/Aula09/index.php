<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>-->
    <title>Exercício Aula Prática 09</title>
    <style>
        h1{color: white; text-align: center;position: relative; top: 90px;}
    </style>
</head>
<body>
    <div>
        <?php
            require_once "Pessoa.php";
            require_once "Livro.php";
            $pessoa[0] = new Pessoa("Edson Garcia Jesus da Silva", 30, "m");
            $pessoa[1] = new Pessoa("Maria da Silva Santos", 20, "f");

            $livro[0] = new Livro("Minha vida de programador", "Edson Garcia", 50, $pessoa[1]);
            $livro[1] = new Livro("Minha vida de web designer", "João Carlos", 200, $pessoa[1]);
            $livro[2] = new Livro("Minha história começa aqui", "Maria Santos", 150, $pessoa[0]);
            $livro[0]->abrir();
            $livro[0]->folhear(-10);
            $livro[0]->voltarPag();
            $livro[0]->folhear(50);
            $livro[0]->avancarPag();
            foreach($livro as $chave => $value){
                echo "<pre>".$value->detalhes()."</pre>";
            }
        ?>
    </div>
</body>
</html>