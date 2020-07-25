<?php 
$nome = $_SESSION['nome']; 
$tipo = $_SESSION['tipo'];
include_once('controle/buscaMeusPedidos.php');


?>



<span id='msg'></span>

<button type='button' class='btn btn-primary float-right' onclick='apagaFormPedido();' id='listaMeusPedidosBD' 
		data-toggle='modal' data-target='#mod_cadPedido'>Adicionar Pedido</button>

		
<h1>Seja Bem Vindo: </h1><h4><?php echo $nome; ?></h4>


<?php include_once('include/visaoPessoalCard.php'); ?>


<?php 

	if($tipo == "gestor" OR $tipo == "supadm" OR $tipo == "administrador" OR $tipo == "diretor" OR $tipo == "direx"){
		include_once('include/visaoGestorCard.php');
	}

?>

<?php 

	if($tipo == "compras" OR $tipo == "supadm" OR $tipo == "administrador"){
		include_once('include/visaoCompradorCard.php'); 
	}

?>