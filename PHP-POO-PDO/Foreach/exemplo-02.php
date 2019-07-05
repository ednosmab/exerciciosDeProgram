<form>
    <input type="text" name="nome"/>
    <input type="date" name="nascimento"/>
    <input type="submit" name="OK"/>
</form>
<?php
    if (isset($_GET)){
        foreach($_GET as $chave => $value){
            echo "Nome do campo: ".$chave."<br/>";
            echo "Valor do campo:".$value;
            echo "<br/>";
        }
    }
?>