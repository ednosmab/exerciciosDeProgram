//Destructurng em Função
function rand({ min = 0, max = 1000 }) {
    const valor = Math.random() * (max - min) + min
    return Math.floor(valor)
}

console.log(rand({ max: 50, min: 40 })) //Dessa forma criando diretamente no console
    //ou
const obj = { max: 50, min: 40 } //Criando um objeto
console.log(rand(obj)) //Passando o objeto como parâmetro para a função rand
    //ou
console.log(rand({ min: 995 })) //Como na criação da função rand foi declarado valor padrão de max p/ 1000, não tem obrigatoriedade de declarar novamente
console.log(rand({})) //Nesse caso não foi declarado o valor min e max p/ chamar a função, houve um retorno de acordo com a declaração padrão na função rand do min e max
console.log(rand()) //Retornou erro, a função precisa ser chamada contendo algum valor de objeto, mesmo ele sendo nulo