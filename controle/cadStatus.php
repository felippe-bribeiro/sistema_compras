<?php
session_start();

require_once('db.class.php');
include_once('../include/statusFunction.php');

	$id_pedido = $_POST['status_ID'];
	$status = $_POST['modificarStatus'];
	$id_usuario = $_SESSION['id_usuario'];
	$justificativa = $_POST['justificativaStatus'];

	$statusName = nameStatus($status);
	$acompanhamento = "<b>Status Alterado:</b> $statusName ,<b><br />Acompanhamento: </b> $justificativa";

	$data = date("d/m/Y");
	$data = implode("-",array_reverse(explode("/",$data)));
	$time = date('H:i:s');

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
	
	/*


	Se você quer converter uma data em formato brasileiro para inserir no mysql use:

	$data = implode("-",array_reverse(explode("/",$data)));
	O resultado será: 31/04/2010 para 2010-31-04


	*/

		$sql =  " INSERT INTO lc_acompanhamentos (acompanhamento_add, dt_acompanhamento, hr_acompanhamento, id_fk_usuario_acompanhamento, id_fk_pedido) ";
		$sql .= " VALUES ('$acompanhamento', '$data', '$time', '$id_usuario', '$id_pedido')";
		//$sql = nl2br($sql);

		//
		$sql2 =  " UPDATE lc_pedido SET ";
		$sql2 .= " status_pedido = '$status' ";
		if($status == 3 ){
			$sql2 .= ", hrs_fechamento = '$time', dt_fechamento = '$data' ";
		}
		$sql2 .= " WHERE id_pedido = '$id_pedido'";


		//executa query
		
		if(mysqli_query($link, $sql) AND mysqli_query($link, $sql2) ){
			
			echo "ok";

		}else{
			//erro005 - Falha ao registrar usuário
			echo "erro";
			
		}




?>