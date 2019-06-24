const ferrari = {
    modelo: 'F40',
    velMax: 324
}

const volvo = {
    modelo: 'V40',
    velMax: 200
}

console.log(ferrari.__proto__)//Seu pai é um objeto
console.log(ferrari.__proto__ === Object.prototype)
console.log(volvo.__proto__)
console.log(volvo.__proto__ === Object.prototype)
console.log(Object.prototype.__proto__)//Object.prototype está no mais alto nível da hierarquia

function MeuObjeto(){}
console.log(typeof Object, typeof MeuObjeto)//Ambos são funções
console.log(Object.prototype, MeuObjeto.prototype)//Object.prototype, MeuObjeto.prototype ambos são objetos