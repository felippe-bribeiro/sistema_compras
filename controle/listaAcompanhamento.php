<?php

	session_start();

	if(!isset($_SESSION['email'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');

	$id_usuario = $_SESSION['id_usuario'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = " SELECT * FROM lc_acompanhamentos as ac ";
	$sql.= " LEFT JOIN lc_usuarios as u on (ac.id_fk_usuario_acompanhamento = u.id) ";
	$sql.= " LEFT JOIN lc_pedido as p on (ac.id_fk_pedido = p.id_pedido) ";
	$sql.= " LEFT JOIN lc_aprovacoes as ap on (p.aprovacao_fk_id = ap.id_aprovacao)";
	$sql.= " WHERE id_fk_pedido = ".$_POST['id']." ORDER BY dt_time_acompanhamento DESC";

	$resultado_id = mysqli_query($link, $sql);
	
	//$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
	$x=0;
	$dados[]=null;
	while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
		
		$dados[$x] = $registro;
		$x++;
	}

	echo json_encode($dados);

	
	//
	
	
	



?>


		
		

	