
<!-- Modal Centro de Custo-->
<!-- Script Cadastro  -->

    <script>


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
          function atualizaPedido(){
          //carregar os tweets 

          $.ajax({
            url: 'controle/listaMeusPedidosBD.php',

            success: function(data) {
              $('#div_central').html(data);
              $('#msg').html($msgok);
            }
          });
          }

         //Fim da atualização da lista


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
                atualizaPedido();
                //Limpar os campo
                $('#formAddPedido')[0].reset();
                
                //Fechar a janela modal cadastrar
                $('#mod_cadPedido').modal('hide');
                break;

              case 'up':
                //Alerta 
                //$("#msg").html('<div class="alert alert-success alert-dismissible fade show" role="alert">Item cadastrado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                $msgok = '<div class="alert alert-success alert-dismissible fade show" role="alert">Pedido Atualizado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                atualizaPedido();
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





      });


    </script>

    
<!-- Modal Cadastro centro de custo -->

<div class="modal fade" id="mod_cadcc" tabindex="-1" role="dialog" aria-labelledby="mod_cadcc" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCentroCusto">Cadastro de Centro de Custo:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="formCadastroCC">
          <div class="form-group">

            <input type="text" class="form-control" id="d_iCC" name="idCC" hidden="true">

            <label for="l_CentroCusto" class="col-form-label">Centro de Custo:</label>
            <input type="number" min="1"class="form-control" id="i_CentroCusto" name="centroCusto" required="true">

            <label for="l_ccDescricao" class="col-form-label">Descrição do Centro de Custo:</label>
            <input type="text" class="form-control" id="i_ccDesscricao" name="ccDescricao" required="true">

            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success" name="cadCentroCusto" id="cadCentroCusto">Enviar</button>
        </form><span id="msgCentroCusto"></span></div>
      </div>
    </div>
  </div>
</div>


<!-- Modal Del Centro de Custo -->
<div class="modal fade" id="mod_delCC" tabindex="-1" role="dialog" aria-labelledby="mod_delCC" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modalItem">Deseja Realmente apagar o Centro de Custo Selecionado ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="formDelCC">
          <div class="form-group">

            <input type="text" class="form-control" id="d_idCC" name="idCCDel" hidden="true">

            <label for="l_descricaoItem" class="col-form-label">Centro de Custo:</label>
            <input type="text" class="form-control" id="d_centroCusto" name="centroCustoDel" disabled="true">

            <label for="l_nomeItem" class="col-form">Descrição do Centro de Custo:</label>
            <input type="text" class="form-control" id="d_ccDescricao" name="ccDescricaoDel" disabled="true">

          
        
      </div>
      <div class="modal-footer">
        
        <button type="button " class="btn btn-secondary btn-reset" data-dismiss="modal" >Fechar</button>
        <button type="submit" class="btn btn-danger" name="delCC" id="delCC">Apagar</button>
        </form><span id="msgCentroCusto"></span></div>
      </div>
    </div>
  </div>
</div>

<!-- Fim Modal Centro de Custo-->

<!-- Modal Item-->


<div class="modal fade" id="mod_cadItem" tabindex="-1" role="dialog" aria-labelledby="mod_item" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalItem">Cadastro de Itens:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="formCadastroItens">
          <div class="form-group">

            <input type="text" class="form-control" id="i_idItem" name="idItem" hidden="true">

            <label for="l_nomeItem" class="col-form">Nome do item:</label>
            <input type="text" class="form-control" id="i_nomeItem" name="nomeItem" required="true">

            <label for="l_descricaoItem" class="col-form-label">Descrição do item:</label>
            <input type="text" class="form-control" id="i_descricaoItem" name="descricaoItem" required="true">

            <label for="l_codMV" class="col-form-label">Código MV:</label>
            <input type="number" min="1" max="99999999999" class="form-control" id="i_codMV" name="codMV">
          
        
      </div>
      <div class="modal-footer">
        
        <button type="button " class="btn btn-secondary btn-reset" data-dismiss="modal" >Fechar</button>
        <button type="submit" class="btn btn-success" name="cadItem" id="cadItem" onclick="ReloadPHP();">Enviar</button>
        </form><span id="msgItem"></span></div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Del Item -->
