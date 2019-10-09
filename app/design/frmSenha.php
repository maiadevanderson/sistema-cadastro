<div class="frm_login">
<form action="app/code/class/logar.php" method="post" name="frmSalvar">
  <div class="form-group">
    <label for="usuario" class="col-sm-2 control-label">  Usuário</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="vUsuario" id="usuario" placeholder="Digite nome do usuário" aria-describedby="sizing-addon1" >
    </div>
  </div>
  <div class="form-group">
    <label for="senha" class="col-sm-2 control-label">  Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="senha" name="vSenha" placeholder="Digite sua senha">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10"></div>
	 <!-- Efetuar Logo  -->
     <input class="btn btn-success" type="button" value="Ok" onClick="ValidarCamposLogin()"/>
	 
</form>
</div>
	 
