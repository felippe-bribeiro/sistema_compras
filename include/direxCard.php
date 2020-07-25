
<div class="card border-info mb-3" style="max-width: 18rem;">
		
	  <div class="card-header"><h6> Aprovação <?=tipo($tipo)?> (<a class="btn_cadastro" id="controle/listaAguardandoAprovacaoDiretoriaBD" href="#"><?=$totalPedidosAguardandoAprovacao?></a>)</h6></div>
	  <div class="card-body text-info">
	    <!--<h5 class="card-title">Título de Card Info</h5>-->
	    
	    <?php 
		$x = 0;
		
	    while($registro = mysqli_fetch_array($resultado_id6, MYSQLI_ASSOC) AND $x<=4){
			$statusPedidoTXT = $registro['status_pedido'];
			$data = $registro['dt_abertura'];
			$data = implode("/",array_reverse(explode("-",$data)));
			switch ($statusPedidoTXT){
				case '1':
					$statusPedidoTXT = "Novo Pedido";
					break;
				case '2':
					$statusPedidoTXT = "Pendente";
					break;
				case '3':
					$statusPedidoTXT = "Concluído";
					break;
			} 

			$x++;

			?>
			
			<p style="cursor: pointer" data-toggle='modal' data-target='#mod_acompanhamentoPedido' 
			class="card-text click-acompanhamento" acompanhamentoEdit-id='<?=$registro['id_pedido']?>'>
			<?=$registro['id_pedido']?> - <?=$registro['nome_item']?> - <?=$data?></p>

			
		<?php if($x>4){echo"...";} } ?>
	    
	  </div>
	</div>
	