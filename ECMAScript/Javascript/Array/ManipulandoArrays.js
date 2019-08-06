var lista = ['Arroz', 'Feijão', 'Macarrão', 'Carne', 100.00]
//Comandos executam em console do navegador
lista.indexOf("Feijão")
console.log(lista.indexOf("Feijão"))

lista.join(",")
console.log(lista.join("; "))

lista.pop()//Remove o último item da lista
console.log(lista)

lista.shift()//Remove o primeiro item da lista
console.log(lista)

//lista.push()  //Adiciona um novo item
lista.push('Queijo')
console.log(lista)