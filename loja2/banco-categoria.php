<?php
function listaCategorias($conexao){
	$categorias = array();
	$query = "select * from categorias"; // query que busca no banco de dados pega todos os elementos da tabela 
	$resultado = mysqli_query($conexao, $query); // msqli_query executa essa query que busca do banco de dados e executa 
	while($categoria = mysqli_fetch_assoc($resultado)){
		array_push($categorias, $categoria); //fazemos um while para cada linha da tabela que o mysqli_query = $resultado vai nos trazer nisso usamos a $categoria = mysqli_fetch_assoc($resultado) para associar o resultado e jogar na variavel categoria , dentro do while fazemos o array_push ($categorias, $categoria); pois pedimos pra ele jogar o resultado de $categoria em $categorias. 
	}
	return $categorias; 
}