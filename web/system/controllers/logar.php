<?php

	session_start();

	require_once('db.class.php');
	$objDb = new db();
	$link = $objDb->conecta_mysql();


	$email = $_POST['email'];
	$senha = sha1($_POST['senha']);

	$sql = " select * from `usuario` where email = '$email' AND senha = '$senha' ";
	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if(isset($dados_usuario['email'])){

	      $arr = explode(' ',trim($dados_usuario['nome']));
	      echo $arr[0];

			$_SESSION['email'] = $dados_usuario['email'];
			$_SESSION['id_usuario'] = $dados_usuario['id_usuario'];

			header('Location: ../../usuario.php');


		} else {
			header('Location: ../../../zilla/index.php?critico=1');
		}
	} else {
		header('Location: ../../../zilla/index.php?critico=1');
	}
?>
