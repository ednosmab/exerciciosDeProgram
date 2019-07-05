<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../../estudo_php/_css/estilo.css"/>
        <title>Advinhe a Cor</title>
    </head>
    <body>
        <div>
           <?php
                if (isset($_COOKIE["visitas"])){
                    setcookie("visitas",$_COOKIE["visitas"] + 1,(time()+ 3600));
                    $cont = $_COOKIE["visitas"];
                }else{
                    $cont = setcookie( "visitas", 1);
                    echo "Boa sorte";
                }
                if (isset($_COOKIE["visitas"])){
                if(($cont >= 1)&&($cont <= 1)){
                    $tot = 3;
                    echo "Você tem ".$tot." tentativas";
                }elseif(($cont >= 2)&&($cont <= 2)){
                    $tot = 2;
                    echo "Você tem ".$tot." tentativas";
                }elseif($cont == 3){
                    echo "Última tentativa";
                }
                }
            ?>
            <p>Tente advinhar que cor eu sou: 
                <p>1 = Rosa 2 = Vermelho 3 = Amarelo ou 4 = Azul</p>
            </p>
            <form method="get" action="cor.php">
                <fieldset style="width:200px;margin:auto;margin-top:30px;">
                   Cor:
                    <select name="cor" style="width:50px;">
                        <?php
                            for($c=1;$c<=4;$c++){
                                echo "<option value='$c'>$c</option>";
                            }
                        ?>    
                    </select>
                    <input type="submit" value="OK" class="botao" style="margin-left:20px;"/>
                </fieldset>
            </form>
            
        </div>
    </body>
</html>