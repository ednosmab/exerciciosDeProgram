//Função sem retorno
function imprimirSoma(a, b) {
    console.log(a + b)
}

imprimirSoma(2, 3) //Chamando a função e executa a função
imprimirSoma(2) //Chamando a função e não executa, retorna Not a number
imprimirSoma(2, 3, 4, 5, 6, 7, 10) //Chamando a função e executando a função pegando os dois primeiros parâmetros
imprimirSoma() //Chamando a função e não executa, retorna Not a number

function soma(a, b = 0) {
    return a + b
}
console.log(soma(2, 3))

console.log(soma(2)) //Retorna o valor 2 em A, por não ter passado valor para B, porém não retorna erro, porque B já tenha sido atribuido com valor de 0