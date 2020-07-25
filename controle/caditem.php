<?php
session_start();

require_once('db.class.php');

	$nome_item = $_POST['nomeItem']; 
	$descricao_item = $_POST['descricaoItem'];
	$cod_mv = $_POST['codMV'];
	$idItem = $_POST['idItem'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$nomeItem_existe = false;
	//$descricaoItem_existe = false;
	$codMV_existe = false;
	$retorno ='';

	//verifica se existe cadastro
	if($idItem){
		
		$sql = " UPDATE lc_itens SET nome_item = '$nome_item', descricao_item = '$descricao_item', cod_mv = '$cod_mv' WHERE id_item = '$idItem' ";
		
		//executa query

		if(mysqli_query($link, $sql)){
			echo "up";

		}else{
			//erro005 - Falha ao registrar usuário
			echo "";

		}

		die();

	}else{


		$sql = " select * from lc_itens where nome_item = '$nome_item' " ;
		if($resultado_id = mysqli_query($link, $sql)){

			$dados_nome_item = mysqli_fetch_array($resultado_id);
			if(isset($dados_nome_item['nome_item'])){
				$nomeItem_existe = true;
				
			}
		} else {
			//Erro 001 - Erro ao tentar localizar o registro de centro de custo
			
			echo "001";
		}


		$sql = " select * from lc_itens where cod_mv = '$cod_mv' " ;
		if($resultado_id = mysqli_query($link, $sql)){

			$dados_cod_mv = mysqli_fetch_array($resultado_id);
			if(isset($dados_cod_mv['cod_mv'])){
				$codMV_existe = true;
				
			}
		} else {
			//Erro 001 - Erro ao tentar localizar o registro de centro de custo
			
			echo "001";
		}

		if($nomeItem_existe || $codMV_existe){

				//Erro002 - Item já cadastrado
				$retorno = '002';
				echo "$retorno";

	 		die();


		}

		if($nome_item == '' || $nome_item == NULL || $descricao_item == '' || $descricao_item == NULL){

			echo "003";
			die();

		}

		if($cod_mv == ''){

			$sql = "insert into lc_itens (nome_item, descricao_item) values ('$nome_item', '$descricao_item')";

			if(mysqli_query($link, $sql)){
				echo "ok";

			}else{
				//erro005 - Falha ao registrar usuário
				echo "";

			}
			die();
		}



		if (!is_numeric($cod_mv)  || $cod_mv < 1 ) {
			echo "004";
			die();
		}


		$sql = "insert into lc_itens (nome_item, descricao_item, cod_mv) values ('$nome_item', '$descricao_item', '$cod_mv')";
		

		//executa query

		if(mysqli_query($link, $sql)){
			echo "ok";

		}else{
			//erro005 - Falha ao registrar usuário
			echo "";

		}

	}



?>