<?php
function InsereProduto($conexao, $nome, $preco, $descricao, $categoria_id){
	$query = "insert into produtos (nome, preco, descricao, categoria_id) values('{$nome}', {$preco}, '{$descricao}', {$categoria_id})";
	return mysqli_query($conexao, $query);
}

function listaProdutos($conexao){
		$produtos = array(); // criei uma array pra colocar todos os produtos la em $produtos
		$resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");// resultado da query é os produtos vindos do banco no caso sem o while ele vai imprimir somente o primeiro produto da lista de produtos do banco de dados.
		while($produto = mysqli_fetch_assoc($resultado)){
			array_push($produtos, $produto); // array_push joga todos os produtos do banco $produto => $produtos joga nessa array.
		}
		return $produtos;
	}

function removeProduto($conexao, $id){
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query); 

}	