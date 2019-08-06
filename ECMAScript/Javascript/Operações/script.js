function somar(){
    let num1 = Number(document.querySelector('#camp1').value)
    let num2 = Number(document.querySelector('#camp2').value)
    let result = document.querySelector('#result')
    let soma = num1 + num2
    result.innerHTML = soma
}
function sub(){
    let num1 = Number(document.querySelector('#camp1').value)
    let num2 = Number(document.querySelector('#camp2').value)
    let result = document.querySelector('#result')
    let sub = num1 - num2
    result.innerHTML = sub
}
function mult(){
    let num1 = Number(document.querySelector('#camp1').value)
    let num2 = Number(document.querySelector('#camp2').value)
    let result = document.querySelector('#result')
    let mult = num1 * num2
    result.innerHTML = mult
}
function div(){
    let num1 = Number(document.querySelector('#camp1').value)
    let num2 = Number(document.querySelector('#camp2').value)
    let result = document.querySelector('#result')
    let div = num1 / num2
    result.innerHTML = div
}