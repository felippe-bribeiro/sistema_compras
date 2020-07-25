<?php

	session_start();

	if(!isset($_SESSION['email'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');

	$id_usuario = $_SESSION['id_usuario'];
	$id_item = $_POST['idDelItem'];

	if($id_item == '' ){
		die();
	}

	$objDb = new db();
	$link = $objDb->conecta_mysql();


	
	$sql = " DELETE FROM lc_itens WHERE id_item = $id_item";
	
	
	//$registro =''
	
		
	

if(mysqli_query($link, $sql)){

			echo "ok";
			die();

		}else{
			//erro005 - Falha ao registrar usuário
			echo "";

		}


    //echo json_encode($registro);




?>


		
		

	