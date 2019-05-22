const pessoa = {
    saudacao: 'Bom dia',
    falar() {
        console.log(this.saudacao)
    }
}

pessoa.falar()

//Conflito entre paradgmas: funcional e POO (programação orientada a objetos)
const falar = pessoa.falar
falar()

//Resolução do problema com o BIND
const falarDePessoa = pessoa.falar.bind(pessoa) //Bind indica o objeto que será expressado
falarDePessoa()