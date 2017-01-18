<html>
<?php include("cabecalho.php"); 
include("logica-usuario.php");
?>

<?php if(isset($_GET["logout"]) && $_GET["logout"]==true){?>
		<p class="alert-success">Deslogado com sucesso</a>
<?php }?>

<?php if(isset($_GET["login"]) && $_GET["login"]==true){?>
		<p class="alert-success">Logado com sucesso</a>
<?php }?>
<?php if(isset($_GET["login"]) && $_GET["login"]==false){?>
		<p class="alert-danger">Usuario ou senha inválida</a>
<?php }?>

<?php if(isset($_GET["falhaDeSegurança"]) && $_GET["falhaDeSegurança"]==true){?>
		<p class="alert-danger">Você não tem acesso a essa funcionalidade</a>
<?php }?>



		<h1>Bem vindo à loja do Fabio!!</h1>

		<?php if(usuarioEstaLogado()){ ?>
			<p class="text-success">Você esta logado como <?=usuarioLogado()?>. <a href="logout.php"><button class="btn btn-primary">Deslogar</button></a></p>
		<?php } else {?>
			<h2>Login</h2>
			<form action="login.php" method="post">
				<table class="table">
					<tr>
						<td>Email:</td>
						<td><input class="form-control" type="email" name="email"></td>
					</tr>
					<tr>
						<td>Senha:</td>
						<td><input class="form-control" type="password" name="senha"></td>
					</tr>
					<tr>
						<td><button class="btn btn-primary">Login</button></td>
					</tr>
				</table>
			</form>
	<?php } ?>
<?php include ("cabecalho.php") ?>
</html