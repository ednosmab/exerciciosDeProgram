const resultado = nota => nota >= 7 ? 'Aprovado' : 'Reprovado' //Operador ternário, exige 3 operadores, no caso: Se a nota for maior ou igual que 7, o resultado será Aprovado, se for menor que 7 o resultado será Reprovado
console.log(resultado(7.1))
console.log(resultado(6.7))