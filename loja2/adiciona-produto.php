<html>
<?php include("cabecalho.php"); 
 include("conecta.php"); 
 include("banco-produto.php");
?>


<?php





$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];

if (InsereProduto($conexao, $nome, $preco, $descricao, $categoria_id)){ ?>
	
	<p class="text-success">Produto <?= $nome;?>,<?= $preco;?> adicionado com sucesso!</p>

<?php } else { 
		$msg = mysqli_error($conexao);

	?>
	<p class="text-danger">Produto <?= $nome;?>,<?= $preco;?> não foi adicionado: <?= $msg?> </p>
<?php
}


mysqli_close($conexao);


?>


<?php include ("cabecalho.php") ?>	
</html>