//Função em JS é First-Class Object (Citizens)
//Higher-order function

//Criar de forma literal
function fun1() {}

//Armazenar em uma variável
const fun2 = function() {}

//Armazenar em um Array
const array = [function(a, b) { return a + b }, fun1, fun2]
    //para chamar a função dentro do array, indicar a posição e passar os parâmetros
console.log(array[0](2, 3))

//Armazenar em um Objeto
const obj = {}
obj.falar = function() { return 'Opa' }
console.log(obj.falar())

//Passar função como parâmetro para outra função
function run(fun) {
    fun()
}
run(function() { console.log('Executando...') })
    //////////////////////
function teste(fun) {
    console.log(fun)
}
const func = function(a, b) {
    return a + b
}
teste(func(10, 20))

//Uma função pode retornar/conter uma função
function soma(a, b) {
    return function(c) {
        console.log(a + b + c)
    }
}
//Primeira chamada
console.log('Primeira chamada com função que retorna outra função')
soma(2, 3)(5)
    //Segunda chamada
console.log('Segunda chamada com função que retorna outra função')
const cincoMais = soma(10, 20)
cincoMais(10)