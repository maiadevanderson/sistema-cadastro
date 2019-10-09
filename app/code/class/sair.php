<?php
// session_start inicia a sessão
session_start();
$_SESSION['usuario']="";
unset ($_SESSION['usuario']);
?>
<script language='JavaScript'>window.location = '../../../index.php'</script>