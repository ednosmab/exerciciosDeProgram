function soBoaNoticia(nota) {
    if (nota >= 7) { //Passando uma condição relacional
        console.log('Parabéns, você foi aprovado ' + nota)
    }
}
soBoaNoticia(8.1)
soBoaNoticia(6.1)

function seForVerdadeiroEuFalo(valor) {
    if (valor) { //Passando um valor, se for verdadeiro, o bloco executa
        console.log('É verdade... ' + valor)
    }
}
//Reorna falso
seForVerdadeiroEuFalo()
seForVerdadeiroEuFalo(null)
seForVerdadeiroEuFalo(undefined)
seForVerdadeiroEuFalo(NaN)
seForVerdadeiroEuFalo('')
seForVerdadeiroEuFalo(0) //Único número que retorna falso

//Retorna verdade
seForVerdadeiroEuFalo(-1)
seForVerdadeiroEuFalo(' ')
seForVerdadeiroEuFalo('?')
seForVerdadeiroEuFalo([])
seForVerdadeiroEuFalo([1, 2])
seForVerdadeiroEuFalo({})