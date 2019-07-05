<?php
    require_once('config.php');
    echo session_save_path();//Para exibir o local onde está sendo armazenado os arquivos temporários de sessão
    echo "<br/>";

    var_dump(session_status());
    echo "<br/>";
    
    //Para retornar uma resposta amigável para verificar se as sessões estão ativadas
    //Para um maior entendimento verificar a documentação: https://www.php.net/manual/pt_BR/function.session-status.php
    switch(session_status()){
        case PHP_SESSION_DISABLED:
            echo "Sessões desabilitadas";
            break;
        case PHP_SESSION_NONE:
            echo "Sessões habilitadas, mas não iniciadas";
            break;
        case PHP_SESSION_ACTIVE:
            echo "Sessões habilitadas e iniciadas";
            break;
    }

?>