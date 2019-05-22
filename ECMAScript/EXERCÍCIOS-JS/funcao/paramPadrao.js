//estrategia 1 p/ gerar valor padrão
function soma1(a, b, c) { //estrategia muito utilizada
    a = a || 1 //|| representa OU, OR
    b = b || 1
    c = c || 1
    return a + b + c
}
//Retorno de resultado como parâmetros válidos
console.log(soma1())
console.log(soma1(3))
console.log(soma1(1, 2, 3))
console.log(soma1(-1, -1, -1))

//Retorno de resultado com parâmetros inválidos
//A função reconhece esses parâmetros sendo como falsos 
//e retorna o resultado do valor padrão definido na função
console.log(soma1(0, 0, 0))
console.log(soma1(null, null, null))
console.log(soma1(undefined, undefined, undefined))

/////////////////
//estrategia 2, 3 e 4 para gerar valor padrão
function soma2(a, b, c) {
    a = a !== undefined ? a : 1
    b = 1 in arguments ? b : 1
    c = isNaN(c) ? 1 : c
    return a + b + c
}
console.log(soma2(), soma2(3), soma2(1, 2, 3), soma2(0, 0, 0))
console.log()
    /////////////////
    //valor padrao do es2015
function soma3(a = 1, b = 1, c = 1) { //estrategia nova
    return a + b + c
}
console.log(soma3(), soma3(3), soma3(1, 2, 3), soma3(0, 0, 0))