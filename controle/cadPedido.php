<?php
session_start();

require_once('db.class.php');

	$id_item = $_POST['id_item']; 
	$id_centroCusto = $_POST['id_centroCusto'];
	$quantidadePed = $_POST['quantidadePed'];
	$justificativaPed = $_POST['justificativaPed'];
	$id_usuario = $_SESSION['id_usuario'];
	$descricaoItemPedido = $_POST['descricaoItemPedido'];
	$unidade = $_POST['unidade'];
	$data = date("d/m/Y");
	$data2 = date("d/m/Y");
	$data2 = implode("-",array_reverse(explode("/",$data2)));
	$time = date('H:i:s');
	
		
	

		// separa data
		$dataExplode = explode("/", $data);
		$dia = $dataExplode[0];
		$mes = $dataExplode[1];
		$ano = $dataExplode[2];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$retorno ='';
	/*


	Se você quer converter uma data em formato brasileiro para inserir no mysql use:

	$data = implode("-",array_reverse(explode("/",$data)));
	O resultado será: 31/04/2010 para 2010-31-04


	*/

		$sql =  " INSERT INTO lc_pedido (justificativa_pedido, dia, mes, ano, quantidade, item_fk_id, descricao_item_pedido, centro_custo_fk_id, usuario_fk_id, dt_abertura,hrs_abertura, unidade) ";
		$sql .= " VALUES ('$justificativaPed', '$dia', '$mes', '$ano', '$quantidadePed', '$id_item', '$descricaoItemPedido', '$id_centroCusto', '$id_usuario', '$data2','$time', '$unidade')";
		//$sql = nl2br($sql);
		

		//executa query
		
		if(mysqli_query($link, $sql)){
			$id = mysqli_insert_id($link);
			$sql = " INSERT INTO lc_aprovacoes (pedido_id_fk) VALUES ('$id')";
			mysqli_query($link, $sql);
			$id2 = mysqli_insert_id($link);
			$sql = " UPDATE lc_pedido SET aprovacao_fk_id = '$id2' WHERE id_pedido = '$id'";
			mysqli_query($link, $sql);
			echo "ok";

		}else{
			//erro005 - Falha ao registrar usuário
			echo "";
			


		}




?>