//Try utilizado para tratamento de erro, juntamente com o catch

function tratarErroLancar(erro) {
    //throw new Error('...')
    //throw 10
    //throw 'mensagem'
    throw {
        nome: erro.name,
        msg: erro.message,
        date: new Date
    }
}

function imprimirNomeGritado(obj) {
    try {
        console.log(obj.name.toUpperCase() + '!!!')
    } catch (e) {
        tratarErroLancar(e)
    } finally {
        console.log('final')
    }

}

//const obj = { nome: 'Roberto' } //Passando um nome do atributo errado no objeto, retorna erro, assim podendo utilizar o Try para tratamento do erro
const obj = { name: 'Roberto' } //Passando o nome correto do atributo, utilizando o finally, mesmo não ocorrendo o erro a função finally é executada
imprimirNomeGritado(obj)