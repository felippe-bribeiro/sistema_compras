

<h6>Visão Pessoal:</h6>
<div class="card-deck">
	
	<div class="card border-success mb-3" style="max-width: 18rem;">
	  <div class="card-header"><h6> Disponivel para Retirada (<a class="btn_cadastro" id="controle/listaMeusPedidosRetirada" href="#"><?=$totalPedidosRetirada?></a>)</h6></div>
	  <div class="card-body text-success">
	    <!--<h5 class="card-title">Título de Card Info</h5>-->
	    
	    <?php 
		$x = 0;
		
	    while($registro = mysqli_fetch_array($resultado_id14, MYSQLI_ASSOC) AND $x<=4){
			$data = $registro['dt_abertura'];
			$data = implode("/",array_reverse(explode("-",$data)));
			$x++;

			?>
			
			<p style="cursor: pointer" data-toggle='modal' data-target='#mod_acompanhamentoPedido' class="card-text click-acompanhamento" acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$registro['id_pedido']?> - <?=$registro['nome_item']?> - <?=$data?></p>
			

			
		<?php if($x>4){echo"...";} } ?>
	    
	  </div>
	</div>


	
	<div class="card border-warning mb-3" style="max-width: 18rem;">
	  <div class="card-header"><h6> Meus Pedidos Pendentes (<a class="btn_cadastro" id="controle/listaMeusPedidosPendentes" href="#"><?=$totalPedidosPendentes?></a>)</h6></div>
	  <div class="card-body text-warning">
	    <!--<h5 class="card-title">Título de Card Info</h5>-->
	    
	    <?php 
		$x = 0;
		
	    while($registro = mysqli_fetch_array($resultado_id3, MYSQLI_ASSOC) AND $x<=4){
			$data = $registro['dt_abertura'];
			$data = implode("/",array_reverse(explode("-",$data)));
			$x++;

			?>
			
			<p style="cursor: pointer" data-toggle='modal' data-target='#mod_acompanhamentoPedido' class="card-text click-acompanhamento" acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$registro['id_pedido']?> - <?=$registro['nome_item']?> - <?=$data?></p>
			

			
		<?php if($x>4){echo"...";} } ?>
	    
	  </div>
	</div>

	<div class="card border-info mb-3" style="max-width: 18rem;">
	  <div class="card-header"><h6> Aguardando Aprovação (<a class="btn_cadastro" id="controle/listaAguardandoAprovacaoBD" href="#"><?=$totalMeusPedidosAguardandoAprovacao?></a>)</h6></div>
	  <div class="card-body text-info">
	    <!--<h5 class="card-title">Título de Card Info</h5>-->
	    
	    <?php 
		$x = 0;
		
	    while($registro = mysqli_fetch_array($resultado_id5, MYSQLI_ASSOC) AND $x<=4){
			$data = $registro['dt_abertura'];
			$data = implode("/",array_reverse(explode("-",$data)));
			$x++;

			?>
			
			<p style="cursor: pointer" data-toggle='modal' data-target='#mod_acompanhamentoPedido' class="card-text click-acompanhamento" acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$registro['id_pedido']?> - <?=$registro['nome_item']?> - <?=$data?></p>

			
		<?php if($x>4){echo"...";} } ?>
	    
	  </div>
	</div>


</div>
