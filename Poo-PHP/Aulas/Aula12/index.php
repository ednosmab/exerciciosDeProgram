<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Polimorfismo</title>
</head>
<body>
    <div>
        <?php
            require_once "Mamifero.php";
            require_once "Reptil.php";
            require_once "Peixe.php";
            require_once "Ave.php";

            require_once "Canguru.php";
            require_once "Cachorro.php";
            require_once "GoldFish.php";
            require_once "Tartaruga.php";
            
            
            echo "<p>";
            $m = new Mamifero();
            $m->setPeso(10);
            $m->setIdade(5);
            $m->setMembros(4);
            $m->locomover();
            $m->alimentar();
            $m->emitirSom();
            print_r($m);
            echo "</p>";

            echo "<p>";
            $p = new Peixe();
            $p->setPeso(2);
            $p->setIdade(2);
            $p->setMembros(0);
            $p->locomover();
            $p->alimentar();
            $p->emitirSom();
            $p->soltarBolhas();
            print_r($p);
            echo "</p>";

            echo "<p>";
            $a = new Ave();
            $a->setPeso(0.50);
            $a->setIdade(1);
            $a->setMembros(4);
            $a->locomover();
            $a->alimentar();
            $a->emitirSom();
            $a->fazerNinho();
            print_r($a);
            echo "</p>";

            echo "<p>";
            $r = new Reptil();
            $r->setPeso(0.50);
            $r->setIdade(1);
            $r->setMembros(0);
            $r->locomover();
            $r->alimentar();
            $r->emitirSom();
            print_r($r);
            echo "</p>";

            echo "<p>"; 
            $mm = new Mamifero();
            $mm->setPeso(5.70);
            $mm->setIdade(8);
            $mm->setMembros(4);
            $mm->locomover();
            $mm->alimentar();
            $mm->emitirSom();
            print_r($mm);
            echo "</p>";

            echo "<p>"; 
            $c = new Canguru();
            $c->setPeso(55.30);
            $c->setIdade(3);
            $c->setMembros(4);
            $c->locomover();
            $c->alimentar();
            $c->emitirSom();
            $c->usarBolsa();
            print_r($c);
            echo "</p>";

            echo "<p>"; 
            $k = new Cachorro();
            $k->setPeso(3.94);
            $k->setIdade(5);
            $k->setMembros(4);
            $k->setCorPelo("Caramelo");
            $k->locomover();
            $k->alimentar();
            $k->emitirSom();
            $k->abanarRabo();
            print_r($k);
            echo "</p>";

            echo "<p>"; 
            $g = new GoldFish();
            $g->setPeso(2);
            $g->setIdade(5);
            $g->setMembros(4);
            $g->setCorEscama("Dourado");
            $g->locomover();
            $g->alimentar();
            $g->emitirSom();
            print_r($g);
            echo "</p>";

            echo "<p>"; 
            $t = new Tartaruga();
            $t->setPeso(2);
            $t->setIdade(5);
            $t->setMembros(4);
            $t->setCorCasco("Verde Escuro");
            $t->locomover();
            $t->alimentar();
            $t->emitirSom();
            print_r($t);
            echo "</p>";



        ?>
    </div>
</body>
</html>