<?php
// session_start inicia a sessão
session_start();
?>
<?php
class Usuario{
	
  public $idUsu;
  public $nomeUsu;
  public $loginUsu;
  public $senhaUsu;
 
 
  public function validarAcesso(){
	  
	$sql = "select * from usuarios where login ='".$this->loginUsu."' and senha ='".$this->senhaUsu."'";	
	
	include("conexao.php");
	$mysql = new conexao;
	$cont = mysql_num_rows($mysql->sql_query($sql));
    echo $sql."<br>";
	echo $cont."<br>";
	
	
	if ($cont==0){
	  echo "<script>alert('Usuário ou Senha Incoreta! ')</script>";		
	  echo "<script>window.location='../../../index.php'</script>";
	} else { 
	  $_SESSION['usuario']=$this->loginUsu;
	  echo "<script>alert('Bem vindo $this->loginUsu')</script>";		
	  //echo "<script>window.location='../../design/inicio.php'</script>";
	}
	  
  } 
  public function Inserir(){
	  
  }
  public function Alterar(){
	  
  }
  public function Excluir(){
	  
  }
  public function Consultar(){
	  
  }
  
 }

 ?>