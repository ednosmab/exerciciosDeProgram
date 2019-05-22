const prod1 = {}
prod1.nome = 'Celular Ulta Mega'
prod1.preco = 4998.90
prod1['Desconto Legal'] = '40%' //Evitar o uso de nomeação de objetos com espaços
prod1['Desconto Legal'] = 0.40 //É possível alterar os valores dentro do objeto

console.log(prod1)

//Criação de objeto utilizando a notação literal, na declaração do objeto
const prod2 = {
    nome: 'Camisa Polo',
    preco: 79.90
}
console.log(prod2)

//Criando Atributos e atribuindo Valores de forma Aninhada
const prod2_1 = {
    nome: 'Camisa Polo',
    preco: 79.90,
    obj: {
        blabla: 1,
        obj: {
            blabla: 2
        }
    }
}
console.log(prod2_1)