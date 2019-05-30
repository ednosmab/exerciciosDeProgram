const notas = [7.7, 6.5, 5.2, 8.9, 3.6, 7.1, 9.0]

//Sem callback
const notasBaixas1 = []
for (let i in notas) {
    if (notas[i] < 7) {
        notasBaixas1.push(notas[i])
    }
}

console.log(notasBaixas1.sort()) //Sort ordena array por ordem crescente


//Com Callback 1 
const notasBaixas2 = notas.filter(function(nota) { //Utilizando função anônima
    return nota < 7
})
console.log(notasBaixas2)

//Com Callback 2, agora com uso de Arrow function
const notasBaixas3 = notas.filter(nota => nota < 7) //nota representa a passagem de cada elemento dentro do array notas[]
console.log(notasBaixas3)

//Com Callback 3, reutilizando função callback
const notasMenorQue7 = nota => nota < 7
const notasBaixas4 = notas.filter(notasMenorQue7) //notasMenorQue7 basicamente é uma arrow function nomeada
console.log(notasBaixas4)