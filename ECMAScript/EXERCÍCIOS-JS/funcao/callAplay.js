function getPreco(imposto = 0, moeda = 'R$'){
    return `${moeda} ${this.preco * (1 - this.desc) * (1 + imposto)}`
}
const produto = {
    nome: 'Notebook',
    preco: 4589,
    desc:0.15,
    getPreco //Neste caso o atributo está direcionando para a função getPreco()
}

console.log(getPreco())//Retorna NaN por não estar sendo mensionado dentro do produto

//Uma forma de contornar isso é deixar as variávie preco e produto no escopo global
global.preco = 20
global.desc = 0.1
console.log(getPreco())

//Outra forma de resolver o problema chamar afunção dentro do objeto
console.log(produto.getPreco())

//Outra forma de chamar a função de:
//CALL
const carro = {preco: 49990, desc: 0.20}
console.log(getPreco.call(carro, 0.17, '$'))//No call a passgem dos parametros da função é diretamente
//Aplay
console.log(getPreco.apply(carro, [0.17, '$']))//No aplay a passgem dos parametros da função deve estar dentro de um array
