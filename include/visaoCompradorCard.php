<h6>Visão Comprador:</h6>
<div class="card-deck">


	<div class="card border-info mb-3" style="max-width: 18rem;">
	  <div class="card-header"><h6> Pedidos Abertos (<a class="btn_cadastro" id="controle/listaPedidosAbertos" href="#"><?=$totalPedidos?></a>)</h6></div>
	  <div class="card-body text-info">
	    <!--<h5 class="card-title">Título de Card Info</h5>-->
	    
	    <?php 
		$x = 0;
		
	    while($registro = mysqli_fetch_array($resultado_id4, MYSQLI_ASSOC) AND $x<=4){
			$data = $registro['dt_abertura'];
			$data = implode("/",array_reverse(explode("-",$data)));
			$x++;

			?>
			
			<p style="cursor: pointer" data-toggle='modal' data-target='#mod_acompanhamentoPedido' class="card-text click-acompanhamento" acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$registro['id_pedido']?> - <?=$registro['nome_item']?> - <?=$data?></p>

			
		<?php if($x>4){echo"...";} } ?>
	    </div>
	</div>

	<div class="card border-success mb-3" style="max-width: 18rem;">
	  <div class="card-header"><h6> Disponivel para Retirada (<a class="btn_cadastro" id="controle/listaMeusPedidosRetiradaCompras" href="#"><?=$totalPedidosRetiradaCompras?></a>)</h6></div>
	  <div class="card-body text-success">
	    <!--<h5 class="card-title">Título de Card Info</h5>-->
	    
	    <?php 
		$x = 0;
		
	    while($registro = mysqli_fetch_array($resultado_id15, MYSQLI_ASSOC) AND $x<=4){
			$data = $registro['dt_abertura'];
			$data = implode("/",array_reverse(explode("-",$data)));
			$x++;

			?>
			
			<p style="cursor: pointer" data-toggle='modal' data-target='#mod_acompanhamentoPedido' class="card-text click-acompanhamento" acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$registro['id_pedido']?> - <?=$registro['nome_item']?> - <?=$data?></p>
			

			
		<?php if($x>4){echo"...";} } ?>
	    
	  </div>
	</div>


	
	<div class="card border-warning	 mb-3" style="max-width: 18rem;">
	  <div class="card-header"><h6> Meus Atendimentos (<a class="btn_cadastro" id="controle/listaPedidosAprovadosBD" href="#"><?=$totalPedidosAprovados?></a>)</h6></div>
	  <div class="card-body text-warning">
	    <!--<h5 class="card-title">Título de Card Info</h5>-->
	    
	    <?php /*
		$x = 0;
		
	    while($registro = mysqli_fetch_array($resultado_id10, MYSQLI_ASSOC) AND $x<=4){
			$data = $registro['dt_abertura'];
			$data = implode("/",array_reverse(explode("-",$data)));
			$x++;

			?>
			
			<p class="card-text"><?=$registro['id_pedido']?> - <?=$registro['nome_item']?>(<?=$registro['quantidade']?>) - <?=$data?></p>

			
		<?php if($x>4){echo"...";} } */?>
	    </div>
	</div>	

	<div class="card border-primary mb-3" style="max-width: 18rem;">
	  <div class="card-header"><h6> Pedidos Aprovados/Refazer Orçamento (<a class="btn_cadastro" id="controle/listaPedidosAprovadosBD" href="#"><?=$totalPedidosAprovados?></a>)</h6></div>
	  <div class="card-body text-primary">
	    <!--<h5 class="card-title">Título de Card Info</h5>-->
	    
	    <?php 
		$x = 0;
		
	    while($registro = mysqli_fetch_array($resultado_id7, MYSQLI_ASSOC) AND $x<=4){
			$data = $registro['dt_abertura'];
			$data = implode("/",array_reverse(explode("-",$data)));
			$x++;

			?>
			
			<p style="cursor: pointer" data-toggle='modal' data-target='#mod_acompanhamentoPedido' class="card-text click-acompanhamento" acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$registro['id_pedido']?> - <?=$registro['nome_item']?> - <?=$data?></p>

			
		<?php if($x>4){echo"...";} } ?>
	    </div>
	</div>	
	

</div>
