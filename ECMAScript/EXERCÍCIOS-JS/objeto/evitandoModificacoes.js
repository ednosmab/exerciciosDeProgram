//Object.preventExtensions - evita, restringe atribuição de novos atributos
const produto = Object.preventExtensions({
    nome: 'Qualquer', preco: 1.99, tag: 'promoção'
})
console.log('Extensível:',Object.isExtensible(produto))
//Verifica se pode aumentar a quantidade de atributos e se foi utilizado a função Object.preventExtensions

produto.nome = 'Borracha'
produto.descricao = 'Borracha escolar'//Não pode atribuir atributos
console.log(produto)
produto.preco = 20.00//Pode alterar valores dos atributos
console.log(produto)
delete produto.tag //Pode ser modificado, nesse caso pode excluir atributos
console.log(produto)

//Object.seal
const pessoa = {nome: 'Juliana', idade: 18}
Object.seal(pessoa)
pessoa.nome = 'calor'//Pode modificar valores
pessoa.idade = '30'
pessoa.end = 'Rua Um'//Não pode criar novos atributos
delete pessoa.idade//Não pode excluir atributos
console.log('Selado:', Object.isSealed(pessoa), 'Extensível:', Object.isExtensible())
console.log(pessoa)

//Object.freeze = selado + valores constantes
Object.freeze(pessoa)
pessoa.nome = 'João'
pessoa.idade = '9'
pessoa.end = 'Rua 20'
console.log('Selado:', Object.isSealed(pessoa), 'Extensível:', Object.isExtensible())
delete pessoa.nome

console.log(pessoa)