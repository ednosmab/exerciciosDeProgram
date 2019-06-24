const a = 1
const b = 2
const c = 3
//antes das melhorias
const obj1 = { a: a, b: b, c: c}

//Agora
const obj2 = {a, b, c}

//antes
const nomeAttr = 'nota'
const valorAttr = 7.87
const obj3 = {}
obj3[nomeAttr] = valorAttr
console.log(obj3)

//Agora
const obj4 = {[nomeAttr]: valorAttr}
console.log(obj4)

//antes
const obj5 = {
    funcao1: function(){
        //...code
    },
    //Agora
    funcao2(){
        //...code
    }
}


