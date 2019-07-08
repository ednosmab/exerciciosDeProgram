//Ambos são do tipo função
console.log(typeof String)
console.log(typeof Array)
console.log(typeof Object)

//Ambos tem o atributo prototype
//Não existe na api essa funcionalidade, porém é possível atribuir a uma função
String.prototype.reverse = function (){
    return this.split('').reverse().join('')
}
//Utilizando as novas funcionalidades atribuidas ao prototype
console.log('Escola Cod3r'.reverse())

Array.prototype.first = function(){
    return this[0]
}
console.log([1,2,3,4,5].first())
console.log(['a','b','c','d'].first())
//Fazendo um join das duas funções criadas
console.log([1,2,3,4,5].reverse().first())

//Não sobrepor funcinalidades existentes na api do js
    //Pode ocorrer efeitos indesejados
String.prototype.toString = function(){
    return 'Escola local'
}
console.log('Treinamento da Ecod3r'.reverse())//Não utilizou a string literal, mas sim da função
// sobreescrita toString

