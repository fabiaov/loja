<html>
<?php include("cabecalho.php"); 
include ("conecta.php");
include ("banco-categoria.php");
$categorias = listaCategorias($conexao); 
?>
<h1>Formulário de Produto</h1>

<form action="adiciona-produto.php" method="post">
	<table class="table">
		<tr> <!-- linha de uma tabela HTML  -->
			<td>Nome:</td> 
			<td><input class="form-control" type="text" name="nome"></td> <br>  <!-- <td> ordena o primeiro campo --> 
			
		</tr>

		<tr><!--linhas -->	
			<td>Preço:</td><!--Colunas --> 
			<td><input class="form-control" type="number" name="preco"></td> <br> <!-- class form-control deixa o campo com o tamanho inteiro -->
			 
		</tr>

		<tr><!--linhas -->	
			<td>Descrição:</td><!--Colunas --> 
			<td><textarea class="form-control" name="descricao"></textarea> <!-- class form-control deixa o campo com o tamanho inteiro -->
			 
		</tr>

		<tr><!--linhas -->	
			<td>Categoria:</td><!--Colunas -->
			<td> 
				<?php foreach ($categorias as $categoria) : ?>
					<input type="radio" name="categoria_id" value="<?=$categoria['id']?>"><?=$categoria['nome']?><br/> <!-- class form-control deixa o campo com o tamanho inteiro -->
				<?php endforeach?>
			</td>
			 
			 
		</tr>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
				
		</tr>	
</table>


</form>
<?php include ("cabecalho.php") ?>
</html>