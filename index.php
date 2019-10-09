<?php
// session_start inicia a sessão
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<head>
        <title>Título da página</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SISTEMA SISAC</title>

<link type="text/css" rel="stylesheet" href="skin/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="skin/style.css" />
</head>
<script type="text/javascript" src="js/valid/scripts.js"> </script>
<body >
<!-- Divisão Cabeçalho -->
<div class="head">
Cabeça <br>

<?php
  // Abaixo chamaremos através do include a classe que conecta ao banco de dados MySQL.
  include("app/code/class/conexao.php");
  // Instanciamos o Objeto "conexao".
  $mysql = new conexao;
  // echo "Você está conectado ao banco de dados !"

  if (isset ($_SESSION['usuario'])==""){
  include ("app/design/frmSenha.php");
  } else {
    echo "<script>window.location='app/design/inicio.php'</script>"; 
  }
?>
</div>
<!-- Divisão Conteudo -->
<div class="content"> Conteúdo</div>

<!-- Divisão Rodapé -->
<div class="footer"> Rodapé</div>

</body>
</html>