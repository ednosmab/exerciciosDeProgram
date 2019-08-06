let nome = 'Edson'
if(nome == 'Edson'){
    console.log('Esse é meu nome')
}else{
    console.log('Esse não é o meu nome')
}

function testeVerificardor(){
    let x = prompt('Diga um número: ')
    if(typeof(x) == Number){
        alert(`Você digitou o número ${x}`)
    }else{
        alert('Você não digitou um número')
    }
}