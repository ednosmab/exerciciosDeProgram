function carregar(){
    let x = prompt('Informe um número')
var res = document.querySelector('#res')
switch(x){
    case "0":
        res.innerHTML = 'X vale 0'
        break
    case "1":
        res.innerHTML = 'X vale 1'
        break
    case "2":
        res.innerHTML = 'X vale 2'
        break
    case "3":
        res.innerHTML = 'X vale 3'
        break
    case "4":
        res.innerHTML = 'X vale 4'
        break
    default:
        res.innerHTML = 'X não é válido'
        break
}
}