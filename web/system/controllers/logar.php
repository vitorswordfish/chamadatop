<?php

	session_start();

	require_once('db.class.php');
	$objDb = new db();
	$link = $objDb->conecta_mysql();


	extract($_POST);

	

	echo $latitude; //-15.7635895 labredes
	echo $longitude; //-47.8727133 labredes

	/*if($latitude < -15.7640000 || $latitude > -15.7630000 || $longitude < -47.8730000 || $longitude > -47.8720000){
		header('Location: ../../?fb=4');
	}



	function getUserIP() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
	}

	if(getUserIP() == "164.41.4.26"){
		header('Location: ../../?fb=5');
	}
		*/
	


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
			$_SESSION['nome'] = $dados_usuario['nome'];
			$_SESSION['curso'] = $dados_usuario['curso'];

			header('Location: ../../sistema/chamada/index.php');


		} else {
			header('Location: ../../?fb=1');
		}
	} else {
		header('Location: ../../?fb=2');
	}
?>
