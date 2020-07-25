<?php
session_start();
include_once('buscaMeusPedidos.php');

	
	

	if($resultado_id){
		
		echo "<span id='msg'></span><table class ='table table-hover'>
		
		<h1> Meus Pedidos ($totalPedidosAbertos): </h1>
				<thead>
					<tr>
						<th scope='col'>Nº Pedido:</th>
						<th scope='col'>Status:</th>
						<th scope='col'>Item:</th>
						<th scope='col'>Quantidade:</th>
						<th scope='col'>Data da Solicitação:</th>
						<th scope='col'>Opções:</th>
					</tr>
				</thead>
				<tbody>";
				
		while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
			//var_dump($registro);
			
			include_once('../include/aprovacao.php');
			include('../include/statusPedidoName.php');
			
			$data = $registro['dt_abertura'];
			$data = implode("/",array_reverse(explode("-",$data)));
			
			echo "<tr data-toggle='modal' data-target='#mod_cadPedido'>
					<td>".$registro['id_pedido']."</td>
					<td>".$statusPedidoTXT."</td>
					<td>".$registro['nome_item']."</td>
					<td>".$registro['quantidade']."</td>
					<td>".$data." ".$registro['hrs_abertura']."</td>
					<td> <a href='#' data-toggle='modal' data-target='#mod_cadcc' class='click-cc material-icons md-18 ' ccEdit-id='".$registro['justificativa_pedido']."'>edit</a>
						<a href='#' data-toggle='modal' data-target='#mod_delCC' class='click-ccDel material-icons md-18 btn-delete' ccDelete-id='".$registro['justificativa_pedido']."'>delete</a>"."</td>
				  </tr></a>";
				
				/*echo "
				<script>$('.click-cc').click(function(){

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
					
					
				});</script>	

				<script>$('.click-ccDel').click(function(){

						
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
					
					
				});</script>


				";
				*/

			
		}
		echo "</tbody>
			</table>";
	} else {
		echo 'Erro na consulta no banco de dados!';
	}

?>


		
		

	