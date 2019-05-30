const imprimirResultado = function(nota) {
    if (nota >= 7) {
        console.log('Aprovado')
    } else {
        console.log('Reprovado')
    }
}
imprimirResultado(10)
imprimirResultado(4)
imprimirResultado('Epa!') //Js por ser fracamente tipada, ocorre uma comparação com a string e a função retorna Reprovado por entender que a string é a negativa da condição