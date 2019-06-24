const sequencia = {
    _valor: 1,//convenção que informa p/ outros devs que variável deve ser declarada internamente na funçao
    get valor(){//nada impede a atribuição diretamente no atributo, não existe encapsulamento forte no JS
        return this._valor++
    },
    set valor(valor){
        if(valor > this._valor){
            this._valor = valor
        }
    }
}
console.log(sequencia.valor, sequencia.valor)//JS entende que está chamando o get valor
sequencia.valor = 1000//aceita o parametro para o set valor
console.log(sequencia.valor, sequencia.valor)//exibe e incrementa de acordo com a regra aplicada
sequencia.valor = 1000//não aceita inserir um valor menor que já está setado 
console.log(sequencia.valor, sequencia.valor)//vai exibr o resultado do get valor e atribuindo a sua regra de incremento
sequencia._valor = 100
console.log(sequencia._valor)//Permite a atribuição diretamente no atributo