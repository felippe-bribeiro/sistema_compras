
<?php
	$pagina='';
	session_start();
	if(!isset($_SESSION['email'])){
		header('Location: index.php?erro=1');
	}

	$nome = $_SESSION['nome'];

	require_once('controle/db.class.php');
	$objDb = new db();
	$link = $objDb->conecta_mysql();

?>


<!DOCTYPE HTML>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
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

		<script type="text/javascript">

			
			//Ajax Menu Lateral Direito que encaminha div central
			$(document).ready(function(){
				
				var home = 'homeCard.php';
				
				$(window).load(function(){
					$.ajax({
						url:home,
						success: function(data){
							$('#div_central').html(data);
						}

					})


				})	
					
				
			

				$('.btn_cadastro').click(function(){
					
					var carrega_url = this.id;
						carrega_url += ".php"
					$.ajax({
						url:carrega_url,

						success: function(data){
							//alert(carrega_url);
							switch (carrega_url){
								case 'controle/listaMeusPedido.php':
								$('#listaPedido').addClass("active");
								$('#navbarDropdown').addClass("active");
								$('#listaItem').removeClass("active");
								$('#listaCentroCusto').removeClass("active");
								$('#homeCard').removeClass("active");
								
								break;
								case 'controle/listaItemBD.php':
								$('#listaItem').addClass("active");
								$('#navbarDropdown').addClass("active");
								$('#listaPedido').removeClass("active");
								$('#listaCentroCusto').removeClass("active");
								$('#homeCard').removeClass("active");
								
								break;
								case 'controle/listaCentroCustoBD.php':
								$('#listaCentroCusto').addClass("active");
								$('#navbarDropdown').addClass("active");
								$('#listaItem').removeClass("active");
								$('#listaPedido').removeClass("active");
								$('#homeCard').removeClass("active");

								
								break;
								case 'controle/listaMeusPedidosBD.php':
								$('#listaCentroCusto').addClass("active");
								$('#navbarDropdown').addClass("active");
								$('#listaItem').removeClass("active");
								$('#listaPedido').removeClass("active");
								$('#homeCard').removeClass("active");

								
								break;
								default:
								$('#homeCard').addClass("active");
								$('#listaCentroCusto').removeClass("active");
								$('#navbarDropdown').removeClass("active");
								$('#listaItem').removeClass("active");
								$('#listaPedido').removeClass("active");


							}
							
							
							$('#div_central').html(data);
						},

						beforeSend: function(){
							
						}


					});
				});



			});
			// Fim Ajax Menu lado Direito
			
		</script>

	</head>
	<body>

		<!-- Static Navbar -->

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<span class="navbar-brand">Sistemas de Compras HAS  </span><span class="material-icons md-18">blur_on</span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggle-icon"><span class="material-icons md-18">menu</span></span>


			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link btn_cadastro active" href="#" id="homeCard"> Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link1</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Listagem de Cadastros</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item btn_cadastro" id="controle/listaItemBD" href="#">Itens</a>
							<a class="dropdown-item btn_cadastro" id="controle/listaCentroCustoBD" href="#">Centro de Custo</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item btn_cadastro" id="controle/listaMeusPedidosBD" href="#">Meus Pedidos</a>
							<a class="dropdown-item" href="#">Item4</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link disable" href="#" tabindex="-1" 
						aria-disabled="true">Item Desativado</a> 
					</li>

				</ul>

			    <ul class="navbar-nav ">

			    	<li class="nav-item active">
			   			<a class="nav-link" href="sair.php" ><span class="material-icons md-18">cancel</span></a>
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
			<div class="col-md-8">
				<div class="card">
					<div class="card-body" id="div_central">
						
						
						

					</div>

				</div>

			</div>

			<!--Coluna 3 - Lateral Direita -->
			<div class="col-md-3" id="div_lateral_dir">
				<?php include('include/lateraldir.php') ?>
				<?php include('include/modal/modal.php') ?>



			</div>


		</div>


		<!-- End Body Jumbotrom -->
		
		<script src="css/bootstrap-4.4.1/js/bootstrap.js"></script>

		<script>


		</script>


	</body>
</html>