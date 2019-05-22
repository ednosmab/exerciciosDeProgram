<form method="get">
    <input type="number" name="a"/>
    <input type="submit" value="Enviar"/>
</form>
<?php
    if(!empty($_GET['a'])){
        $name = (int)$_GET['a'];
        echo $name;
        var_dump($name);
    }
    if(!empty($_GET['b'])){
        $outro = $_GET['b'];
        echo $outro;
        //essa variável $outro não foi criada para uso de formulário, apenas para enviar informações diretamente da url
    }
    echo "<br/>";
    $ip = $_SERVER['REMOTE_ADDR'];
    echo $ip;
    echo "<br/>";
    $ip = $_SERVER['SCRIPT_NAME'];
    echo $ip;
    echo "<br/>";

?>  