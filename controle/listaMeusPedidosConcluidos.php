<?php
session_start();
include_once('buscaMeusPedidos.php');

	
	

	if($resultado_id2){ ?>
		<span id='msg'></span><table class ='table table-hover'>
		<h1> Meus Pedidos Concluídos (<?=$totalPedidosConcluidos?>): </h1>
				<thead>
					<tr>
						<th scope='col'>Nº Pedido:</th>
						<th scope='col'>Status:</th>
						<th scope='col'>Item:</th>
						<th scope='col'>Quantidade:</th>
						<th scope='col'>Data da Solicitação:</th>
						<th scope='col'>Data da conclusão:</th>
						<th scope='col'>Opções:</th>
					</tr>
				</thead>
				<tbody>
		<?php
		while($registro = mysqli_fetch_array($resultado_id2, MYSQLI_ASSOC)){
			
			include_once('../include/aprovacao.php');
			include('../include/statusPedidoName.php'); 
			
			$data = $registro['dt_abertura'];
			$data = implode("/",array_reverse(explode("-",$data))); 
			$dataConclusao = $registro['dt_fechamento'];
			$dataConclusao = implode("/",array_reverse(explode("-",$dataConclusao))); ?>
			
			
				<tr>
					<td data-toggle='modal'
					 	data-target='#mod_acompanhamentoPedido' 
						class='click-acompanhamento'
						acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$registro['id_pedido']?></td>
					<td data-toggle='modal'
					 	data-target='#mod_acompanhamentoPedido' 
						class='click-acompanhamento'
						acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$statusPedidoTXT?></td>
					<td data-toggle='modal'
					 	data-target='#mod_acompanhamentoPedido' 
						class='click-acompanhamento'
						acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$registro['nome_item']?></td>
					<td data-toggle='modal'
					 	data-target='#mod_acompanhamentoPedido' 
						class='click-acompanhamento'
						acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$registro['quantidade']?></td>
					<td data-toggle='modal'
					 	data-target='#mod_acompanhamentoPedido' 
						class='click-acompanhamento'
						acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$data?> <?=$registro['hrs_abertura']?></td>
					<td data-toggle='modal'
					 	data-target='#mod_acompanhamentoPedido' 
						class='click-acompanhamento'
						acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$dataConclusao?> <?=$registro['hrs_fechamento']?></td>
					<td> <a href='#' data-toggle='modal' data-target='#mod_acompanhamentoPedido' class='click-acompanhamento material-icons md-18 ' acompanhamentoEdit-id='<?=$registro['id_pedido']?>'>edit</a>
						 <a href='#' data-toggle='modal' data-target='#mod_delCC' class='click-ccDel material-icons md-18 btn-delete' ccDelete-id='<?=$registro['justificativa_pedido']?>'>delete</a></td>
				</tr></a>
				
				
		<?php
		} ?>
				</tbody>
			</table>
			<script type="text/javascript" src="js/acompanhamento.js"> </script>
	<?php
	} else { ?>
		Erro na consulta no banco de dados!
	<?php
	} ?>