<div class="modal fade" id="mod_delItem" tabindex="-1" role="dialog" aria-labelledby="mod_delItem" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modalItem">Deseja Realmente apagar o Item Selecionado ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="formDelItem">
          <div class="form-group">

            <input type="text" class="form-control" id="d_idDelItem" name="idDelItem" hidden="true">

            <label for="l_nomeItem" class="col-form">Nome do item:</label>
            <input type="text" class="form-control" id="d_nomeDelItem" name="nomeDelItem" disabled="true">

            <label for="l_descricaoItem" class="col-form-label">Descrição do item:</label>
            <input type="text" class="form-control" id="d_descricaoDelItem" name="descricaoDelItem" disabled="true">

            <label for="l_codMV" class="col-form-label">Código MV:</label>
            <input type="number" min="1" max="99999999999" class="form-control" id="d_codDelMV" name="codDelMV" disabled="true">
          
        
      </div>
      <div class="modal-footer">
        
        <button type="button " class="btn btn-secondary btn-reset" data-dismiss="modal" >Fechar</button>
        <button type="submit" class="btn btn-danger" name="delItem" id="delItem">Apagar</button>
        </form><span id="msgItem"></span></div>
      </div>
    </div>
  </div>
</div>




<!-- Fim Modal Item-->

<!-- Modal Add pedido-->

<div class="modal fade" id="mod_cadPedido" tabindex="-1" role="dialog" aria-labelledby="mod_cadPedido" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalcadPedido">Adicionar novo pedido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="formAddPedido">
          <div class="form-group">
            <label for="l_itemPed" class="col-form-label">Item:</label><br>
            <select id="id_item" name="id_item" class="custom-select">
            <?php while($registro = mysqli_fetch_array($resultado_item, MYSQLI_ASSOC)){ ?>
              <option value="<?= $registro['id_item'] ?>"><?= $registro['nome_item'] ?></option>
            <?php } ?>
            </select>
            <!--<input type="text" class="form-control" id="id_item" name="id_item" />-->
          </div>
          <div class="form-group">
              <label for="l_descricaoItem" class="col-form-label">Descrição do item:</label>
              <textarea class="form-control" id="descricaoItem" name="descricaoItem" required="true"></textarea>
          </div>
          <div class="form-group">
            <label for="l_CentroCustoPed" class="col-form-label">Centro de Custo:</label><br>
            <select id="id_centroCusto" name="id_centroCusto" class="custom-select">
            <?php while($registro = mysqli_fetch_array($resultado_cc, MYSQLI_ASSOC)){ ?>
              <option value="<?= $registro['id_centro_custo'] ?>"><?= $registro['centro_custo'] ?> - <?= $registro['cc_descricao'] ?></option>
            <?php } ?>
            </select>
            <!--input type="text" class="form-control" id="id_centroCusto" name="id_centroCusto" />-->
          </div>
          <label for="l_QuantidadePed" class="col-form-label">Quantidade:</label>
          <div class="row">
          
              <div class="col-sm-6">
              
            <input type="number" min="1" max="99999" class="form-control" id="quantidadePed" name="quantidadePed" required="true">
              </div>
              <div class="col-sm-6">
              <select id="unidade" name="unidade" class="custom-select">
              <option value="peça">Peça</option> 
              <option value="Metro">Metro</option>
              <option value="Kilo">Kilo</option>
              <option value="caixa">Caixa</option>
            </select>
              </div>
          </div>
            
            
          
          <div class="form-group">
            <label for="l_JustificativaPed" class="col-form-label">Justificativa:</label>
            <textarea class="form-control" id="justificativaPed" name="justificativaPed" required="true"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary" name="cadPedido" id="cadPedido" >Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal Detalhes pedido-->

<!--
<div class="modal fade" id="mod_cadPedido" tabindex="-1" role="dialog" aria-labelledby="mod_cadPedido" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalcadPedido">Adicionar novo pedido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="formAddPedido">
          <div class="form-group">
            <label for="l_itemPed" class="col-form-label">Item:</label>
            <input type="text" class="form-control" id="id_item" name="id_item" />
          </div>
          <div class="form-group">
            <label for="l_CentroCustoPed" class="col-form-label">Centro de Custo:</label>
            <input type="text" class="form-control" id="id_centroCusto" name="id_centroCusto" />
          </div>
          <div class="form-group">
            <label for="l_QuantidadePed" class="col-form-label">Quantidade:</label>
            <input type="number" min="1" max="99999" class="form-control" id="quantidadePed" name="quantidadePed">
          </div>
          <div class="form-group">
            <label for="l_JustificativaPed" class="col-form-label">Justificativa:</label>
            <textarea class="form-control" id="justificativaPed" name="justificativaPed"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary" name="cadPedido" id="cadPedido">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>-->

<!-- Fim Modal Add pedido-->
