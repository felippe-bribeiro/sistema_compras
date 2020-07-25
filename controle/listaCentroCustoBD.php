<?php

	session_start();
	$tipo = $_SESSION['tipo'];
	if(!isset($_SESSION['email'])){
		header('Location: index.php?erro=1');
	}
	if ($tipo == "compras" OR $tipo == 'supadm' ){
		require_once('db.class.php');

		$id_usuario = $_SESSION['id_usuario'];

		$objDb = new db();
		$link = $objDb->conecta_mysql();
		
		/*$sql = " SELECT DATE_FORMAT(t.data_inclusao, '%d %b %Y %T') AS data_inclusao_formatada, t.tweet, u.usuario ";
		$sql.= " FROM tweet AS t JOIN usuarios AS u ON (t.id_usuario = u.id) ";
		$sql.= " WHERE id_usuario = $id_usuario ";
		$sql.= " OR id_usuario IN (select seguindo_id_usuario from usuarios_seguidores where id_usuario = $id_usuario) ";
		$sql.= " ORDER BY data_inclusao DESC ";*/

		$sql = " SELECT * from lc_centro_custo ";
		
		$resultado_id = mysqli_query($link, $sql);

		if($resultado_id){ ?>
			<span id='msg'></span><table class ='table table-hover'>
			<button type='button' class='btn btn-primary btn_cadastro float-right' onclick='apagaFormCC();' id='listaCentroCustoBD' 
			data-toggle='modal' data-target='#mod_cadcc'>Adicionar Centro de Custo</button>
				<h1> Lista de Centro de Custo: </h1>
					<thead>
						<tr>
							<th scope='col'>Centro de Custo:</th>
							<th scope='col'>Descrição do Centro de Custo:</th>
							<th scope='col'>Opções:</th>
						</tr>
					</thead>
					<tbody>
			<?php
			while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){ ?>
					<tr>
						<td data-toggle='modal'
							data-target='#mod_cadcc' 
							class='click-cc' 
							ccEdit-id='<?=$registro['id_centro_custo']?>'><?=$registro['centro_custo']?></td>
						<td data-toggle='modal'
							data-target='#mod_cadcc' 
							class='click-cc' 
							ccEdit-id='<?=$registro['id_centro_custo']?>'><?=$registro['cc_descricao']?></td>
						<td> <a href='#' data-toggle='modal' data-target='#mod_cadcc' class='click-cc material-icons md-18 ' ccEdit-id='<?=$registro['id_centro_custo']?>'>edit</a>
							<a href='#' data-toggle='modal' data-target='#mod_delCC' class='click-ccDel material-icons md-18 btn-delete' ccDelete-id='<?=$registro['id_centro_custo']?>'>delete</a></td>
					</tr>
					
					
					<script>
						$('.click-cc').click(function(){

							var id_ccEdit = $(this).attr('ccEdit-id');
							

							$.ajax({
								url: 'controle/listaCCModal.php',
								type: 'POST',
								data: {id: id_ccEdit},
							})

							.done(function(a){
								var dados = JSON.parse(a);
								$('#d_iCC').val(dados['id_centro_custo']);
								$('#i_ccDesscricao').val(dados['cc_descricao']);
								$('#i_CentroCusto').val(dados['centro_custo']);
								

							})
						
						
						});
					</script>	

					<script>
						$('.click-ccDel').click(function(){

							
							var id_ccDelete = $(this).attr('ccDelete-id');

							$.ajax({
								url: 'controle/listaccModal.php',
								type: 'POST',
								data: {id: id_ccDelete},
							})

							.done(function(a){
								var dados = JSON.parse(a);
								$('#d_idCC').val(dados['id_centro_custo']);
								$('#d_centroCusto').val(dados['centro_custo']);
								$('#d_ccDescricao').val(dados['cc_descricao']);

								

							})
						
						
						});
					</script>


			<?php
			} ?>
			</tbody>
		</table>
		<?php
		} else { ?>
			Erro na consulta no banco de dados!
		<?php
		}
	}else { ?>
		<h1>Acesso Negado!</h1>
	<?php
	} ?>