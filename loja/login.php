<?php 
include("conecta.php");
include("banco-usuario.php");
include("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST['email'], $_POST['senha']);
if($usuario == null){
	$_SESSION["danger"] = "Usuário ou Senha inválido";
	header("location: index.php");
} else{
	$_SESSION["success"] = "Usuário logado com sucesso!";
	logaUsuario($usuario["email"]);
	header("location: index.php");
}
die();