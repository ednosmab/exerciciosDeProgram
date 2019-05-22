function soma() { //Nessa Função não exite a obrigatoriedade de declacar parametros que serão recebidos pela função
    let soma = 0 //Sempre retorna zero se não foi incrementado nenhum outro valor à função
    for (i in arguments) { //Arguments é um array interno do js, que armazena valores
        soma += arguments[i]
    }
    return soma
}

console.log(soma())
console.log(soma(1))
console.log(soma(1.1, 2.2, 3.3))
console.log(soma((5 * 5), 10))
console.log(soma(1.1, 2.2, " Teste"))
console.log(soma('a', 'b', 'c'))