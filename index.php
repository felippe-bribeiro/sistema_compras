
<?php
	session_start();
	if(isset($_SESSION['email'])){
		header('Location: home.php');
	}


	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>


<!DOCTYPE HTML>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale=1">
		<title> Sistema de Compras - HAS</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap-4.4.1/css/bootstrap.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->






		

		<!-- Jquery Local -->
		<script src="jquery/jquery-3.4.1.js"></script>

		<style type="text/css">


			.jumbotron{
			  border-width: 0.5px;
			  border-style: solid;
			  border-color: #000;
			}


		</style>

	</head>
	<body style="background: #e9ecef">

		<!-- Static Navbar -->

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="index.php">Sistemas de Compras HAS </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggle-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!--<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link1</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Menu DropDown</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Item1</a>
							<a class="dropdown-item" href="#">Item2</a>
							<a class="dropdown-item" href="#">Item3</a>
							<a class="dropdown-item" href="#">Item4</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link disable" href="#" tabindex="-1" 
						aria-disabled="true">Item Desativado</a> 
					</li>

				</ul>

				<form class="form-inline my-2 my-lg-0">
					
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form>-->

			</div>

		</nav>
		<!-- Fim NavBar -->




		<!-- Body Jumbotrom -->
		<br/>
		<div class="container">
			<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h1 class="display-4">Informe seu login:</h1><br />
					<form method="post" action="controle/validar_acesso.php" id="formLogin">
						<div class="form group"  >
							<input type="text" class="form-control " id="campo_email" name="email" placeholder="E-mail HC" autofocus/>
						</div><p></p>
						<div class="form grupo">
							<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha">
						</div>
						<p></p>
						<button type="submit" class="btn btn-primary" id="btn_login">Entrar</button>

					</form>

					<?php 
						if($erro ==1){
							echo '<br /><div class="alert alert-danger" role="alert">Usuário e/ou senha inválido(s)</div>';
							

						}

					?>
				</div>

			</div>
			<div class="clearfix"></div>
		</div>
		</div>

		<!-- End Body Jumbotrom -->
		
		<script src="css/bootstrap-4.4.1/js/bootstrap.js"></script>
	</body>
</html>