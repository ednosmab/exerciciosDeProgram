function MeuObjeto(){}
console.log(MeuObjeto.prototype)

const obj1 = new MeuObjeto
const obj2 = new MeuObjeto
console.log(obj1.__proto__ === obj2.__proto__)//Verifica se está apontando para a mesma construtora, classe que o objeto está apontando
console.log(MeuObjeto.prototype === obj1.__proto__)//Verifica se ambos são do mesmo prototipo

MeuObjeto.prototype.nome = '--Anônimo--'
MeuObjeto.prototype.falar = function(){
    console.log(`Bom dia! Meu nome é ${this.nome}`)
}
const obj3 = new MeuObjeto
obj3.nome = 'Edson'
obj3.falar()
obj1.falar()
obj2.nome = 'Rafael'
obj2.falar()

const obj4 = {}
obj4.__proto__ = MeuObjeto.prototype
for(let key in obj4){//Para verificar quais serão os atributos que obj4 estará trabalhando
    console.log(key)
}
obj4.nome = 'Andre'
obj4.falar()

//Resumindo a loucura... kkkk (Texto do professo) ;)
console.log((new MeuObjeto).__proto__ === MeuObjeto.prototype)
//Intancia a classe construtora de forma literal é a mesma coisa que linkar um objeto com referência 
//sendo que o mesmo foi criado de forma literal
console.log(MeuObjeto.__proto__ === Function.prototype)//dentro da função contrutora também existe o atributo __proto__ e que
//aponta para function.prototype
console.log(Function.prototype.__proto__  === Object.prototype)//Para informar uma curiosida: Tudo está
//interligado
console.log(Object.prototype.__proto__ === null)//Não existe nada acima de Object.prototype