<?php
function InsereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado){
	$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
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

function buscaProduto($conexao, $id){
	$query = "select * from produtos where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado){
	$query = "update produtos set nome = '{$nome}', preco ={$preco} , descricao = '{$descricao}', categoria_id ={$categoria_id} , usado ={$usado} where id = '{$id}'";
		return mysqli_query($conexao, $query);
}