//Contexto runtime NODE JS

let comparaComThis = function(param) {
    console.log(this === param)
}

comparaComThis(global)

//Objeto
const obj = {}
comparaComThis = comparaComThis.bind(obj)
comparaComThis(global)
comparaComThis(obj)

//Arrow function -THIS
let comparaComThisArrow = param => console.log(this === param) //This aponta para o módulo node, nesse caso retorna false
comparaComThisArrow(global)
comparaComThisArrow(module.exports)

//Arrow function - BIND
comparaComThisArrow = comparaComThisArrow.bind(obj) //No Arrow Function, não ocorre apontamento para OBJETO
comparaComThisArrow(obj)
comparaComThisArrow(module.exports)