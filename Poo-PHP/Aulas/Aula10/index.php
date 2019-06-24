<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Herança Parte 1</title>
</head>
<body>
    <div>
        <?php
            require_once "Pessoa.php";
            require_once "Aluno.php";
            require_once "Professor.php";
            require_once "Funcionario.php";

            $p1 = new Pessoa("André", "20", "M");//Utilizando método construtor
            $p2 = new Aluno("Carlos", "25", "M");//Utilizando método construtor
            $p3 = new Professor("Maria", "45", "F");//Utilizando método construtor
            $p4 = new Funcionario("José Carlos", "50", "M");//Utilizando método construtor
            
            $p2->setCurso("Programação");
            $p3->setSalario(2500.75);
            $p4->setSetor("Estoque");
            $p4->setTrabalhando(true);
            $p2->cancelarMatr();
            $p3->receberSal(500);
            
            //var_dump($p2, $p3, $p4);

            
            $p = array($p1, $p2, $p3, $p4);
            print_r($p);

        ?>
    </div>
</body>
</html>