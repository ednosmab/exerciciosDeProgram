function t4_apertouTecla(event){
    if(event.shiftKey == true && event.keyCode == 69){
        console.log('Digitado Shift + e')
    }else if(event.ctrlKey == true && event.keyCode == 66){
        console.log('Digitado Ctrl + e')
    }else if(event.altKey == true && event.keyCode == 66){
        console.log('Digitado Alt + e')
    }
}