<?php
session_start();

require_once('db.class.php');

	$id_pedido = $_POST['aprovacao_ID'];
	$aprovacao = $_POST['aprovacao_radio'];
	$id_usuario = $_SESSION['id_usuario'];
	$justificativa = $_POST['justificativa_aprovacao'];
	$tipo = $_SESSION['tipo'];
	$valor='';

	if($aprovacao == 2){
		$valor = "aprovado";
	}else{
		$valor = "negado";
	}

	switch ($tipo){
		case 'direx':
			$tipo = "direx";
		break;

		case 'diretor':
			$tipo = "diretoria";
		break;

		case 'gestor':
			$tipo = "chefia";
		break;
	}
	
	$acompanhamento = "Pedido: $valor, <b><br />Justificativa: </b> $justificativa";

	$data = date("d/m/Y");
	$data = implode("-",array_reverse(explode("/",$data)));
	$time = date('H:i:s');

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$retorno ='';
	/*


	Se você quer converter uma data em formato brasileiro para inserir no mysql use:

	$data = implode("-",array_reverse(explode("/",$data)));
	O resultado será: 31/04/2010 para 2010-31-04


	*/

		$sql =  " INSERT INTO lc_acompanhamentos (acompanhamento_add, dt_acompanhamento, hr_acompanhamento, id_fk_usuario_acompanhamento, id_fk_pedido) ";
		$sql .= " VALUES ('$acompanhamento', '$data', '$time', '$id_usuario', '$id_pedido')";
		//$sql = nl2br($sql);
		$sql2 =  " UPDATE lc_aprovacoes SET ";
		$sql2 .= " aprovacao_$tipo = '$aprovacao', ";
		$sql2 .= " justificativa_rejeicao_$tipo = '$justificativa' ";
		$sql2 .= " WHERE lc_aprovacoes.pedido_id_fk= '$id_pedido'";
		

		//
		$sql3 =  " UPDATE lc_pedido SET ";
		$sql3 .= " status_pedido = '6', hrs_fechamento = '$time', dt_fechamento = '$data' ";
		$sql3 .= " WHERE id_pedido = '$id_pedido'";

		$sql4 =  " UPDATE lc_pedido SET ";
		$sql4 .= " status_pedido = '4' ";
		$sql4 .= " WHERE id_pedido = '$id_pedido'";


		//executa query
		
		if(mysqli_query($link, $sql) AND mysqli_query($link, $sql2) ){
			if($aprovacao == 3){
				mysqli_query($link, $sql3);
			}
			if($aprovacao == 2 AND $tipo == 'direx'){
				mysqli_query($link, $sql4);
			}
			
			echo "ok";

		}else{
			//erro005 - Falha ao registrar usuário
			echo "erro".$sql2;
			


		}




?>