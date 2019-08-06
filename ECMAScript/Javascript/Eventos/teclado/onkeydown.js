function t1_apertouTecla(event){//Executa após soltar a tecla
    if(event.keyCode == 13){ //Minha interação, não faz parte da aula
        alert('Deseja ir pra China?')
    }
    console.log('Apertou a tecla: '+event.keyCode)//Para verificar o código da tecla
}