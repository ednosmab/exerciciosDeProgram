const imprimirResultado = function(nota) {
    switch (Math.floor(nota)) { //Math.floor arredonda o número para baixo
        case 10:
        case 9:
            console.log('Quadro de Honra')
            break
            //k  //case 8: case 7: //Outra forma de agrupar um conjunto de CASE
        case 8:
        case 7:
            console.log('Aprovado')
            break
        case 6:
        case 5:
        case 4:
            console.log('Recuperação')
            break
        case 3:
        case 2:
        case 1:
            console.log('Reprovado')
            break
        default:
            console.log('Nota inválida')
    }
}
imprimirResultado(10.9)
imprimirResultado(9.1)
imprimirResultado(8.9)
imprimirResultado(7.1)
imprimirResultado(6)
imprimirResultado(5)
imprimirResultado(4)
imprimirResultado(3.9)
imprimirResultado(1.0)
imprimirResultado('A')