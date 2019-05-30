//Trabalhando com OO (Orientação a Objeto)

function Carro(velocidadeMaxima = 200, delta = 5) {
    //atributo privado
    let velocidadeAtual = 0

    //metodo publico
    this.acelerar = function() {
        if (velocidadeAtual + delta <= velocidadeMaxima) {
            velocidadeAtual += delta
        } else {
            velocidadeAtual = velocidadeMaxima
        }
    }

    //metodo publico
    this.getVelocidadeAtual = function() {
        return velocidadeAtual
    }
}

const uno = new Carro
uno.acelerar()
console.log(uno.getVelocidadeAtual())

const ferrari = new Carro(350, 20)
    /*
    ferrari.acelerar()
    ferrari.acelerar()
    ferrari.acelerar()
    */
    //ou
    //metodo dentro de laço
for (let i = 1; i <= 3; i++) {
    ferrari.acelerar()
}

console.log('Velocidade da Ferrari: ', ferrari.getVelocidadeAtual())