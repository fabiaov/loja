<html>
<?php include("cabecalho.php"); 
include ("conecta.php");
include ("banco-categoria.php");
include ("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao); 
$usado = $produto['usado'] ? "checked='checked'" : ""; 
?>
<h1>Alterando Produto</h1>

<form action="altera-produto.php" method="post">
	<input type="hidden" name="id" value="<?=$produto['id']?>">
	<table class="table">
		<tr> <!-- linha de uma tabela HTML  -->
			<td>Nome:</td> 
			<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td> <br>  <!-- <td> ordena o primeiro campo --> 
			
		</tr>

		<tr><!--linhas -->	
			<td>Preço:</td><!--Colunas --> 
			<td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"></td> <br> <!-- class form-control deixa o campo com o tamanho inteiro -->
			 
		</tr>

		<tr><!--linhas -->	
			<td>Descrição:</td><!--Colunas --> 
			<td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea> <!-- class form-control deixa o campo com o tamanho inteiro -->
		</tr>

		<tr>
			<td></td>
			<td><input type="checkbox" name="usado" <?=$usado?> value="true">Usado</td>
		</tr>

		<tr><!--linhas -->	
			<td>Categoria:</td><!--Colunas -->
			<td> 
				<select name="categoria_id" class="form-control">
					<?php foreach ($categorias as $categoria) : 
						$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
						$selecao = $essaEhACategoria ? "selected='selected'" : "";

					 ?>
						<option value="<?=$categoria['id']?>" selected="selected">
						<?=$categoria['nome']?>
						</option><!-- class form-control deixa o campo com o tamanho inteiro -->
					<?php endforeach?>
				</select>	

			</td>
			 
			 
		</tr>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Alterar</button>
			</td>
				
		</tr>	
</table>


</form>
<?php include ("cabecalho.php") ?>
</html>