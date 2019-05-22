//Destructuring em Array 2
function rand([min = 0, max = 1000]) {
    if (min > max)[min, max] = [max, min] //Nesse caso se o valor de min for maior que max, max recebe min e min recebe max
    const valor = Math.random() * (max - min) + min
    return Math.floor(valor)
}

console.log(rand([50, 40]))
console.log(rand([992]))
console.log(rand([, 10]))
console.log(rand([]))
console.log(rand())