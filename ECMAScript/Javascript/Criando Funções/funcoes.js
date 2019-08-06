function trocarDiv(nome, idade){
    var a = document.getElementById('area')
    var texto = prompt("Qual é o seu sobrenome?")
    a.innerHTML = nome + " " + texto + " " + idade + " anos"

}