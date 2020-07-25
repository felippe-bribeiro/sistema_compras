<h6>Visão Gestor:</h6>
<div class="card-deck">

	<?php

	$tipoDirex = $_SESSION['tipo_direx'];
	$tipo = $_SESSION['tipo'];
	

	if($tipoDirex != 0){
		include_once('include/direxCard.php');
	}
	?>

<div class="card border-info mb-3" style="max-width: 18rem;">
	<div class="card-header"><h6> Aprovar Orçamento (<a class="btn_cadastro" id="controle/listaAprovarOrcamento" href="#"><?=$totalAprovarOrcamento?></a>)</h6></div>
	  <div class="card-body text-info">
	    <!--<h5 class="card-title">Título de Card Info</h5>-->
	    
	    <?php 
		$x = 0;
		
	    while($registro = mysqli_fetch_array($resultado_id13, MYSQLI_ASSOC) AND $x<=4){
			$data = $registro['dt_abertura'];
			$data = implode("/",array_reverse(explode("-",$data)));
			$x++;

			?>
			
			<p style="cursor: pointer" data-toggle='modal' data-target='#mod_acompanhamentoPedido' class="card-text click-acompanhamento" acompanhamentoEdit-id='<?=$registro['id_pedido']?>'><?=$registro['id_pedido']?> - <?=$registro['nome_item']?> - <?=$data?></p>

			
		<?php if($x>4){echo"...";} } ?>
	    
	  </div>
	</div>
	
</div>
