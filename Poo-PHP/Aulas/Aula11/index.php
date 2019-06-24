<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <title>Herança Parte 2</title>
</head>
<body>
    <div>
        <pre>
        <?php
            require_once "Require.php";
            //$p1 = new Pessoa();
            $p1 = new Visitante();
            $p1->setNome('Edson');
            $p1->setIdade(30);
            $p1->setSexo("m");
            print_r($p1);

            $a1 = new Aluno();
            $a1->setNome("Edson");
            $a1->setSexo($p1->getSexo());
            $a1->setIdade($p1->getIdade());
            $a1->setMatricula(111111);
            $a1->setCurso("Programação POO PHP");
            $a1->pagarMensal();
            print_r($a1);

            $b1 = new Bolsista();
            $b1->setMatricula(22222);
            $b1->setNome($p1->getNome());
            $b1->setBolsa(12.5);
            $b1->setCurso("Programação ECMAScript Javascript 6");
            $b1->setIdade($p1->getIdade());
            $b1->setSexo($p1->getSexo());
            $b1->pagarMensal();
            print_r($b1);
            
            $pro1 = new Professor();
            $pro1->setNome("Calor André");
            $pro1->setIdade(45);
            $pro1->setSexo("m");
            $pro1->setSalario("2500.00");
            $pro1->setEspecialidade("Professor POO PHP");
            $pro1->receberAumento(10);
            print_r($pro1);

            $t1 = new Tecnico();
            $t1->setNome("Rubens");
            $t1->setIdade(17);
            $t1->setSexo("m");
            $t1->setCurso("Lógica de programação");
            $t1->setMatricula(8799999);
            $t1->pagarMensal();
            print_r($t1);
        ?>
        </pre>
    </div>
</body>
</html>