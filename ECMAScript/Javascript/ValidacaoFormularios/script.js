function validar(){
    let num = document.querySelector("input#num")
    let res = document.getElementById("result")
    if(num.value.length == 2){
        alert('Tudo ok')
        return true
    }else{
        res.innerHTML = 'Valor digitado está inválido'
        return false
    }
}