<?php
    define("BANCO_DE_DADOS", [
        '127.0.0.1',
        'root',
        'password',
        'teste'
    ], true);
    /*
    define("BANCO_DE_DADOS", [
        '127.0.0.1',
        'root',
        'password',
        'teste'
    ], true);//Para criar a constante, que não é uma boa prática - somente para nivel de conhecimento, inserir no final o atributo TRUE, vai deixar a constante como Insensitive, podendo chamar a contante no programa digitando em maiúscula ou minúscula
    */
    print_r(BANCO_DE_DADOS);
?>