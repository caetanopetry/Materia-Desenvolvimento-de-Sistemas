function validarcampo(){
    let nome = document.getElementById("campoNome")
    if (nome.value == ""){
        document.getElementById('erro').innerHTML = "Favor preencher o campo nome"
        nome.focus()
        return false
    }


    //Validar email
    let email = document.getElementById("campoEmail")
    if (email.value == ""){
        document.getElementById('erro').innerHTML = "Campo de email inválido"
        email.focus()
        return false            
    }
    if (email.value.indexOf("@") == -1 || email.value.indexOf(".") == -1){
        document.getElementById('erro').innerHTML = "Campo de email inválido"
        email.focus()
        return false
    }

    //Validar se selecionou um interesse
    let interesse = document.getElementById("interesse")
    if (interesse.value == "-1"){
        document.getElementById('erro').innerHTML = "Favor prencher interesse"

        interesse.focus()
        return false
    }

    //Verifica se digitou uma mensagem
    let mensagem = document.getElementById("mensagem")
    if (mensagem.value == ""){
        document.getElementById('erro').innerHTML = "Favor prencher a mensagem"
        mensagem.focus()
        return false
    }

    return true

}

function ValidaCpf(strCPF){         

    var Soma;
    var Resto;
    Soma = 0;	
    var nome = document.getElementById('campoCpfs');        
	if (strCPF == "00000000000")  return false;    
	for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
	Resto = (Soma * 10) % 11;
	
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) 
	{	
	  alert("Nr cpf incorreto");		  
	  return false;
	}  
	
	Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
	
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) )
	{	
     alert("Nr cpf incorreto");    
	 return false;
	}
	
    return true;
}


function mascara_data(field){
    if (document.getElementById(field).value.length == 2){
        document.getElementById(field).value = 
        document.getElementById(field).value + "/";


    }

    if (document.getElementById(field).value.length == 5){
        document.getElementById(field).value = 
        document.getElementById(field).value + "/";

    }
}