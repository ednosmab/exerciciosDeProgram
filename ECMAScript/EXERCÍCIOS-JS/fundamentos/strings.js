const escola = "Cod3r"

console.log(escola.charAt(4)) //Retorna o caracter que se encontra no índice 4 dentro da string Cod3r
console.log(escola.charAt(5)) //Valor nulo, vazio, por não constar o índice 5 dentro da string Cod3r
console.log(escola.charCodeAt(3)) //Retorna a representação na tabela Unicode do índice 3  dentro da string Cod3r
console.log(escola.indexOf('3')) //Retorna a posição do índice onde se encontra o caracter que deseja encontrar

console.log(escola.substring(1)) //Retorna a exibição de todos os índices da string apartir do índice 1
console.log(escola.substring(0, 3)) //Retorna a exibição dos índices selecionados entre 0 à 3, porém não é exibido o índice 3

//Concatenação
console.log('Escola '.concat(escola).concat('!'))
console.log('Escola ' + escola + '!') //Forma mais fácil para concatenar

//Replace
console.log(escola.replace(3, 'e')) //Exibe na tela o caracter "e" no índice 3 da string que contém o número "3"
console.log(escola)

//Array utilizando Split
console.log('Ana, Maria, Pedro'.split(','))