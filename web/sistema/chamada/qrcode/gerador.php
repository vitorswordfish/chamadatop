<?php

 session_start();

 extract($_GET);

 date_default_timezone_set('America/Sao_Paulo');

 require_once('../../../system/controllers/db.class.php');

  // Função
	function intervaloEntreDatas($inicio, $fim, $agora) {
	   $inicioTimestamp = strtotime($inicio);
	   $fimTimestamp = strtotime($fim);
	   $agoraTimestamp = strtotime($agora);
	   return (($agoraTimestamp >= $inicioTimestamp) && ($agoraTimestamp <= $fimTimestamp));
	}



 $objDb = new db();
 $link = $objDb->conecta_mysql();

 $sql = " select * from `sessoes` where token = '$token'";
 $resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if($dados_usuario['presenca'] == 0){


			$id_turma = $dados_usuario['turmas_id_materias'];
			$sql3 = " select * from `turmas` where id_materias = '$id_turma'";
			$resultado_id3 = mysqli_query($link, $sql3);
			if($resultado_id3){
				$dados_usuario3 = mysqli_fetch_array($resultado_id3);
				if(isset($dados_usuario3['nome'])){

					$horario = $dados_usuario3['horario'];

				} else {
					header('Location: ../../../erro.php');
				}
			} else {
				header('Location: ../../../erro.php');
			}

			 switch($horario){
		      case 1:
		        $start = '09:20:00';
		        $end = '10:00:00';
		        $now = 'now';
		        break;
		      case 2:
		        $start = '11:20:00';
		        $end = '12:00:00';
		        $now = date("H:i:s");
		        break;
		      case 3:
		        $start = '13:00:00';
		        $end = '16:00:00';
		        $now = date("H:i:s");
		        break;
		      case 4:
		        $start = '15:20:00';
		        $end = '16:00:00';
		        $now = date("H:i:s");
		        break;
		      case 5:
		        $start = '16:20:00';
		        $end = '18:00:00';
		        $now = date("H:i:s");
		        break;
		      case 6:
		        $start = '21:50:00';
		        $end = '22:40:00';
		        $now = date("H:i:s");
		        break;
		    }

			   

				// Chamada
				if(intervaloEntreDatas($start,$end,$now)){
				    $sql2 = "update sessoes set presenca='1' where token='$token'";
					mysqli_query($link,$sql2);
					header('Location: ../../../sucesso.php');
				}else{
					header('Location: ../../../erro.php');
				}


		} else {
			header('Location: ../../../erro.php');
		}
	} else {
		header('Location: ../../../erro.php');
	}







?>