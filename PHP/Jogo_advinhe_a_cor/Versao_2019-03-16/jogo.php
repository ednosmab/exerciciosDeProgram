<?php
    session_start();
    if((!isset($_SESSION['tot']))||(!isset($_SESSION['chances']))){
        $_SESSION['tot'] = 0;
        $_SESSION['chances'] = 3;
    }
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
                <?php 
                if($_SESSION['chances'] <> false){?>
                <header>
                    <h1>Jogo de adivinhação!</h1>
                    <h3>Tente adivinhar a COR</h3>
                </header>
                <p>
                    Entre as cores Amarelo, Azul, Roxo, Rosa e Vermelho, estará a COR correta.
                </p>
                <p>
                    <?php
                        if($_SESSION['chances'] == 3){echo "<p>Você terá 3 chances para adivinhar.<br/>Boa sorte e se divirta!!</p>";}
                        elseif($_SESSION['chances'] == 2){$_SESSION['chances']--; echo "<p>Você ainda tem 2 chances para adivinhar.<br/>Boa sorte e se divirta!!</p>";}
                        else{echo "<h3>Cuidado última chance</h3>";}
                    ?>
                                       
                </p>
                <form method="get" action="jogo.php">
                    <label for="cor">Escolha a COR</label>
                    <select id="cor" name="cor">
                        <option value="1">Amarelo</option>
                        <option value="2">Azul</option>
                        <option value="3">Roxo</option>
                        <option value="4">Rosa</option>
                        <option value="5">Vermelho</option>
                    </select>
                    <input type="submit" value="Enviar"/>
                </form>
                <?php 
                    }elseif($_SESSION['chances'] == 0){
                        header("location: fim_jogo.php");
                    }
                ?>
                <?php
                    $cor = isset($_GET["cor"])?$_GET["cor"]:"";
                    $cores = array(1 => "Amarelo", 2 => "Azul", 3 => "Roxo", 4 => "Rosa", 5 => "Vermelho");
                    //echo $cor." Cor recebida <br/>";
                    //$es = rand(1,5);
                    $es = 2;
                    //echo "Cor aleatória $es <br/>";
                    if($cor > 0){
                        if($cor == $es){
                            echo "<p><h2>Parabéns você acertou</h2>";
                            $_SESSION['tot'] += 10;
                            foreach($cores as $chaves => $valor){
                                if($es == $chaves){
                                    echo "A cor que você escolheu foi: $valor é igual a cor do jogo: $valor</p>";
                                }
                            }
                            echo "<p>Placar atual: ".$_SESSION['tot']."</p>";
                            echo "<p>Você deseja jogar novamente?</p>
                                <a href='jogo.php'><input type='button' value='Sim'/></a>
                                <a href='fim_jogo.php'><input type='button' value='Não'/></a>"; 
                        }
                    }
                ?>
            </div>
        </main>
    </body>
</html>