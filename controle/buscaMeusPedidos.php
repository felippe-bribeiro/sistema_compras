<?php

	

	if(!isset($_SESSION['email'])){
		header('Location: index.php?erro=1');
	}
	$tipo = $_SESSION['tipo'];
	$tipo_direx = $_SESSION['tipo_direx'];
	$centro_custo_u_fk_id = $_SESSION['centro_custo_u_fk_id'];
	$tipo_gestor = $_SESSION['tipo_gestor'];
	//echo $centro_custo_u_fk_id;
	require_once('db.class.php');

	$id_usuario = $_SESSION['id_usuario'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

//Por Usuário//////////////////////////////////////////////////////////////////////////

//Busca Pedidos Diferentes de status 3  e 6 (Concluído e negado) - Portanto todos abertos
	$sql = " SELECT * FROM lc_pedido as p ";
	$sql.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
	$sql.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
	$sql.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
	$sql.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
	$sql.= " WHERE usuario_fk_id = '$id_usuario' AND (status_pedido not like '3' AND status_pedido not like '6') ORDER BY id_pedido DESC";

//Busca Meus pedidos Concluídos
	$sql2 = " SELECT * FROM lc_pedido as p ";
	$sql2.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
	$sql2.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
	$sql2.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
	$sql2.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
	$sql2.= " WHERE usuario_fk_id = '$id_usuario' AND status_pedido like '3' ORDER BY id_pedido DESC";

//Busca Meus pedidos Disponivel Retirada
	$sql14 = " SELECT * FROM lc_pedido as p ";
	$sql14.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
	$sql14.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
	$sql14.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
	$sql14.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
	$sql14.= " WHERE usuario_fk_id = '$id_usuario' AND status_pedido like '8' ORDER BY id_pedido DESC";


//Busca Meus pedidos Disponivel Retirada
	$sql15 = " SELECT * FROM lc_pedido as p ";
	$sql15.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
	$sql15.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
	$sql15.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
	$sql15.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
	$sql15.= " WHERE status_pedido like '8' ORDER BY id_pedido DESC";

//Busca Meus pedidos Negados
	$sql10 = " SELECT * FROM lc_pedido as p ";
	$sql10.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
	$sql10.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
	$sql10.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
	$sql10.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
	$sql10.= " WHERE usuario_fk_id = '$id_usuario' AND status_pedido like '6' ORDER BY id_pedido DESC";

//Busca pedidos Pendentes
	$sql3 = " SELECT * FROM lc_pedido as p ";
	$sql3.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
	$sql3.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
	$sql3.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
	$sql3.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
	$sql3.= " WHERE usuario_fk_id = '$id_usuario' AND (status_pedido like '2' OR status_pedido like '4') ORDER BY id_pedido DESC";



	//Busca aguardando aprovação (meus chamados)
	$sql5 = " SELECT * FROM lc_pedido as p ";
	$sql5.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
	$sql5.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
	$sql5.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
	$sql5.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
	$sql5.= " WHERE (status_pedido like '5' OR status_pedido like '7') ";
	$sql5.= " AND usuario_fk_id ='$id_usuario' ORDER BY id_pedido DESC ";

	//Busca Aprovados (MEUS) Status 4
	$sql9 = " SELECT * FROM lc_pedido as p ";
	$sql9.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
	$sql9.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
	$sql9.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
	$sql9.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
	$sql9.= " WHERE status_pedido like '4' AND usuario_fk_id ='$id_usuario' ORDER BY id_pedido DESC";

//Fim por Usuário///////////////////////////////////////////////////////////////////////////////////

//Sem Grupo
//Busca todos pedidos não concluídos
	$sql4 = " SELECT * FROM lc_pedido as p ";
	$sql4.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
	$sql4.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
	$sql4.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
	$sql4.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
	$sql4.= " WHERE status_pedido not like '3' AND status_pedido not like '6' ";
	if ($tipo == 'direx' OR $tipo == 'supadm' OR $tipo == 'administrador' OR $tipo == 'compras' OR $tipo == 'cef'){
		
	}elseif ($tipo == 'gestor'){ 
		$sql4.= " AND tipo_gestor ='$tipo_gestor'";
	}elseif ($tipo == 'diretor'){
		$sql4.= " AND tipo_direx ='$tipo_direx'";
	}else{
		$sql4.= " AND usuario_fk_id ='$id_usuario'";
	}
	$sql4.= " ORDER BY id_pedido DESC";

//Busca todos pedidos concluídos
	$sql11 = " SELECT * FROM lc_pedido as p ";
	$sql11.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
	$sql11.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
	$sql11.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
	$sql11.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
	$sql11.= " WHERE status_pedido like '3' ";
	if ($tipo == 'direx' OR $tipo == 'supadm' OR $tipo == 'administrador' OR $tipo == 'compras' OR $tipo == 'cef'){
		
	}elseif ($tipo == 'gestor'){ 
		$sql11.= " AND tipo_gestor ='$tipo_gestor'";
	}elseif ($tipo == 'diretor'){
		$sql11.= " AND tipo_direx ='$tipo_direx'";
	}else{
		$sql11.= " AND usuario_fk_id ='$id_usuario'";
	}
	$sql11.= " ORDER BY id_pedido DESC";

//Busca todos pedidos Negados
	$sql12 = " SELECT * FROM lc_pedido as p ";
	$sql12.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
	$sql12.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
	$sql12.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
	$sql12.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
	$sql12.= " WHERE status_pedido like '6' ";
	if ($tipo == 'direx' OR $tipo == 'supadm' OR $tipo == 'administrador' OR $tipo == 'compras' OR $tipo == 'cef'){
		
	}elseif ($tipo == 'gestor'){ 
		$sql12.= " AND tipo_gestor ='$tipo_gestor'";
	}elseif ($tipo == 'diretor'){
		$sql12.= " AND tipo_direx ='$tipo_direx'";
	}else{
		$sql12.= " AND usuario_fk_id ='$id_usuario'";
	}
	$sql12.= " ORDER BY id_pedido DESC";

	//Busca todos pedidos novos // COMPRADOR
	$sql8 = " SELECT * FROM lc_pedido as p ";
	$sql8.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
	$sql8.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
	$sql8.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
	$sql8.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
	$sql8.= " WHERE status_pedido like '1' ORDER BY id_pedido DESC";



	//Busca aguardando aprovação 
	$sql6 = " SELECT * FROM lc_pedido as p ";
	$sql6.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
	$sql6.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
	$sql6.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
	$sql6.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
	if ($tipo == 'direx' OR $tipo == 'supadm' OR $tipo == 'administrador'){
		$sql6.= " WHERE aprovacao_direx like '1' AND aprovacao_chefia like '2' AND aprovacao_diretoria like '2' AND status_pedido like '5' ";
	}elseif ($tipo == 'gestor'){ 
		$sql6.= " WHERE aprovacao_chefia like '1' AND aprovacao_direx not like '2' AND aprovacao_diretoria not like '2' AND status_pedido like '5' AND tipo_gestor = '$tipo_gestor'";
	}elseif ($tipo == 'diretor'){
		$sql6.= " WHERE aprovacao_diretoria like '1' AND aprovacao_direx not like '2' AND aprovacao_chefia like '2' AND status_pedido like '5' AND tipo_direx = '$tipo_direx'";
	}
	$sql6.= " ORDER BY id_pedido DESC";
	

//Busca todos pedidos Aprovados
$sql7 = " SELECT * FROM lc_pedido as p ";
$sql7.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
$sql7.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
$sql7.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
$sql7.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
$sql7.= " WHERE status_pedido like '4' ";
$sql7.= " OR status_pedido like '9' ";
if ($tipo == 'direx' OR $tipo == 'supadm' OR $tipo == 'administrador' OR $tipo == 'compras' OR $tipo == 'cef'){
	
}elseif ($tipo == 'gestor'){ 
	$sql7.= " AND tipo_gestor ='$tipo_gestor'";
}elseif ($tipo == 'diretor'){
	$sql7.= " AND tipo_direx ='$tipo_direx'";
}else{
	$sql7.= " AND usuario_fk_id ='$id_usuario'";
}
$sql7.= " ORDER BY id_pedido DESC";


//Busca todos pedidos Aprovados
$sql13 = " SELECT * FROM lc_pedido as p ";
$sql13.= " left join lc_itens as i on (p.item_fk_id = i.id_item) ";
$sql13.= " left join lc_usuarios as u on (p.usuario_fk_id = u.id) ";
$sql13.= " left join lc_aprovacoes as a on (p.aprovacao_fk_id = a.id_aprovacao) ";
$sql13.= " left join lc_centro_custo as c on (p.centro_custo_fk_id = c.id_centro_custo) ";
$sql13.= " WHERE status_pedido like '7' ";
if ($tipo == 'direx' OR $tipo == 'supadm' OR $tipo == 'administrador' OR $tipo == 'compras' OR $tipo == 'cef'){
	
}elseif ($tipo == 'gestor'){ 
	$sql13.= " AND tipo_gestor ='$tipo_gestor'";
}elseif ($tipo == 'diretor'){
	$sql13.= " AND tipo_direx ='$tipo_direx'";
}else{
	$sql13.= " AND usuario_fk_id ='$id_usuario'";
}
$sql13.= " ORDER BY id_pedido DESC";



	

	//Fim Busca Geral

	$resultado_id = mysqli_query($link, $sql);
	$totalPedidosAbertos = mysqli_num_rows($resultado_id);

	$resultado_id2 = mysqli_query($link, $sql2);
	$totalPedidosConcluidos = mysqli_num_rows($resultado_id2);	

	$resultado_id3 = mysqli_query($link, $sql3);
	$totalPedidosPendentes = mysqli_num_rows($resultado_id3);	

	$resultado_id4 = mysqli_query($link, $sql4);
	$totalPedidos = mysqli_num_rows($resultado_id4);	

	$resultado_id5 = mysqli_query($link, $sql5);
	$totalMeusPedidosAguardandoAprovacao = mysqli_num_rows($resultado_id5);
	
	$resultado_id6 = mysqli_query($link, $sql6);
	$totalPedidosAguardandoAprovacao = mysqli_num_rows($resultado_id6);
	
	$resultado_id7 = mysqli_query($link, $sql7);
	$totalPedidosAprovados = mysqli_num_rows($resultado_id7);

	$resultado_id8 = mysqli_query($link, $sql8);
	$totalPedidosNovos = mysqli_num_rows($resultado_id8);
	
	$resultado_id9 = mysqli_query($link, $sql9);
	$totalMeusPedidosAprovados = mysqli_num_rows($resultado_id9);

	$resultado_id10 = mysqli_query($link, $sql10);
	$totalMeusPedidosNegados = mysqli_num_rows($resultado_id10);
	
	$resultado_id11 = mysqli_query($link, $sql11);
	$totalPedidosConcluidosGlobal = mysqli_num_rows($resultado_id11);

	$resultado_id12 = mysqli_query($link, $sql12);
	$totalPedidosNegados = mysqli_num_rows($resultado_id12);

	$resultado_id13 = mysqli_query($link, $sql13);
	$totalAprovarOrcamento = mysqli_num_rows($resultado_id13);

	$resultado_id14 = mysqli_query($link, $sql14);
	$totalPedidosRetirada = mysqli_num_rows($resultado_id14);

	$resultado_id15 = mysqli_query($link, $sql15);
	$totalPedidosRetiradaCompras = mysqli_num_rows($resultado_id15);

?>