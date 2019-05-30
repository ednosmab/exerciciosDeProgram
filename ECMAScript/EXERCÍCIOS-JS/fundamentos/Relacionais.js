const maior = 15 > 10
const menor = 10 < 15
const igual = '20' == 20
const identico = 20 === 20 //Faz uma comparação do tipo de dado e se os valores são os mesmos
console.log('Constantes: ', maior, menor, igual, identico)

console.log('01)', '1' == 1) //Operador de Igualdade
console.log('02)', '1' === 1) //Operador Identico
console.log('03)', '3' != 3) //Diferente
console.log('04)', '3' !== 3) //Testa o tipo de dado, a string 3 é diferente do número 3

console.log('05)', 3 < 2)
console.log('06)', 3 > 2)
console.log('07)', 3 <= 2)
console.log('08)', 3 >= 2)


const d1 = new Date(0)
const d2 = new Date(0)
console.log(d1, d2)
console.log('09)', d1 === d2)
console.log('10)', d1 == d2)
console.log('11)', d1.getTime() === d2.getTime())
console.log('11b)', d1.getTime() == d2.getTime())
console.log('12)', undefined == null)
console.log('13)', undefined === null)