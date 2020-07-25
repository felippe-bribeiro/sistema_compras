
			
			//Ajax Menu Lateral Direito que encaminha div central
			$(document).ready(function(){
			
				
			

				$('.btn_cadastro').click(function(){
					
					var carrega_url = this.id;
						carrega_url += ".php"
						
					$.ajax({
						url:carrega_url,

						success: function(data){
							//console.log(carrega_url);
							switch (carrega_url){
								case 'controle/listaMeusPedido.php':
								$('#listaPedido').addClass("active");
								$('#navbarDropdown').addClass("active");
								$('#listaItem').removeClass("active");
								$('#listaCentroCusto').removeClass("active");
								$('#home').removeClass("active");
								
								break;

																
								case 'controle/listaItemBD.php':
								$('#listaItem').addClass("active");
								$('#navbarDropdown').addClass("active");
								$('#listaPedido').removeClass("active");
								$('#listaCentroCusto').removeClass("active");
								$('#home').removeClass("active");
								
								break;
								case 'controle/listaCentroCustoBD.php':
								$('#listaCentroCusto').addClass("active");
								$('#navbarDropdown').addClass("active");
								$('#listaItem').removeClass("active");
								$('#listaPedido').removeClass("active");
								$('#home').removeClass("active");

								
								break;
								case 'controle/listaMeusPedidosBD.php':
								$('#listaCentroCusto').addClass("active");
								$('#navbarDropdown').addClass("active");
								$('#listaItem').removeClass("active");
								$('#listaPedido').removeClass("active");
								$('#home').removeClass("active");
								

								
								break;

								case 'controle/listaMeusPedidosConcluidos.php':
								$('#listaCentroCusto').removeClass("active");
								$('#navbarDropdown').addClass("active");
								$('#listaItem').removeClass("active");
								$('#listaPedido').removeClass("active");
								$('#home').removeClass("active");
								

								
								break;

								default:
								$('#home').addClass("active");
								$('#listaCentroCusto').removeClass("active");
								$('#navbarDropdown').removeClass("active");
								$('#listaItem').removeClass("active");
								$('#listaPedido').removeClass("active");


							}
							
							
							$('#div_central').html(data);
						},

						beforeSend: function(){
							
						}


					});
				});



			});
			// Fim Ajax Menu lado Direito
			
		