$(document).ready(function(){
          

    var $msgok ='';
  //Atualização da lista quando ddar submit
  //Lista Centro de Custo
    function atualizaCC(){
    //carregar os tweets 
    $.ajax({
      url: 'controle/pesquisaMenuSelectBD.php',

      success: function(data) {
        $('#phpUP').html(data);
      }
    });


    $.ajax({
      url: 'controle/listaCentroCustoBD.php',

      success: function(data) {
        $('#div_central').html(data);
        $('#msg').html($msgok);
      }
    });
    }


    //Lista de Itens
    function atualizaItem(){
    //carregar os tweets 
    
    $.ajax({
      url: 'controle/listaItemBD.php',

      success: function(data) {
        $('#div_central').html(data);
        $('#msg').html($msgok);
      }
    });
    }

    

   //Fim da atualização da lista

    //Lista de Pedidos
    function atualizaAddPedido(){
    //carregar os tweets 

    $.ajax({
      url: 'controle/listaAguardandoAprovacaoBD.php',

      success: function(data) {
        $('#div_central').html(data);
        $('#msg').html($msgok);
      }
    });
    }

   
 


  //Cadastro de centro de custo
  $('#formCadastroCC').on('submit', function(event){
    event.preventDefault();

    //Receber os dados do formulário
    var dados = $("#formCadastroCC").serialize();
    $.post("controle/cadcentrocusto.php", dados, function (retorna){
      switch(retorna){
        case 'ok':
          //Alerta 
          atualizaCC();
          //$("#msg").html('<div class="alert alert-success alert-dismissible fade show" role="alert">Centro de Custo cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          $msgok = '<div class="alert alert-success alert-dismissible fade show" role="alert">Centro de Custo cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          //Limpar os campo
          $('#formCadastroCC')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadcc').modal('hide');
          break;
        case 'up':
          //Alerta 
          atualizaCC();
          //$("#msg").html('<div class="alert alert-success alert-dismissible fade show" role="alert">Centro de Custo cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          $msgok = '<div class="alert alert-success alert-dismissible fade show" role="alert">Centro de Custo atualizado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          //Limpar os campo
          $('#formCadastroCC')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadcc').modal('hide');
          break;

        case '001':
          //Alerta 
          $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro ao tentar realizar o registro do centro de custo! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          $('#formCadastroCC')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadcc').modal('hide');
          break;

        case '002':
          //Alerta 
          $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro: Centro de Custo Já Cadastrado! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          $('#formCadastroCC')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadcc').modal('hide');
          break;

        case '003':
          //Alerta 
          $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro: Descrição Já Cadastrada! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          $('#formCadastroCC')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadcc').modal('hide');
          break;

        case '002003':
          //Alerta
          $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro: Descrição e centro de custo Já Cadastrados! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          $('#formCadastroCC')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadcc').modal('hide');
          break;

        case '004':
          //Alerta
          $("#msgCentroCusto").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro: Campo Descrição e/ou Centro de Custo não podem estar vazios! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
         // $('#formCadastroCC')[0].reset();
          
          //Fechar a janela modal cadastrar
          //$('#mod_cadcc').modal('hide');
          break;

        case '005':
          //Alerta
          $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro: Campo Centro de Custo Apenas números! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          $('#formCadastroCC')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadcc').modal('hide');
          break;

        default:
          //Alerta
          $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro ao processar a solicitação! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          $('#formCadastroCC')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadcc').modal('hide');
          break;

         // $('#div_central').html('controle/listaCentroCustoBD.php');
      }            
    });
  });


  //Deletar Centro De Custo

  $('#formDelCC').on('submit', function(event){
    event.preventDefault();
    //Receber os dados do formulário
    var dados = $("#formDelCC").serialize();
    $.post("controle/deletaCC.php", dados, function (retorna){

      switch(retorna){
        case 'ok':
          //Alerta 
          //$("#msg").html('<div class="alert alert-success alert-dismissible fade show" role="alert">Item cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          $msgok = '<div class="alert alert-success alert-dismissible fade show" role="alert">Centro de Custo Deletado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          atualizaCC();
          //Limpar os campo
          $('#formDelCC')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_delCC').modal('hide');
          break;

        default:
          //Alerta
          $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro ao processar a solicitação! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          $('#formDelCC')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_delCC').modal('hide');
          break;



      }            
    });
  });
  // Script Fim Cadastra Centro de Custo

  //Cadastro de Itens
  $('#formCadastroItens').on('submit', function(event){
    event.preventDefault();
    //Receber os dados do formulário
    var dados = $("#formCadastroItens").serialize();
    $.post("controle/caditem.php", dados, function (retorna){

      switch(retorna){
        case 'ok':
          //Alerta 
          //$("#msg").html('<div class="alert alert-success alert-dismissible fade show" role="alert">Item cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          $msgok = '<div class="alert alert-success alert-dismissible fade show" role="alert">Item cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          atualizaItem();
          //Limpar os campo
          $('#formCadastroItens')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadItem').modal('hide');
          break;

        case 'up':
          //Alerta 
          //$("#msg").html('<div class="alert alert-success alert-dismissible fade show" role="alert">Item cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          $msgok = '<div class="alert alert-success alert-dismissible fade show" role="alert">Item Atualizado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          atualizaItem();
          //Limpar os campo
          $('#formCadastroItens')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadItem').modal('hide');
          break;

        case '001':
          //Alerta 
          $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro ao tentar realizar o registro do Item! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          $('#formCadastroItens')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadItem').modal('hide');
          break;

        case '002':
          //Alerta 
          $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro: Item Já Cadastrado! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          $('#formCadastroItens')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadItem').modal('hide');
          break;

        case '003':
          //Alerta
          $("#msgItem").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro: Preencha todos os campos! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
         // $('#formCadastroItens')[0].reset();
          
          //Fechar a janela modal cadastrar
          //$('#mod_cadItem').modal('hide');
          break;

        case '004':
          //Alerta
          
          $("#msgItem").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro: Campo Código MV Apenas números! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          //$('#formCadastroItens')[0].reset();
          
          //Fechar a janela modal cadastrar
          //$('#mod_cadItem').modal('hide');
          break;

        default:
          //Alerta
          
          $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro ao processar a solicitação! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          $('#formCadastroItens')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadItem').modal('hide');
          break;



      }            
    });
  });

//Deletar Itens

  $('#formDelItem').on('submit', function(event){
    event.preventDefault();
    //Receber os dados do formulário
    var dados = $("#formDelItem").serialize();
    $.post("controle/deletaItem.php", dados, function (retorna){

      switch(retorna){
        case 'ok':
          //Alerta 
          //$("#msg").html('<div class="alert alert-success alert-dismissible fade show" role="alert">Item cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          $msgok = '<div class="alert alert-success alert-dismissible fade show" role="alert">Item Deletado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          atualizaItem();
          //Limpar os campo
          $('#formDelItem')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_delItem').modal('hide');
          break;

        default:
          //Alerta
          $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro ao processar a solicitação! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          $('#formDelItem')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_delItem').modal('hide');
          break;



      }            
    });
  });
  // Script Fim Cadastra Centro de Custo
  
  //Adicionar Pedidos
  $('#formAddPedido').on('submit', function(event){
    event.preventDefault();
    //Receber os dados do formulário
    var dados = $("#formAddPedido").serialize();
    $.post("controle/cadPedido.php", dados, function (retorna){

      switch(retorna){
        case 'ok':
          //Alerta 
          //$("#msg").html('<div class="alert alert-success alert-dismissible fade show" role="alert">Item cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          $msgok = '<div class="alert alert-success alert-dismissible fade show" role="alert">Pedido cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          atualizaAddPedido();
          //Limpar os campo
          $('#formAddPedido')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadPedido').modal('hide');
          break;

        case 'up':
          //Alerta 
          //$("#msg").html('<div class="alert alert-success alert-dismissible fade show" role="alert">Item cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          $msgok = '<div class="alert alert-success alert-dismissible fade show" role="alert">Pedido Atualizado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          atualizaAddPedido();
          //Limpar os campo
          $('#formAddPedido')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadPedido').modal('hide');
          break;


        case '003':
          //Alerta
          $("#msgItem").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro: Preencha todos os campos! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
         // $('#formAddPedido')[0].reset();
          
          //Fechar a janela modal cadastrar
          //$('#mod_cadPedido').modal('hide');
          break;

        default:
          //Alerta
          //alert(retorna);
          $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro ao processar a solicitação! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          $('#formAddPedido')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_cadPedido').modal('hide');
          break;



      }            
    });
  });

  ///Inicio ADICIONAR ACOMPANHAMENTO
   $('#formaddAcompanhamento').on('submit', function(event){
      event.preventDefault();
      //Receber os dados do formulário
      var dados = $("#formaddAcompanhamento").serialize();
      /*var data = new FormData();
      var doc = "acompanhamento_ID="+document.getElementById ("acompanhamento_ID").value;    
      data.append('uploadAcompanhamento', $('#uploadAcompanhamento')[0].files[0]);
      console.log(doc);
      $.ajax({
        url: 'controle/cadAcompanhamento.php',
        data: data,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function(data)
        {
          alert(data);
        }
      })
      
      console.log("1 -"+dados);*/
      
      $.post("controle/cadAcompanhamento.php", dados, function (retorna){
        
        switch(retorna){
        
          case 'ok':
            //console.log("4 "+retorna);
            //Alerta 
            //$("#msg").html('<div class="alert alert-success alert-dismissible fade show" role="alert">Item cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            $msgok = '<div class="alert alert-success alert-dismissible fade show" role="alert">Acompanhamento Adicionado com Sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
          // atualizaAcompanhamento();
            //Limpar os campo
            $('#formaddAcompanhamento')[0].reset();
            
            //Fechar a janela modal cadastrar
            $('#mod_addAcompanhamento').modal('hide');
            $('#msg').html($msgok);
            break;

          default:
            //console.log("5 "+retorna);
            //Alerta
            
            $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro ao processar a solicitação! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            
            //Limpar os campo
            $('#formaddAcompanhamento')[0].reset();
            
            //Fechar a janela modal cadastrar
            $('#mod_addAcompanhamento').modal('hide');
            $('#msg').html($msgok);
            break;



        }            
      });
    });
  // Script Fim Adiciona Acompanhamento

   ///Inicio Modal Aprovação
   $('#formAprovacao').on('submit', function(event){
    event.preventDefault();
    //Receber os dados do formulário
    var dados = $("#formAprovacao").serialize();
    //console.log(dados);
    $.post("controle/cadAprovacao.php", dados, function (retorna){
      //console.log(retorna);
      
      switch(retorna){
        case 'ok':
          //Alerta 
          //$("#msg").html('<div class="alert alert-success alert-dismissible fade show" role="alert">Item cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          $msgok = '<div class="alert alert-success alert-dismissible fade show" role="alert">Item Atualizado Com Sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        // atualizaAcompanhamento();
          //Limpar os campo
          $('#formAprovacao')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_aprovacao').modal('hide');
          $('#msg').html($msgok);
          
          window.location.reload(true)
          alert("Registro Atualizado com sucesso");
          break;
          
          

        default:
          //Alerta
          
          $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro ao processar a solicitação! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          $('#formAprovacao')[0].reset();
          
          //Fechar a janela modal cadastrar
          $('#mod_aprovacao').modal('hide');
          $('#msg').html($msgok);
          window.location.reload(true)
          alert("Erro ao processar a solicitação!");
          break;



      }            
    });
  });
// Script Fim Modal  Aprovação


///Inicio Modal Alterar Status


   $('#formStatus').on('submit', function(event){
    event.preventDefault();
    //Receber os dados do formulário
    var dados = $("#formStatus").serialize();
    //console.log(dados);
    //console.log(dados);
    $.post("controle/cadStatus.php", dados, function (retorna){
      //console.log(retorna);
      //console.log(retorna);
      switch(retorna){
        
        case 'ok':
          //console.log(retorna);
          //Alerta 
          //$("#msg").html('<div class="alert alert-success alert-dismissible fade show" role="alert">Item cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          $msgok = '<div class="alert alert-success alert-dismissible fade show" role="alert">Item Atualizado Com Sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        // atualizaAcompanhamento();
          //Limpar os campo
          $('#formStatus')[0].reset();
          //Fechar a janela modal cadastrar
          $('#mod_status').modal('hide');
          $('#msg').html($msgok);
          window.location.reload(true)
          alert("Registro Atualizado com sucesso");
          break;
   
        default:
          //Alerta
          
          $("#msg").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Erro ao processar a solicitação! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
          
          //Limpar os campo
          $('#formStatus')[0].reset();

          //Fechar a janela modal cadastrar
          $('#mod_status').modal('hide');
          $('#msg').html($msgok);
          window.location.reload(true)
          alert("Erro ao processar a solicitação!");
          break;



      }            
    });
  });
// Script Fim Modal alterar Status




});

