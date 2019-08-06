var lista = ['Arroz', 'Feijão', 'Macarrão', 'Carne', 100.00]
console.log(lista)

//Para exibir o item Arroz
console.log(lista[0])

//Para verificar quantos itens exites dentro do array
console.log(lista.length)

//Para percorrer o array
for(let i = 0, q = lista.length; i <= q; i++){
    console.log(lista[i])
}

lista.push('Queijo')
for(let i = 0, tm = lista.length; i <= tm-1; i++){//tm-1: retira o undefined que exibe no final do array
    console.log(lista[i])
}
