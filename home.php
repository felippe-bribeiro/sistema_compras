
<?php
	$pagina='';
	session_start();
	if(!isset($_SESSION['email'])){
		header('Location: index.php?erro=1');
	}

	$nome = $_SESSION['nome'];
	$tipo = $_SESSION['tipo'];
	require_once('controle/buscaMeusPedidos.php');
	require_once('controle/db.class.php');
	require_once('controle/pesquisaMenuSelectBD.php');
	include_once('include/grupos.php');

?>




<!DOCTYPE HTML>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="refresh" content="300" />
		<meta name="viewport" content="width-device-width, initial-scale=1">
		<title> Sistema de Compras - HAS</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap-4.4.1/css/bootstrap.css" rel="stylesheet">
		<link href="css/material-icons.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

		<!-- Jquery Local -->
		<script src="jquery/jquery-3.4.1.js"></script>

		<style type="text/css">

		</style>
		<!-- Menu Lado Direito -->
		

			
		

	</head>
	<!--<script type="text/javascript">
		$(function() {
			setTime();
			function setTime() {
				var date = new Date().getTime();
				var string =  $("#div_central").html();    
				setTimeout(setTime, 3000);
				$('#div_central').html(string);
			}
		});

	</script>
		-->
	<div id="div_general">
	<body id="body_general">
			
		<!-- Static Navbar -->

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<span class="navbar-brand">Sistemas de Compras HAS  </span><span class="material-icons md-18">blur_on</span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggle-icon"><span class="material-icons md-18">menu</span></span>


			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link active" href="home.php" id="home"> Home <span class="sr-only">(current)</span></a>
					</li>
					<!-- Menu Cadastro Compras -->
					<?php
						if ($tipo == "compras" OR $tipo == "supadm" OR $tipo == "administrador"){
							echo "<li class='nav-item dropdown'>
								<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
								Cadastro</a>
								<div class='dropdown-menu' aria-labelledby='navbarDropdown'>
									<a class='dropdown-item btn_cadastro' id='controle/listaItemBD' href='#'>Itens</a>
									<a class='dropdown-item btn_cadastro' id='controle/listaCentroCustoBD' href='#'>Centro de Custo</a>
									
								</div>
							</li>";
						}
					?>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Meus Pedidos</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item btn_cadastro" id="controle/listaMeusPedidosBD" href="#">Pedidos Abertos</a>
							<a class="dropdown-item btn_cadastro" id="controle/listaMeusPedidosPendentes" href="#">Pedidos Pendentes</a>
							<a class="dropdown-item btn_cadastro" id="controle/listaMeusPedidosConcluidos" href="#">Pedidos Concluídos</a>
							<a class="dropdown-item btn_cadastro" id="controle/listaMeusPedidosNegados" href="#">Pedidos Negados</a>
							<div class="dropdown-divider"></div>
			
							<a class="dropdown-item btn_cadastro" id="controle/listaPedidosMeusAprovados" href="#">Aprovados</a>
							<a class="dropdown-item btn_cadastro" id="controle/listaAguardandoAprovacaoBD" href="#">Aguardando aprovação</a>
							
						</div>
					</li>
					<?php if($tipo != 'oficial'){ ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Listar Pedidos</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item btn_cadastro" id="controle/listaPedidosAbertos" href="#">Abertos</a>
							<a class="dropdown-item btn_cadastro" id="controle/listaPedidosConcluidos" href="#">Concluídos</a>
							<a class="dropdown-item btn_cadastro" id="controle/listaPedidosNegados" href="#">Negados</a>
							<div class="dropdown-divider"></div>
			
							<a class="dropdown-item btn_cadastro" id="controle/listaPedidosAprovadosBD" href="#">Aprovados</a>
							<a class="dropdown-item btn_cadastro" id="controle/listaAguardandoAprovacaoBD" href="#">Aguardando aprovação</a>
							
						</div>
					</li>
					<?php } ?>
					<?php if($tipo == 'oficial'){ ?>
					<li class="nav-item">
						<a class="nav-link btn_cadastro" id="controle/listaPedidosAbertos" href="#">Listar Pedidos Abertos</a>
					</li>
					<?php } ?>
					<!--
					<li class="nav-item">
						<a class="nav-link disable" href="#" tabindex="-1" 
						aria-disabled="true">Painel de Chamados</a> 
					</li>-->

				</ul>

			    <ul class="navbar-nav ">

			    	<li class="nav-item active">
			   			<a class="nav-link" href="sair.php" title="Sair"><span class="material-icons md-18">cancel</span></a>
			   		</li>
			   	</ul>
			</div>

		</nav>
		<!-- Fim NavBar -->

				


		<!-- Body Jumbotrom -->
		<br/>
		<div class="row">
			<!--Coluna 1 - lateral Esquerda -->
			<div class="col-md-1">
				<!--<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
					<font size="2px"><?php echo "Bem vindo: $nome" ?></font>
				  <div class="card-header"><b>Meus chamados:</b></div>
				  <div class="card-body">
				    <p class="card-text">Abertos: 5</p>
				    <p class="card-text">Pendentes: 6</p>
				    <p class="card-text">Encerrados: 9</p>
				  </div>
				</div>-->
				

			</div>

			<!--Coluna 2 - Centro -->
			<div class="col-md-10">
				<div class="card">
					<div class="card-body" id="div_central">
					<?php include('homeCard.php') ?>

					
					
						

					</div>

				</div>

			</div>

			<!--Coluna 3 - Lateral Direita -->
			<!--<div class="col-md-3" id="div_lateral_dir">
				php include('include/lateraldir.php') ?>
				



			</div>-->

			<?php include('include/modal/modal.php') ?>


		</div>


		<!-- End Body Jumbotrom -->
		
		
			
		<script src="css/bootstrap-4.4.1/js/popper.min.js"></script>
		<script src="css/bootstrap-4.4.1/js/bootstrap.js"></script>
		<script type="text/javascript" src="js/btncadastro.js"> </script>
		<script type="text/javascript" src="js/apagaForm.js"> </script>
		<script type="text/javascript" src="js/statusPedidoName.js"> </script>
		<script type="text/javascript" src="js/aprovacao.js"> </script>
		<script type="text/javascript" src="js/acompanhamento.js"> </script>
		<script type="text/javascript" src="js/js.js"> </script>





	</body>
	</div>

	
</html>