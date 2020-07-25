<?php

	session_start();
	$tipo = $_SESSION['tipo'];
	if(!isset($_SESSION['email'])){
		header('Location: index.php?erro=1');
	}

	if($tipo == "compras" OR $tipo == 'supadm' ){

		require_once('db.class.php');
		

		$id_usuario = $_SESSION['id_usuario'];

		$objDb = new db();
		$link = $objDb->conecta_mysql();
		
		/*$sql = " SELECT DATE_FORMAT(t.data_inclusao, '%d %b %Y %T') AS data_inclusao_formatada, t.tweet, u.usuario ";
		$sql.= " FROM tweet AS t JOIN usuarios AS u ON (t.id_usuario = u.id) ";
		$sql.= " WHERE id_usuario = $id_usuario ";
		$sql.= " OR id_usuario IN (select seguindo_id_usuario from usuarios_seguidores where id_usuario = $id_usuario) ";
		$sql.= " ORDER BY data_inclusao DESC ";*/

		$sql = " SELECT * from lc_itens ";
		
		$resultado_id = mysqli_query($link, $sql);

		if($resultado_id){ ?>
			<span id='msg'></span><table class ='table table-hover'>
			<button type='button' class='btn btn-primary btn_cadastro float-right' onclick='apagaFormItem();' id='listaItemBD' 
			data-toggle='modal' data-target='#mod_cadItem'>Adicionar Itens</button>
			<h1> Lista de Itens: </h1> 
					
					<thead>
						<tr>
							<th scope='col'>Nome do Item:</th>
							<th scope='col'>Descrição do Item:</th>
							<th scope='col'>Código MV:</th>
							<th scope='col'>Opções:</th>
						</tr>
					</thead>
					<tbody>
			<?php while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){ ?>
					<tr>
						<td id='<?=$registro['nome_item']?>'
							data-toggle='modal' 
							data-target='#mod_cadItem' 
							class='click-item' 
							itemEdit-id='<?=$registro['id_item']?>'><?=$registro['nome_item']?></a></td>
						<td id='<?=$registro['descricao_item']?>'
							data-toggle='modal' 
							data-target='#mod_cadItem' 
							class='click-item' 
							itemEdit-id='<?=$registro['id_item']?>'><?=$registro['descricao_item']?></td>
						<td id='<?=$registro['cod_mv']?>'
							data-toggle='modal' 
							data-target='#mod_cadItem' 
							class='click-item' 
							itemEdit-id='<?=$registro['id_item']?>'><?=$registro['cod_mv']?></td>
						<td> <a href='#' data-toggle='modal' data-target='#mod_cadItem' class='click-item material-icons md-18 ' itemEdit-id='<?=$registro['id_item']?>'>edit</a>
							<a href='#' data-toggle='modal' data-target='#mod_delItem' class='click-itemDel material-icons md-18 btn-delete' itemDelete-id='<?=$registro['id_item']?>'>delete</a></td>
					</tr>
					
					<script>
						$('.click-item').click(function(){

							var id_itemEdit = $(this).attr('itemEdit-id');
							

							$.ajax({
								url: 'controle/listaItemModal.php',
								type: 'POST',
								data: {id: id_itemEdit},
								})

							.done(function(a){
								var dados = JSON.parse(a);
								$('#i_idItem').val(dados['id_item']);
								$('#i_nomeItem').val(dados['nome_item']);
								$('#i_descricaoItem').val(dados['descricao_item']);
								$('#i_codMV').val(dados['cod_mv']);

								})
						
						
						});
					</script>	

					<script>
						$('.click-itemDel').click(function(){

							
							var id_itemDelete = $(this).attr('itemDelete-id');

							$.ajax({
								url: 'controle/listaItemModal.php',
								type: 'POST',
								data: {id: id_itemDelete},
								})

							.done(function(a){
								var dados = JSON.parse(a);
								$('#d_idDelItem').val(dados['id_item']);
								$('#d_nomeDelItem').val(dados['nome_item']);
								$('#d_descricaoDelItem').val(dados['descricao_item']);
								$('#d_codDelMV').val(dados['cod_mv']);

								})
						
						
						});
					</script>


					
				
			<?php } ?>
			</tbody>
				</table>
		<?php } else { ?>
			Erro na consulta no banco de dados!
		<?php } 
		
	}else{	?>

		<h1>Acesso Negado!</h1>

	<?php } ?>
