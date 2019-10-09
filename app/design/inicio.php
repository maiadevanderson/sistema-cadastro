<?php
// session_start inicia a sessão
session_start();
/* Define o limite de tempo do cache em 30 minutos */ 
session_cache_expire(1); 
if(isset($_SESSION['usuario'])==""){
 echo "<script>window.location='../../index.php'</script>"; 

 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php ini_set( 'default_charset', 'utf-8');?>
<head>
<title>SISTEMA SISCS</title>
</head>

<body >

<?php
// Abaixo chamaremos através do include a classe que conecta ao banco de dados MySQL.
include("../../app/code/class/conexao.php");
// Instanciamos o Objeto "conexao".
$mysql = new conexao;
?>
<div id="main_content"> 
        <div id="menu_tab">
            <ul class="menu">
              <!-- Menu do Usuarios-->
               <li><a href="#" class="nav4">Cadastros</a>
               	<ul> 
                 <li><a href="inicio.php?menu=frmUsuarioLista">Usuário(s)</a></li> 
                 <li><a href="inicio.php?menu=frmAlunoLista">Aluno(s)</a></li>
                 </ul> 
               <li class="divider"></li>
                  <li><a href="../../app/code/class/sair.php" class="nav3">Sair</a></li>
               <li class="divider"></li>
               </ul>
       <div class="right_menu_corner"></div>
    </div><!-- end of menu tab -->
</div>
</body>
</html>