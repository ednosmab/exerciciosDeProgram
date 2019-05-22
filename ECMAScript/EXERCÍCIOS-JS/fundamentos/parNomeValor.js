// Par nome/valor
const saudacao = 'Opa' //Contexto léxico 1

function exec() {
    const saudacao = 'Faaaalaa' //Contexto léxico 2
    return saudacao
}

//Objetos são grupos aninhados de pares nome/valor

const cliente = {
    nome: 'Pedro',
    idade: 32,
    peso: 86.5,
    endereço: {
        logradouro: 'Rua Muito Legal',
        numero: 123
    }
}
console.log(saudacao) //Constante
console.log(exec()) //Funçao
console.log(cliente) //Objeto