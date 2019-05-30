const soma = function(x, y) {
    return x + y
}

const imprimirResultado = function(a, b, operacao = soma) {
    console.log(operacao(a, b))
}

imprimirResultado(3, 4)
imprimirResultado(3, 4, soma)

//Não executa a função SOMA, e sim a função ANÔNIMA e realiza a subtração
imprimirResultado(3, 4, function(x, y) {
    return x - y
})

//Não executa a função SOMA, e sim a ARROW FUNCTION ANÔNIMA e realiza a multiplicação
imprimirResultado(3, 4, (x, y) => x * y)

//Função anônima dentro de um obj
const pessoa = {
    falar: function() {
        console.log('Opa! Eaeh, blz?! ;)')
    }
}

pessoa.falar()
    //////    OU    ////////
    //Versão mais atual
const pessoa2 = {
    falar() {
        console.log('Segundo exemplo de função em obj')
    }
}

pessoa2.falar()