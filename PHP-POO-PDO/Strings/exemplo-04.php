<?php
    $frase = "A repetição é a mãe da retenção";

    $palavra = "mãe";

    $q = strpos($frase, $palavra);//Para localizar a palavra mãe dentro do texto
    var_dump($q); //Com o var_dump encontra-se a posição da palavra, que nesse caso foi 19
    $texto = substr($frase, 0, $q);//Primeiro parâmetro de onde buscar, segundo em que posição buscar, terceiro até onde buscar
    var_dump($texto);
    $texto2 = substr($frase, $q + strlen($palavra), strlen($frase));//Primeiro parâmetro de onde buscar, segundo apartir de qual posição - nesse caso soma-se a quantidade de caracteres que existe na palavra mãe e começa após o valor desse resultado, no terceiro parâmetro conta-se a quantidade total de caracteres da frase toda e retornar depois da palavra mãe até o final da frase
    var_dump($texto2);

?>