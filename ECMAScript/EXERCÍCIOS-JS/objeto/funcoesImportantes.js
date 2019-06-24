const pessoa = {
    nome: 'Rebeca',
    idade: 2,
    peso: 13
}

//Objeto é um conjunto de chaves e valores
console.log(Object.keys(pessoa))//a função Object.keys() retorna as 'chaves', 'indices' do objeto
console.log(Object.values(pessoa))//Object.values() retorna os valores do objeto
console.log(Object.entries(pessoa))//Retorna o cunjunto de arrays que forma o objeto

//Para percorrer as chaves com seus valores do objeto
Object.entries(pessoa).forEach(e => {
    console.log(`${e[0]}: ${e[1]}`)
});
//ou
Object.entries(pessoa).forEach(([chave, valor])=>{
    console.log(`${chave}: ${valor}`)
})

//Definindo as propriedades de uma chave/atributo
Object.defineProperty(pessoa, 'dataNascimento', {
    enumerable: true,//esse atributo permite a chave dataNascimento ser listada
    writable: false,//não permite alteração, funciona como o Freeze, congela essa entrada
    value: '01/01/2000',//esse atributo permite setar valores na chave dataNascimento
})
console.log('=============================')
pessoa.dataNascimento = '20/12/2019'
console.log(pessoa.dataNascimento)
console.log(Object.keys(pessoa))
console.log('=============================')


//Objct.assing (ECMAScript 2015)
const destino = {a: 1}
const ob1 = {b: 2}
const ob2 = {c: 3, a: 4}
//caso haja mais objetos à serem inseridos, informá-los
const objFinal = Object.assign(destino, ob1, ob2)//Irá ser inseridos os atributos dos outros objetos dentro 
//do objeto destino, e o valor do atributo 'a' será sobrescrito
Object.entries(destino).forEach(([chave, valor])=>{
    console.log(`${chave}: ${valor}`)
})
//Congelando objeto para impedir inserção de valores
Object.freeze(objFinal)
objFinal.c = 1234
console.log(objFinal)
