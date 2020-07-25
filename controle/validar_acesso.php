<?php

session_start();

require_once('db.class.php');

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = " SELECT * FROM lc_usuarios WHERE email = '$email' AND senha = '$senha' ";

$objDb = new db();
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);

if($resultado_id){
	$dados_usuario = mysqli_fetch_array($resultado_id);

	if(isset($dados_usuario['email'])){
		$_SESSION['id_usuario'] = $dados_usuario['id'];
		$_SESSION['email'] = $dados_usuario['email'];
		$_SESSION['nome'] = $dados_usuario['nome'];
		$_SESSION['tipo_direx'] = $dados_usuario['tipo_direx'];
		$_SESSION['tipo'] = $dados_usuario['tipo'];
		$_SESSION['centro_custo_u_fk_id'] = $dados_usuario['centro_custo_u_fk_id'];
		$_SESSION['tipo_gestor'] = $dados_usuario['tipo_gestor'];
		header('Location: ../home.php');
	} else {
		header('Location: ../index.php?erro=1');

	}
} else{
	echo 'Erro na execução da consulta, favor contatar CETI HAS';

}

?>

