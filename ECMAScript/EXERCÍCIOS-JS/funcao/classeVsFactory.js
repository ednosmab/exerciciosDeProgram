class Pessoa{
    //Método especial
    constructor(nome){
        this.nome = nome
    }

    //Método
    falar(){
        console.log(`Meu nome é: ${this.nome}, estou dentro de uma classe`)
    }
}
const pessoa1 = new Pessoa('Edson')
pessoa1.falar()

//Função
const pessoa = nome => {
    return{
        falar: () =>  console.log(`Meu nome é: ${nome}, estou dentro de uma função`)
    }
}

const pessoa2 = pessoa('Edson')
pessoa2.falar()