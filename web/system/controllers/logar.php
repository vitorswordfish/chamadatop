<?php

	session_start();

	require_once('db.class.php');
	$objDb = new db();
	$link = $objDb->conecta_mysql();


	extract($_POST);

	$sql2 = " select * from `turmas` where nome = '$materia' AND turma = '$turma' ";
	$resultado_id2 = mysqli_query($link, $sql2);
	if($resultado_id2){
		$dados_usuario2 = mysqli_fetch_array($resultado_id2);
		if(isset($dados_usuario2['nome'])){

			$_SESSION['id_turma'] = $dados_usuario2['id_materias'];
			$_SESSION['horario'] = $dados_usuario2['horario'];

		} else {
			header('Location: ../../?fb=1');
		}
	} else {
		header('Location: ../../?fb=1');
	}


	$sql = " select * from `alunos` where senha = '$senha' AND matricula = '$matricula' ";
	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if(isset($dados_usuario['senha'])){

			$_SESSION['matricula'] = $dados_usuario['matricula'];
			$_SESSION['id_aluno'] = $dados_usuario['id_aluno'];

			header('Location: ../../sistema/chamada/index.php');


		} else {
			header('Location: ../../?fb=1');
		}
	} else {
		header('Location: ../../?fb=2');
	}
?>
