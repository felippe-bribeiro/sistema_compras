<?php
session_start();

require_once('db.class.php');

	$id_pedido = $_POST['acompanhamento_ID']; 
	$id_usuario = $_SESSION['id_usuario'];
	$acompanhamento = $_POST['addAcompanhamento'];
	//$nome_imagem = $_FILES['uploadAcompanhamento']['tmp_name'];
	//$object_imagem = $_POST['imagemFile'];

	$data = date("d/m/Y");
	$data = implode("-",array_reverse(explode("/",$data)));
	$time = date('H:i:s');

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$retorno ='';
	//$diretorio = "imagens/$id_pedido/";
	//mkdir($diretorio, 0755);
	//echo move_uploaded_file($_FILES['uploadAcompanhamento']['tmp_name'], $diretorio.$_FILES['uploadAcompanhamento']['name']);
	

	/*
	

	Se você quer converter uma data em formato brasileiro para inserir no mysql use:

	$data = implode("-",array_reverse(explode("/",$data)));
	O resultado será: 31/04/2010 para 2010-31-04


	*/

		$sql =  " INSERT INTO lc_acompanhamentos (acompanhamento_add, dt_acompanhamento, hr_acompanhamento, id_fk_usuario_acompanhamento, id_fk_pedido) ";
		$sql .= " VALUES ('$acompanhamento', '$data', '$time', '$id_usuario', '$id_pedido')";
		//$sql = nl2br($sql);
		

		//executa query
		
		if(mysqli_query($link, $sql)){
			
			echo "ok";

		}else{
			//erro005 - Falha ao registrar usuário
			echo "erro";
			


		}




?>