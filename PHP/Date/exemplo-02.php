<?php
    //$tsmp = strtotime("2001-09-11")."<br/>";//Time Stamp  de 9 de setembro de 2011, retorna a data desse período selecionado
    //$tsmp = strtotime("Now");//Retorna a data atual configurada no servidor
    //$tsmp = strtotime("+1 day");//Retorna a data do próximo dia configurado no servidor
    //$tsmp = strtotime("+1 week");//Retorna a próxima semana configurado no servidor
    $tsmp = strtotime("+1 month");//Retorna o próximo mês configurado no servidor
    echo date("l, d/m/Y", $tsmp);


?>