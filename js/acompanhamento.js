//Acompanhamento listaMeusPedidosBD.php

$('.click-acompanhamento').click(function(){
    			
    var id_acompanhamentoEdit = $(this).attr('acompanhamentoEdit-id');
    

    $.ajax({
        url: 'controle/listaPedidoModal.php',
        type: 'POST',
        data: {id: id_acompanhamentoEdit},
        })
        
        .done(function(a){
            let dataEncerramento = '';
            let horaEncerramento = '';
            let dados = JSON.parse(a);
            let statusPedidoTXT = dados['status_pedido'];
            let aprovacaoChefia = dados['aprovacao_chefia'];
            aprovacaoChefia = aprovacaoName(aprovacaoChefia);
            let aprovacaoDiretoria = dados['aprovacao_diretoria'];
            aprovacaoDiretoria = aprovacaoName(aprovacaoDiretoria);
            let aprovacaoDirex = dados['aprovacao_direx'];
            aprovacaoDirex = aprovacaoName(aprovacaoDirex);
            statusPedidoTXT = nameStatus(statusPedidoTXT);
            let data = new Date(dados['dt_abertura']).toLocaleDateString('pt-BR', {timeZone: 'UTC'});
            if (dados['dt_fechamento'] != null && dados['hrs_fechamento'] != null){
                dataEncerramento = new Date(dados['dt_fechamento']).toLocaleDateString('pt-BR', {timeZone: 'UTC'});
                horaEncerramento = dados['hrs_fechamento'];
            }else{
                dataEncerramento = ""; 
                horaEncerramento = "";
            }
            
            if(dados['status_pedido'] == 3){
                $('#acompanhamento_modal_header').attr('class', 'modal-header text-white bg-success mb-3');

            }else if(dados['status_pedido'] == 2 || dados['status_pedido'] == 4){
                $('#acompanhamento_modal_header').attr('class', 'modal-header text-white bg-primary mb-3');

            }else if(dados['status_pedido'] == 5){
                $('#acompanhamento_modal_header').attr('class', 'modal-header text-white bg-info mb-3');

            }else if(dados['status_pedido'] == 6){
                $('#acompanhamento_modal_header').attr('class', 'modal-header text-white bg-danger mb-3');

            }else if(dados['status_pedido'] == 9){
                $('#acompanhamento_modal_header').attr('class', 'modal-header text-white bg-warning mb-3');

            }else{
                $('#acompanhamento_modal_header').attr('class', 'modal-header text-white bg-primary mb-3');
            }
            
            $('#numeroPedido').html(dados['id_pedido']);
            $('#A_diretoria_resp').html(tipoDiretoria(dados.tipo_direx));
            $('#A_chefia_resp').html(tipoChefia(dados.tipo_gestor));
            $('#btnAcompanhamento').attr('acompanhamentoAdd-id', dados['id_pedido']);
            $('#A_chefia').attr('A_aprovacao-id', dados['id_pedido']);
            $('#A_diretoria').attr('A_aprovacao-id', dados['id_pedido']);
            $('#A_direx').attr('A_aprovacao-id', dados['id_pedido']);
            $('#btnStatus').attr('A_status-id', dados['id_pedido']);
            $('#A_item').html(dados['nome_item']);
            $('#A_quantidade').html(+dados['quantidade']+" "+dados['unidade']);
            $('#A_descricaoItemPedido').html(dados['descricao_item_pedido']);
            $('#A_statusPedido').html(statusPedidoTXT);
            $('#A_requerente').html(dados['first_name']+" "+dados['last_name']+" "+" ("+dados['email']+")" );
            //$('#A_emailRequerente').html(" ("+dados['email']+")");
            $('#A_dataAbertura').html(data+" "+dados['hrs_abertura']);
            $('#A_CentroCusto').html(dados['cc_descricao']+" - "+dados['centro_custo']);
            $('#A_justificativa').html(dados['justificativa_pedido']);
            $('#A_chefia').html(" "+aprovacaoChefia);
            $('#A_diretoria').html(" "+aprovacaoDiretoria);
            $('#A_direx').html(" "+aprovacaoDirex);
            $('#A_dataEncerramento').html(dataEncerramento+" "+horaEncerramento);
            
    })

    $.ajax({
        url: 'controle/listaAcompanhamento.php',
        type: 'POST',
        data: {id: id_acompanhamentoEdit},
        })
    
        .done(function(a){
            //event.preventDefault();
            $('#A_acompanhamentos').html("<div class='card'></div>");
            
            let dados = JSON.parse(a);
            if(dados[0] == null){
                
            }else {
                
                
                let dadosLength = dados.length;
                //console.log(dados);
               // dados2 = dados[0]['acompanhamento_add'];
                let dados3 ='';   
               for(i=0; i<dadosLength; i++){
                //dados3 += "<div class='row'><div class='col-sm-1'></div><div class='col-sm-10 border-bottom rounded bg-dark text-white '>"
                dados3 += "<div class='card'>";
                dados3 += "<h5 class='card-header'>"+dados[i]['first_name']+" "+dados[i]['last_name']+" - ";
                dados3 += dados[i]['dt_time_acompanhamento']+"</h5>";
                //dados3 += "<h5 class='card-title'>ID do Acompanhamento: "+dados[i]['id_acompanhamento']+"</h5>";
                dados3 += "<p class='card-text px-md-5'>"+dados[i]['acompanhamento_add']+"</p></div>"; 
               }
               $('#A_acompanhamentos').html(dados3); 
            }
                       
            
            
    })

    
});