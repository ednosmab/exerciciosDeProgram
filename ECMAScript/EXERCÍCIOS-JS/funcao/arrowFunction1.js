let dobro = function(a) {
    return 2 * a
}

dobro = (a) => {
    return 2 * a
}

dobro = a => 2 * a //Return está implícito

console.log(dobro(Math.PI))

let ola = function() {
    return 'Olá'
}
console.log(ola())

//Dois modos de criar arrow function
ola2 = () => 'Olá'
ola2 = _ => 'Olá'
console.log(ola2())