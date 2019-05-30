//Evento Callback - Quando algo acontecer execute determinada função e registre
const fabricantes = ["Mercedes", "Audi", "BMW"]

function imprimir(nome, indice) {
    console.log(`${indice + 1}. ${nome}`) //indice + 1: representa a primeira posição do array que é zero passa a ser 1
}

fabricantes.forEach(imprimir)
fabricantes.forEach(function(a) { //o parametro "a" representa o valor e não o índice do array
    console.log(a)
})
fabricantes.forEach(a => console.log(a)) //Executando em Arrow function com return implícito