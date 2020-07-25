<?php

	session_start();

	if(!isset($_SESSION['email'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');

	$id_usuario = $_SESSION['id_usuario'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = " SELECT * FROM lc_pedido as p ";
	$sql.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
	$sql.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
	$sql.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
	$sql.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
	$sql.= " WHERE id_pedido = ".$_POST['id'];

	$sql2 = " SELECT * FROM lc_acompanhamentos as ac ";
	$sql2.= " LEFT JOIN lc_usuarios as u on (ac.id_fk_usuario_acompanhamento = u.id) ";
    $sql2.= " LEFT JOIN lc_pedido as p on (ac.id_fk_pedido = p.id_pedido) ";
    $sql2.= " WHERE id_fk_pedido = ".$_POST['id'];

	$resultado_id = mysqli_query($link, $sql);
	$resultado_id2 = mysqli_query($link, $sql2);
	
	
	$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
	$registro2 = mysqli_fetch_array($resultado_id2, MYSQLI_ASSOC);

	echo json_encode($registro);
	
	



?>


		
		

	