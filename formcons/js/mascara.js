function mascara_cpf(){
    var cpf = document.getElementById('CPF')
    if(cpf.value.length == 3 || cpf.value.length == 7){
        cpf.value += "."
    } else if (cpf.value.length == 11){
        cpf.value += "-"
    }
}

function mascara_cep(){
    var cep = document.getElementById('CEP')
    if(cep.value.length == 5){
        cep.value += "-"
    }
}

function mascara_telefone_contato(){
    var telefone = document.getElementById('telefone_contato')
    if(telefone.value.length == 1){
        telefone.value = "(" + telefone.value;
    } else if (telefone.value.length == 3){
        telefone.value += ") ";
    } else if (telefone.value.length == 9){
        telefone.value += "-";
    }
}

function mascara_whatsapp(){
    var telefone = document.getElementById('whatsapp')
    if(telefone.value.length == 1){
        telefone.value = "(" + telefone.value;
    } else if (telefone.value.length == 3){
        telefone.value += ") ";
    } else if (telefone.value.length == 10){
        telefone.value += "-";
    }
}

function mascara_telefone_recado(){
    var telefone = document.getElementById('telefone_recado')
    if(telefone.value.length == 1){
        telefone.value = "(" + telefone.value;
    } else if (telefone.value.length == 3){
        telefone.value += ") ";
    } else if (telefone.value.length == 9){
        telefone.value += "-";
    }
}

function campo_obrigatorio(){
    <html>
        <p class="text-secondary font-weight-light h6 "><small>Campo Obrigatório*</small></p>
    </html>
}
