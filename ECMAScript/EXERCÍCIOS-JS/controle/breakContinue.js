const num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
let num2 = num
for (x in num) {
    if (x == 5) break //Sem utilizar o conjunto de chaves para abrir e fechar o bloco do if, por estar em uma condição simples
    console.log(`${x} = ${num[x]}`)
}
console.log('')
for (y in num2) {
    if (y == 5) {
        num2[5] = num2[5] + 5
        console.log(`${y} = ${num2[y]}`)
        continue
    }
    console.log(`${y} = ${num2[y]}`)
}
num2[9] = 100
console.log(typeof(num2[9]))
console.log(num2[9])