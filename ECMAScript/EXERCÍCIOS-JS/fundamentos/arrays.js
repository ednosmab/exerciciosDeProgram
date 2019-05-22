//Criação de array utilizando a notaçao literal
const valores = [7.7, 8.9, 6.3, 9.2] //Forma mais literal para criação de Arrays
console.log(valores[0], valores[3])
console.log(valores[4]) //Não gera erro, mas exibe como Indefinido
valores[4] = 10
console.log(valores) //Para exibir os elementos do array

console.log(valores.length) //Exibe a quantidade de elementos do array

//Para incluir novos valores no array
valores.push({ id: 3 }, false, null, 'teste')
console.log(valores)
console.log(valores.length)

//Para excluir valores no array
console.log(valores)
console.log(valores.pop()) //Para excluir o último valor no array
console.log(valores)
delete valores[0] //Com o comando Delete e informar a posição, o elemento do array é deletado, excluído
console.log(valores)

console.log(typeof valores)