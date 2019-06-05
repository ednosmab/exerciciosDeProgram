//Criando objeto sem o uso de Factory
const prod1 = {
    nome: '....',
    preco: 45
}
const prod2 = {
    nome: '....',
    preco: 50
}

//Factory retorna um objeto
//Factory simples
function criarPessoa(){
    return {
        nome: 'Ana',
        sobrenome: 'Silva'
    }
}
console.log(criarPessoa())

function novoProduto(nome, id, valor){//Passagem por parametros
    return {
        nome: nome,
        identificador: id,
        preco: valor,
        desconto: 15,
        precoComDesconto: valor - (15 / 100 * valor) //Aplicando desconto no valor do produto
    }
}
let camisa = novoProduto('Camisa', 10, 150)
console.log(camisa)