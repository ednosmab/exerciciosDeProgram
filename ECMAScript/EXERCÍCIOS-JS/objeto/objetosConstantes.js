const pessoa = {nome: 'Joao'}//Por ser um objeto declarado como constante, não é possível adicionar novos 
//atributos, porém é o possível alterar os valores dos atributos
pessoa.nome = 'Joao'
console.log(pessoa)

//pessoa = {end: 'rua bbb'}//Retorna erro por objeto pessoa já ter sido declarada

Object.freeze(pessoa)//Quando se congela o objeto, não é possível fazer alterações 
pessoa.nome = 'Maria'
pessoa.end = 'Rua abc'
delete pessoa.nome
console.log(pessoa)