//O grande problema no js é que todas as funções carregam primeiro, em seguida as variáveis, que 
//justamente é necessário ocorrer o processo inverso
function carregar1(){
    //No dom do body tive que ordernar as funções para que ambas fossem executadas
    //Em primeiro foi carregar() em seguida carregar1(), separadas por vírgula
    let nome = prompt('Qual é o seu nome?')

    let result = document.querySelector('#aqui')
    result.innerHTML = document.write(`<p>Meu nome é: ${nome}</p>`)
}
function carregar(){
    //Foi necessário criar uma função onload pra carregar as variáveis antes da função while
    let y = 0
    let res = document.querySelector('#res')
    res.innerHTML = document.write('Agora funciona essa porra<br/>')
    while(y < 10){
        res.innerHTML = document.write(`A variável Y agora é: ${y}<br/>`)
        y++
    }

    for(let x = 0; x < 10; x++){
        res.innerHTML = document.write(`<br/>Valor de x é: ${x}`)
    }
}
