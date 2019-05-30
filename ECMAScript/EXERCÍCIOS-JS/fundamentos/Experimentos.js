let a = 123 //a Let 'a' não está no escopo global
global.b = 123 // escopo global no node é semelhante ao objeto window do navegador

this.c = 456
this.d = false
this.e = 'teste'

console.log(a)
console.log(global.b)
console.log(this.c)

//Module é semelhante ao this
console.log(module.exports.c)
console.log(module.exports === this)
console.log(module.exports)
    //mais comum fazer esse caso:
    // module.exports = {e: 456, f: false, g: 'teste'}


//criando uma variável maluca, sem var e let
abc = 3 //não faça isso em casa