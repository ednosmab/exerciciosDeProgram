//Cadeia de protótipos (prototype chain)
Object.prototype.attr0 = 'ABCD'
const avo = {attr1: 'A'}
const pai = {__proto__: avo, attr2: 'B', attr3: 'Valor do pai'}
const filho = {__proto__: pai, attr3: 'C'}//(Sombreamento, Sobreposição) attr3 já consta em seu próprio 
//escopo, ocorre uma sobreposição de valores, o pai é ignorado e o filho exibe o conteúdo do seu 
//próprio atributo
console.log(filho.attr0, filho.attr1, filho.attr2, filho.attr3)

const carro = {
    velAtual: 0,
    velMax: 200,
    acelerar(delta){
        if(this.velAtual + delta <= this.velMax){
            this.velAtual += delta
        }else{
            this.velAtual = this.velMax
        }
    },
    status(){
        return `${this.velAtual}Km/h`
    }
}

const ferrari = {
    model: 'F40',
    velMax: 324 //shadowing - sombreamento - sobreposição
}

const volvo = {
    model: 'V40',
    status(){//shadowing - sombreamento - sobreposição
        return `${this.model}: ${super.status()}`//Palavra reservada SUPER indica a busca em níveis 
        //superiores, impossibilitando utilizar a função de seu próprio escopo
    }
}

Object.setPrototypeOf(ferrari, carro)//Estabelece relação de ferrari herdando de carro
Object.setPrototypeOf(volvo, carro)
console.log(ferrari)
console.log(volvo)
volvo.acelerar(100)
console.log(volvo.status())