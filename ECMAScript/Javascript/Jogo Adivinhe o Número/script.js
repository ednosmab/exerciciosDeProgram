function verificar(){
    let n1 = Number(document.getElementById('n1').innerHTML)//Nesse caso pega o valor dentro da div
    let n2 = Number(document.getElementById('n2').value)
    if(n1 == n2){
        alert('Parabéns você venceu')
    }else{
        alert('Mais sorte na próxima ;)')
    }
    resetar()
    
}
function resetar(){
    document.getElementById('n2').value = ''
    let r = Math.floor(Math.random() * 100)
    document.getElementById('n1').innerHTML = r
}