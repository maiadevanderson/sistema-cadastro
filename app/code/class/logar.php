<?php
// Coletar dados dos formulários
$login = $_POST["vUsuario"];
$senha = $_POST["vSenha"];

// Incluiu arquivo 
// que contém a classe usuário
include("usuarios.php");
// Instacia classe usuarios;
$tempUsu = new Usuario();
//  Atribuir valor coletado ao atributo
$tempUsu->loginUsu=$login;
$tempUsu->senhaUsu=$senha;

// Chama a função contida na classe
$tempUsu->validarAcesso();
?>