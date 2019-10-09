function ValidarCamposLogin(){
	
	if (document.frmSalvar.vUsuario.value==""){
		alert('Campo LOGIM vazio!');
		document.frmSalvar.vUsuario.focus();
		return false;
	}
	if (document.frmSalvar.vSenha.value==""){
		alert('Campo SENHA vazio!');
		document.frmSalvar.vSenha.focus();
		return false;
	} else {
		document.frmSalvar.submit();
			
	}
		
}






