<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="../../estudo_php/_css/estilo.css"/>
<div>
    <?php
        
        $c = isset($_GET["cor"])?$_GET["cor"]:"Opção Inválida";   
        $num = rand(1,4);
        include("funcoes.php");
        $nome_cor = opcao_cor($c);
        $minha_cor = opcao_cor($num);
        $minha_cor = substr($minha_cor,2);
        if($nome_cor == $num){
            resetar();
            echo "Parabéns você acertou!!! <br/>A minha cor é ".substr($nome_cor,2)."<p>Deseja jogar novamente?
            <a href='escolha_cor.php'><input type='button' value='Sim' class='botao' onclick='resetar()'/></a>
            <a href='fim_jogo.html'><input type='button' value='Não' class='botao'></a>
            </p>";
        }else{
            echo "Que pena você não acertou a minha cor que é $minha_cor!! <br/>Mais sorte na próxima kkk ;)
            <p>Gostaria de tentar novamente?</p>
                <p>
                    <a href='escolha_cor.php'><input type='button' value='Sim' class='botao'/></a>
                    <a href='fim_jogo.html'><input type='button' value='Não' class='botao'/></a>
                </p>
            ";
        }
    ?>
</div>