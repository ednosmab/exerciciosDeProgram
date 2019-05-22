//Novo recurso do ES2015
//Destructuring Em Objeto
const pessoa = {
    nome: 'Ana',
    idade: 15,
    endereco: {
        logradouro: 'Rua ABC',
        numero: 1000
    },
    bemHumorada: 'Não',
}

const { nome, idade } = pessoa //Utilizando Destructuring, extrair os atributos nome e idade do objeto pessoa
console.log(nome, idade)
console.log(pessoa) //O objeto não foi alterado, não houve exclusão dos atributos no objeto pessoa

const { nome: n, idade: i } = pessoa //Utilizando Destructuring ainda é possível realizar a tribuição de novas variáveis passando os valores dos atributos que serão extraídos do objeto
console.log(n, i)


const { sobrenome, bemHumorada = null, estadoCivil = null } = pessoa //Pode ocorrer de chamar algum atributo que não exista no objeto pessoa, caso não exista irá retornar Undefined, entretanto pode-se atribuir um valor padrão, porém se existir um atributo e mesmo atribuindo um valor padrão, será retornado o valor de sua atribuição no objeto e não do Destructuing
console.log(sobrenome, bemHumorada, estadoCivil)

const { endereco: { logradouro, numero, cep } } = pessoa //Acessando com o Destructuring um atributo aninhado
console.log(logradouro, numero, cep)