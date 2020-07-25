<?php
session_start();

require_once('db.class.php');

	$ccDescricao = $_POST['ccDescricao']; 
	$centroCusto = $_POST['centroCusto'];
	$id_centro_custo = $_POST['idCC'];
	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$centroCusto_existe = false;
	$ccDescricao_existe = false;
	$retorno ='';



	//verifica se veio post com ID
	if($id_centro_custo){

		$sql = " UPDATE lc_centro_custo SET centro_custo = '$centroCusto', cc_descricao = '$ccDescricao' WHERE id_centro_custo = '$id_centro_custo'";

		if(mysqli_query($link,$sql)){
			echo "up";
		}else {
			echo "";
		}

		die();

	}else{
		//verifica se existe cadastro

		$sql = " select * from lc_centro_custo where centro_custo = '$centroCusto'" ;
		if($resultado_id = mysqli_query($link, $sql)){

			$dados_centro_custo = mysqli_fetch_array($resultado_id);
			if(isset($dados_centro_custo['centro_custo'])){
				$centroCusto_existe = true;
				
			}
		} else {
			//Erro 001 - Erro ao tentar localizar o registro de centro de custo
			
			echo "001";
		}

		$sql = " select * from lc_centro_custo where cc_descricao = '$ccDescricao'" ;
		if($resultado_id = mysqli_query($link, $sql)){

			$dados_ccDescricao = mysqli_fetch_array($resultado_id);
			if(isset($dados_ccDescricao['cc_descricao'])){
				$ccDescricao_existe = true;
				
			}
		} else {
			//Erro 001 - Erro ao tentar localizar o registro de centro de custo
			
			echo "001";
		}

		if($centroCusto_existe || $ccDescricao_existe){
			

			if($centroCusto_existe){
				//Erro002 - Centro de Custo Já Cadastrado
				$retorno = '002';
				echo "$retorno";
				
	 		}

	 		if($ccDescricao_existe){
				//Erro003 - Descrição Já Cadastrado
				$retorno = '003';
				echo "$retorno";
	 		}
	 		die();


		}

		if($ccDescricao == '' || $ccDescricao == NULL || $centroCusto == '' || $centroCusto == NULL){

			echo "004";
			die();


		}



		if (!is_numeric($centroCusto) || $centroCusto < 1) {
			echo "005";
			die();
		}

		$sql = "insert into lc_centro_custo (cc_descricao, centro_custo) values ('$ccDescricao', '$centroCusto')";
		

		//executa query

		if(mysqli_query($link, $sql)){
			echo "ok";
		}else{
			//erro005 - Falha ao registrar usuário
			echo "";
		}
	}




?>