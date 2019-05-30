//Operações estranhas em programação

//Operação matemática que retorna um valor infinito, em outras linguagens retorna erro
console.log(7 / 0)

//Operções envolvendo strings numéricas com números
console.log("10" / 2)
console.log('3' + 2) //Para este caso não ocorre a soma entre os números, pelo fato do operador soma concatecar strings

//No Javascript não ocorre replicação, como em outras linguagens como o Python
console.log("Show!" * 2) //Resulta Nan = Number not a number

/*No Javascript por conta de uma especificação IEEE ele não exibe um resultado 100% correto 
entre algumas operações matemáticas com ponto flutuante, por conta da lentidão para realizar o cálculo*/
console.log(0.1 + 0.7)

//Não é possivel realizar essa exibição, por retornar erro, mas é possível realizar de outras maneiras
//console.log(10. toString())
console.log((10.345).toFixed(2))