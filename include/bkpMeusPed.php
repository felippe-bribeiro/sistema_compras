<div class="card border-success mb-3" style="max-width: 18rem;">
	  <div class="card-header"><h6>Meus Pedidos Concluídos (<a class="btn_cadastro" id="controle/listaMeusPedidosConcluidos" href="#"><?=$totalPedidosConcluidos?></a>)</h6></div>
	  <div class="card-body text-success">
	    <!--<h5 class="card-title">Título de Card Success</h5>-->

		<?php 
		
		//$data = implode("-",array_reverse(explode("/",$data)));
		
	    $x = 0;
	    while($registro = mysqli_fetch_array($resultado_id2, MYSQLI_ASSOC) AND $x<=4){
			$data = $registro['dt_fechamento'];
			$data = implode("/",array_reverse(explode("-",$data)));
			$x++;

			?>
			
			<p style="cursor: pointer" data-toggle='modal' data-target='#mod_acompanhamentoPedido' class="card-text click-acompanhamento" acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$registro['id_pedido']?> - <?=$registro['nome_item']?> - <?=$data?></p>

			
		<?php if($x>4){echo"...";} } ?>


	  </div>
	</div>


    <div class="card border-danger  mb-3" style="max-width: 18rem;">
	  <div class="card-header"><h6>Meus Pedidos Negados (<a class="btn_cadastro" id="controle/listaMeusPedidosNegados" href="#"><?=$totalMeusPedidosNegados?></a>)</h6></div>
	  <div class="card-body text-danger">
	    <!--<h5 class="card-title">Título de Card Success</h5>-->

		<?php 
		
		//$data = implode("-",array_reverse(explode("/",$data)));
		
	    $x = 0;
	    while($registro = mysqli_fetch_array($resultado_id10, MYSQLI_ASSOC) AND $x<=4){
			$data = $registro['dt_fechamento'];
			$data = implode("/",array_reverse(explode("-",$data)));
			$x++;

			?>
			
			<p style="cursor: pointer" data-toggle='modal' data-target='#mod_acompanhamentoPedido' class="card-text click-acompanhamento" acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$registro['id_pedido']?> - <?=$registro['nome_item']?> - <?=$data?></p>

			
		<?php if($x>4){echo"...";} } ?>


	  </div>
	</div>