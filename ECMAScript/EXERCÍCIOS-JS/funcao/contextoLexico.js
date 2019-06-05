const val = 'global'

function minhaFuncao() { //Como não existe a variavel a val dentro da função o sistema procura num nível mais superior
    console.log(val)
}

function exec() {
    const val = 'local'
    minhaFuncao()
}

exec()