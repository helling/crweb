function valida_mail(mail){
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(mail);
}
function valida_largo(text){
	if(text.lenght > 3){
		alert("debeser mayor de 3 caracteres");
	}else if(text.length <20){
		alert("debe ser menor de 20 caracteres");
	}else{
		alert("no debe estar vacio");
	}
}