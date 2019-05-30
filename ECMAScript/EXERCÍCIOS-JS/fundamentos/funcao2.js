//Armazenando uma função em uma variável
const imprimirSoma = function(a, b) {
    console.log(a + b)
}

imprimirSoma(10, 20)


//Armazenando uma função Arrow em uma variável
const soma = (a, b) => {
    return a + b
}
console.log(soma(2, 3))

//Retorno implícito de Arrow Function, de forma reduzida
const subtracao = (a, b) => a - b
console.log(subtracao(20, 10))

//Reduzindo ainda mais a Arrow Function
const imprimir2 = a => console.log(a)
imprimir2('Que legal!!!')