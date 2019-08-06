function addBola(){
    let cores = ['yellow', 'red', 'blue', 'black', 'pink', 'green', 'brown', 'gray']
    let cor = Math.floor(Math.random() * cores.length)

    let divBola = document.createElement("div")
    divBola.setAttribute("class", "bola")
    let p1 = Math.floor(Math.random() * 1000)
    let p2 = Math.floor(Math.random() * 400)
    let tm = Math.floor((Math.random() * 100) + 25)//o tamanho está entre 25 à 100px
    divBola.setAttribute("style", "border: 1px solid black;" + "left:" + p1 + "px; top:" + p2 + "px; background:"+ cores[cor] + "; width:" + tm + "px; height:" + tm + "px;")
    divBola.setAttribute("onclick", "estourar(this)")

    document.body.appendChild(divBola)
}
function estourar(obj){
    document.body.removeChild(obj);
}
function iniciar(){
   setInterval(addBola, 1000);
}