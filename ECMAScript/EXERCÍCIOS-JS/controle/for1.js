let contador = 1
    /*
    while (contador <= 100) {
        if (contador % 2 == 0) {
            console.log(contador)
        }

        contador++
    }*/
while (contador <= 10) {
    console.log(`Contador = ${contador}`)
    contador++
}

//Criando um contador com uso de FOR
for (let i = 0; i <= 10; i++) {
    console.log(`contador for = ${i}`)
}

//Varrendo um array
const notas = [6.7, 7.4, 9.8, 8.1, 7.7]
    //notas é um array, notas.length é a forma de medir o comprimento do array
for (let i = 0; i < notas.length; i++) {
    console.log(`Nota na posição ${i} = ${notas[i]}`)
}