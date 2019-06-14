//Função construtora
function Pessoa(nome, idade, sexo){
    nome
    idade
    sexo
    this.getNome = () => {
        return this.nome
    }
    this.setNome = n => {
        this.nome = n
    }

    this.getIdade = () =>{
        return this.idade
    }
    this.setIdade = idade =>{
        this.idade = idade
    }

    this.getSexo = () =>{
        return this.sexo
    }
    this.setSexo = sexo =>{
        this.sexo = sexo
    }
}

const p1 = new Pessoa()
p1.setNome('edson')
console.log(p1.getNome())

const p2 = new Pessoa()
p2.setNome('carlos')
console.log(p2.getNome())

const p3 = new Pessoa()
p3.setNome('Edson Garcia')
p3.setIdade(30)
p3.setSexo('m')
console.log(p3.getNome(), p3.getIdade(), p3.getSexo())


//Função Factory
function Pessoa1(nome, idade, sexo){
    return{
        nome,
        idade,
        sexo
    }
}
const pe1 = Pessoa1('Edson G J Silva', 30, 'm')
console.log(pe1)