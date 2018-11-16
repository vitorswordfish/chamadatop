<?php

extract($_POST);

require_once('db.class.php');
$objDb = new db();
$link = $objDb->conecta_mysql();

if(isset($departamento)){
	////////////////////BUSCA NO BD//////////////////////////
	//faz a busca pelo email no bd para saber se já existe antes de registrar um novo usuario
	$sql = " select * from professores where email = '$email' ";
	if($resultado_id = mysqli_query($link, $sql)) {
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if(isset($dados_usuario['email'])){ //tratamento: email ja existe
			header('Location: ../../sistema/cadastrar.php?er=1');
			die();
		} 
	}
	///////////////////INSERT NO BD//////////////////////////////////
	//se o usuario nao foi encontrado no banco de dados, fazemos a inserção
	
	$sql2 = " insert into professores (nome, email, senha, departamento) values ('$nome', '$email', '$senha', '$departamento')";
	//executar a query
	if(mysqli_query($link, $sql2)){
			header('Location: ../../sistema/cadastrar.php?er=2');
			die();
	} else {
		echo 'Erro ao registrar o usuário!';
	}
}else{
	////////////////////BUSCA NO BD//////////////////////////
	//faz a busca pelo email no bd para saber se já existe antes de registrar um novo usuario
	$sql = " select * from alunos where email = '$email' ";
	if($resultado_id = mysqli_query($link, $sql)) {
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if(isset($dados_usuario['email']) || isset($dados_usuario['matricula'])){ //tratamento: email ja existe
			header('Location: ../../sistema/cadastrar.php?er=1');
			die();
		} 
	}
	///////////////////INSERT NO BD//////////////////////////////////
	//se o usuario nao foi encontrado no banco de dados, fazemos a inserção
	
	$sql2 = " insert into alunos (nome, matricula, curso, senha) values ('$nome', '$matricula', '$curso', '$senha')";
	//executar a query
	if(mysqli_query($link, $sql2)){
			header('Location: ../../sistema/cadastrar.php?er=2');
			die();
	} else {
		echo 'Erro ao registrar o usuário!';
	}
	
}
?>