function mascara_cnpj(){
    var cnpj = document.getElementById('CNPJ')
    if(cnpj.value.length == 2 || cnpj.value.length == 6){
        cnpj.value += "."
    } else if (cnpj.value.length == 10){
        cnpj.value += "/"
    } else if (cnpj.value.length == 15){
        cnpj.value += "-"
    }
}
