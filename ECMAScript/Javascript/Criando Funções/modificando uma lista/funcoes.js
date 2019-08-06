function adicionarIngredientes(){
    //captura o valor digitado
    var ing = document.getElementById('ing').value
    
    //captura o conteúdo da lista no html
    var lista = document.getElementById('lista').innerHTML

    //prepara o valor para ser inserido na lista do html
    lista = lista + "<li>"+ing+"</li>";

    //Insere novos valores na lista do html
    document.getElementById('lista').innerHTML = lista
}