//Fim document Ready

$('.click-addAcompanhamento').click(function(){

  var id_acompanhamentoAdd = $(this).attr('acompanhamentoAdd-id');
  

  $.ajax({
    url: 'controle/listaCCModal.php',
    type: 'POST',
    data: {id: id_acompanhamentoAdd},
  })

  .done(function(a){ 
    $('#acompanhamento_ID').attr('value', id_acompanhamentoAdd);
    $('#numeroPedidoAdd').html(id_acompanhamentoAdd);
                  

  })





});


$('.click-aprovar').click(function(){

  var id_aprovar = $(this).attr('A_aprovacao-id');
  //console.log(id_aprovar);

  $.ajax({
    url: 'controle/listaCCModal.php',
    type: 'POST',
    data: {id: id_aprovar},
  })

  .done(function(a){ 
    $('#aprovacao_ID').attr('value', id_aprovar);
    $('#numeroPedidoAprovacao').html(id_aprovar);
                  

  })

});

$('.click-status').click(function(){

  var id_status = $(this).attr('A_status-id');
  //console.log("ID: "+id_status);

  $.ajax({
    url: 'controle/listaCCModal.php',
    type: 'POST',
    data: {id: id_status},
  })

  .done(function(a){ 
    $('#status_ID').attr('value', id_status);
    $('#numeroPedidoStatus').html(id_status);
                  

  })





});