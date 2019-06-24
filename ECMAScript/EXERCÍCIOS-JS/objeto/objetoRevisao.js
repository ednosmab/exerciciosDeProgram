//Objeto é uma coleção de pares chave/valor
const produto = new Object
produto.nome = 'Cadeira'
produto['marca do produto'] = 'Generica' //inserindo colchetes para atribuir um atributo, o mesmo só 
//será manipulado se informar os colchetes tb 
produto.preco = 220

console.log(produto)
delete produto.preco
delete produto['marca do produto'] //se não informar os colchetes a execução retorna erro
console.log(produto)

//Objeto contendo um array de objetos
const carro = {
    modelo: 'A4',
    valor: 89000,
    proprietario: {
        nome: 'Raul',
        idade: 56,
        endereço:{
            logradouro: 'Rua ABC',
            numero: 123
        }
    },
    condutores: [{
        nome: 'Junior',
        idade: 19,
    },{
        nome: 'Ana',
        idade: 42
    }],
    calcularValorSeguro: function(){
        //...code
    }
}
carro.proprietario.endereço.numero = 1000
carro['proprietario']['endereço']['logradouro'] = 'Av Gigante' //os atributos por serem string pode-se 
//manipular com colchetes

delete carro.condutores
delete carro.proprietario.endereço
delete carro.calcularValorSeguro

console.log(carro)
console.log(carro.condutores)//Retorna Undefined
console.log(carro.condutores.length)//Retorna erro por não existir o atributo
