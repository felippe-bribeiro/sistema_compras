<?php 

$nome = $_SESSION['nome']; 

include_once('controle/buscaMeusPedidos.php');

?>



<h1>Seja Bem Vindo: </h1><h4><?php echo $nome; ?></h4>



<div class="card-deck">
	<div class="card border-info mb-3" style="max-width: 18rem;">
	  <div class="card-header"><h6> Meus Pedidos Abertos (<a class="btn_cadastro" id="controle/listaMeusPedidosBD" href="#"><?=$totalPedidosAbertos?></a>)</h6></div>
	  <div class="card-body text-info">
	    <!--<h5 class="card-title">Título de Card Info</h5>-->
	    
	    <?php 
		$x = 0;
		
	    while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC) AND $x<=4){
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
			
			<p class="card-text"><?=$registro['id_pedido']?> - <?=$registro['nome_item']?>(<?=$registro['quantidade']?>) - <?=$data?></p>

			
		<?php if($x>4){echo"...";} } ?>
	    
	  </div>
	</div>

	<div class="card border-success mb-3" style="max-width: 18rem;">
	  <div class="card-header"><h6>Meus Pedidos Concluídos (<a class="btn_cadastro" id="controle/listaMeusPedidosConcluidos" href="#"><?=$totalPedidosConcluidos?></a>)</h6></div>
	  <div class="card-body text-success">
	    <!--<h5 class="card-title">Título de Card Success</h5>-->

		<?php 
		$data = date('d/m/Y');
		//$data = implode("-",array_reverse(explode("/",$data)));
		
	    $x = 0;
	    while($registro = mysqli_fetch_array($resultado_id2, MYSQLI_ASSOC) AND $x<=4){


			$x++;

			?>
			
			<p class="card-text"><?=$registro['id_pedido']?> - <?=$registro['nome_item']?>(<?=$registro['quantidade']?>) - <?=$data?></p>

			
		<?php if($x>4){echo"...";} } ?>


	  </div>
	</div>
</div>

<div class="card border-warning mb-3" style="max-width: 18rem;">
	  <div class="card-header"><h6>Meus Pedidos Pendentes (<a class="btn_cadastro" id="controle/listaMeusPedidosPendentes" href="#"><?=$totalPedidosPendentes?></a>)</h6></div>
	  <div class="card-body text-warning">
	    <!--<h5 class="card-title">Título de Card Success</h5>-->

		<?php 
		$data = date('d/m/Y');
		//$data = implode("-",array_reverse(explode("/",$data)));
		
	    $x = 0;
	    while($registro = mysqli_fetch_array($resultado_id3, MYSQLI_ASSOC) AND $x<=4){


			$x++;

			?>
			
			<p class="card-text"><?=$registro['id_pedido']?> - <?=$registro['nome_item']?>(<?=$registro['quantidade']?>) - <?=$data?></p>

			
		<?php if($x>4){echo"...";} } ?>


	  </div>
	</div>
</div>

