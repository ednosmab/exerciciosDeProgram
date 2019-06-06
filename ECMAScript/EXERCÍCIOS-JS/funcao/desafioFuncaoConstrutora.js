function Pessoa(nome){
    this.nome = nome

    this.falar = () =>{
        console.log(`Meu nome é ${this.nome}, estou dentro de uma função construtora`)
    }
}
const pessoa1 = new Pessoa('Edson')
pessoa1.falar()

const pessoa2 = new Pessoa('Carlos')
pessoa2.falar()

const pessoa3 = new Pessoa('André')
pessoa3.falar()