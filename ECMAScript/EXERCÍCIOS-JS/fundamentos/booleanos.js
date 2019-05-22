let isAtivo = false
console.log(isAtivo)

isAtivo = true
console.log(isAtivo)

//Utilizando operador lógico NÃO que é representado pelo sinal de "!"
isAtivo = 1
console.log(!!isAtivo) //Ulizando duas vezes !! estou negando a negativa, transformando-a em positivo

//Posições verdadeiros
console.log(!!3)
console.log(!!-1)
console.log(!!' ')
console.log(!![])
console.log(!!{})
console.log(!!Infinity)
console.log(!!(isAtivo = true))

//Posições negativos
console.log(!!0)
console.log(!!'')
console.log(!!null)
console.log(!!NaN)
console.log(!!undefined)
console.log(!!(isAtivo = false))

//Expressão Lógica
console.log(!!('' || null || 0 || 'epa' || 123))

let nome = ''
console.log(nome || 'Desconhecido') //Se a variável NOME estiver vazia, o texto DESCONHECIDO será exibido na tela