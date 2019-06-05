//tradicional - function declaration
console.log(soma(10, 30)) //Para o caso function declaration pode fazer a chamada antes de declarar a função, o javascript primeiramente procura por funções tradicionais e depois executa as suas chamadas

function soma(a, b) { //palavra reservada function seguido do nome da função no método camel case
    return a + b
}

//funcion expression
//Para o caso de function expression, a sua chamada deve ocorrer após sua declaração
const sub = function(a, b) { //atribuindo uma função anonima dentro de uma variável ou constante
    return a - b
}

//named  function expression
//Para o caso de function expression, a sua chamada deve ocorrer após sua declaração
const multiplicar = function mult(a, b) { // auxilia no momento de debugar o programa
    return a * b
}
console.log(multiplicar(10, 10))