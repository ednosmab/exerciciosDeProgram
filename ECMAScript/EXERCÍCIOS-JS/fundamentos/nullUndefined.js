/*
 *Passagem por REFERÊNCIA: acontece quando um elemento recebe um tipo de dado não primitivo e esse mesmo elemento já atribuido, se *torna a atribuição a outro elemento, o que acontece é a passagem de endereço do dado armazenado no computador, logo se em qualquer *elemento o dado é alterado, desde que não seja de tipo primitivo, qualquer elemento envolvido, será atribuido a alteração, se *consultar os elementos envolvidos, o dado alteradado será exibido como o mesmo valor
 *
 *Passagem por VALOR: acontece quando o valor do elemento é do tipo primitivo, quando o valor é alterado em algum elemento, não é *alterado em todos os elementos envolvidos, somente será alterado no elemento que solicitou a alteração
 */


let valor //Não inicializada
console.log(valor)

valor = null //Ausência de valor
console.log(valor)
console.log(typeof valor)

//console.log(valor.toString()) //Retorna erro, por não haver conteúdo dentro da variável

const produto = {}
console.log(produto.preco)

produto.preco = {
    a: 7.90,
    b: 8.90
}
console.log(produto)

//Evitar o uso de Undefined
//Testando o uso de Undefined
produto.preco = undefined
console.log(!!produto.preco) //Foi questionado se existe algum valor dentro do Atributo PRECO que está dentro do objeto PRODUTO
console.log(produto.preco)

//Caso haja necessidade de elimanar atributos e seus valores utilizar o comando DELETE
delete produto.preco
console.log(produto) //Atributo PRECO foi deletado e não será exibido

produto.preco = null //Alternativa de zerar o valor do atributo
console.log(!!produto.preco) //Para verificar se existe algum valor dentro do atributo PRECO que está dentro do objeto PRODUTO
console.log(produto)
    /*Quando é atribuido um valor NULO dentro de variáveis, atributos e etc, nenhuma função associada poderá ser executada, sempre
     *retornará erro, pois o valor NULO é a representação mais correta de informar que foi atribuido nada à algum elemento, sendo NADA,*logo nada irá acontecer, nada irá retornar*/