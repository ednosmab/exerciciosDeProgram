const pai = {nome: 'Pedro', corCabelo: 'preto'}
const filha1 = Object.create(pai)
filha1.nome = 'Ana'
console.log(filha1.corCabelo)

const filha2 = Object.create(pai, {
    nome: {value: 'Bia', writable: false, enumerable: true}
})
console.log(filha2.nome)
console.log(`${filha2.nome} tem cabelo ${filha2.corCabelo}`)

console.log(Object.keys(filha1))
console.log(Object.keys(filha2))

console.log('--------------------')
for(let key in filha2){//for in exibe os atributos do objeto filha2, mesmo havendo uma herança com pai
    console.log(key)
}

console.log('--------------------')
for(let key in filha2){
    filha2.hasOwnProperty(key)?//retorna true se haver um atributo proprio
        console.log(key): console.log(`Atributo por herança: ${key}`)
}