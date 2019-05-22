<?php
    //Utilizando o Select do formulário HTML
    echo "<select>";
    for ($c = date("Y"); $c >= date("Y") - 100 ; $c--){
        echo '<option value="'.$c.'">'.$c.'</option>';
    }
    echo "</select>";
?>