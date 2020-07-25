
<!-- Modal Centro de Custo-->
<!-- Script Cadastro  -->



    
<!-- Modal Cadastro centro de custo -->

<div class="modal fade" id="mod_cadcc" tabindex="-1" role="dialog" aria-labelledby="mod_cadcc" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  bg-info text-white">
        <h5 class="modal-title" id="modalCentroCusto">Cadastro de Centro de Custo:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true" class="text-white">&times;</span>
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
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="formDelCC">
          <div class="form-group">

            <input type="text" class="form-control" id="d_idCC" name="idCCDel" hidden="true">

            <label for="l_centroCusto" class="col-form-label">Centro de Custo:</label>
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
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalItem">Cadastro de Itens:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true" class="text-white">&times;</span>
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
          <span aria-hidden="true" class="text-white">&times;</span>
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




<!-- Fim Modal Del Item-->

<!-- Modal Add pedido-->

<div class="modal fade" id="mod_cadPedido" tabindex="-1" role="dialog" aria-labelledby="mod_cadPedido" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalcadPedido">Adicionar novo pedido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true" class="text-white">&times;</span>
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
              <label for="l_descricaoItemPedido" class="col-form-label">Detalhes do item:</label>
              <textarea class="form-control" id="descricaoItemPedido" name="descricaoItemPedido" required="true"></textarea>
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
                  <option value="peça(s)">Peça</option> 
                  <option value="Metro(s)">Metro</option>
                  <option value="Kilo(s)">Kilo</option>
                  <option value="caixa(s)">Caixa</option>
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


<!-- FIM Modal  pedido-->


<!-- Modal Acompanhamento pedido Usuário-->

<div class="modal fade" id="mod_acompanhamentoPedido" tabindex="-1" role="dialog" aria-labelledby="mod_acompanhamentoPedido" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content ">
      <div class="modal-header bg-dark" id="acompanhamento_modal_header">
        <h5 class="modal-title text-white" id="modalAcompanhamentoPedido">Acompanhamento de Pedido: <span id="numeroPedido" ></span> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body px-md-5">
        <form method="post" action="" id="formAcompanhamentoPedido">
          <div class="row">
            <div class="col-sm-12 border border-success rounded">
              <div class="row border">
                  <div class="col-sm-6 border-right">
                    <label class="col-form-label"><h5>Status do Pedido:</h5></label>
                    <label id="A_statusPedido" class="col-form-label"></label>

                    <?php if ($tipo != 'oficial'){ ?>
                    <button type='button' 
                            class='btn btn-sucess float-right material-icons click-status' 
                            id='btnStatus' 
		                        data-toggle='modal' 
                            data-target='#mod_status' 
                            data-dismiss='modal' 
                            title='Alterar Status'>loupe</button>        
                    <?php } ?>
                  </div>
                  <div class="col-sm-6">
                    <label class="col-form-label"><h5>Data de Abertura:</h5></label>
                    <label id="A_dataAbertura" class="col-form-label"></label>              
                  </div>
              </div>

              <div class="row border">
                <div class="col-sm-6 border-right">
                  <label class="col-form-label"><h5>Centro de Custo:</h5></label>
                  <label id="A_CentroCusto"></label>
                  
                </div>
                <div class="col-sm-6">
                  <label class="col-form-label"><h5>Requerente:</h5></label>
                  <label id="A_requerente"></label>
                </div>
              </div>
              <div class="row border ">
                <div class="col-sm-6 border-right">
                  <label class="col-form-label"><h5>Comprador:</h5></label>
                  <label id="A_responsavel" class="col-form-label"></label>  
                </div>
                <div class="col-sm-6">
                  <label class="col-form-label"><h5>Concluído em:</h5></label>
                  <label id="A_dataEncerramento" class="col-form-label"></label>  
                </div>
              </div>
              <div class="row border ">
                <div class="col-sm-6 border-right">
                  <label class="col-form-label"><h5>Diretoria:</h5></label>
                  <label id="A_diretoria_resp" class="col-form-label"></label>  
                </div>
                <div class="col-sm-6">
                  <label class="col-form-label"><h5>Chefia:</h5></label>
                  <label id="A_chefia_resp" class="col-form-label"></label>  
                </div>
              </div>
              <div class="row border">
                <div class="col-sm-12">
                  <div class="row border border-top-0 border-right-0 border-left-0">
                    <div class="col-sm-6 border-right">
                      <label class="col-form-label"><h5>Item:</h5></label>
                      <label id="A_item"><h5></h5></label>
                      
                    </div>
                    <div class="col-sm-6">
                      <label class="col-form-label"><h5>Quantidade:</h5></label>
                      <label id="A_quantidade"></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label"><h5>Detalhes do Item:</h5></label>
                    <label id="A_descricaoItemPedido" class="col-form-label"></label>
                  </div>
                </div>
              </div>
              <div class="row border">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label class="col-form-label"><h5>Justificativa:</h5></label>
                    <label id="A_justificativa" class="col-form-label"></label>
                  </div>
                </div>
              </div>

              <div class="row border">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label class="col-form-label"><h5>Aprovações:</h5></label>  
                  </div>
                  <?php 

                    switch ($tipo){

                      case 'gestor':
                        include_once('aprovacaoChefia.php');
                      break;  

                      case 'diretor':
                        include_once('aprovacaoDiretor.php');
                      break;

                      case 'direx':
                        include_once('aprovacaoDirex.php');
                      break;
                      
                      default:
                        include_once('aprovacaoColaborador.php');
                      break;
                    }
                    
                  ?>
                </div>
              </div>   

            </div>  
          </div>   

          <div class="row border border-warning">
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-12">
                <label class="col-form-label"><h5>Acompanhamentos:<span id="numeroPedido" ></span></h5></label>
                <button type='button' class='btn btn-sucess float-right material-icons click-addAcompanhamento' id='btnAcompanhamento' 
		            data-toggle='modal' data-target='#mod_addAcompanhamento' data-dismiss='modal' title='Incluir Acompanhamento'>loupe</button>
                <!--<button type='button' class='btn btn-sucess btn_cadastro float-right material-icons click-addAcompanhamento' id='btnAcompanhamento' 
		            data-toggle='modal' data-target='#mod_addAcompanhamento' data-dismiss='modal' >loupe</button> -->

                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                <span id="A_acompanhamentos"></span>
                </div>
              </div>
            </div>
          </div>
        
        </div>
        <div class="modal-footer border-success">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <!--<button type="submit" class="btn btn-primary" name="cadPedido" id="cadPedido" >Enviar</button>-->
        </form>
      </div>
    </div>
  </div>
</div>


<!-- FIM Modal Fim Acompanhamento pedido-->


<!-- Modal Add Acompanhamento -->


<div class="modal fade" id="mod_addAcompanhamento" tabindex="-1" role="dialog" aria-labelledby="mod_addAcompanhamento" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modaladdAcompanhamento">Adicionar acompanhamento - <span id="numeroPedidoAdd" ></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="formaddAcompanhamento">
          <div class="form-group">
          <input type="text" class="form-control" hidden="false" id="acompanhamento_ID" name="acompanhamento_ID">

            
            <label for="l_addAcompanhamento" class="col-form">Acompanhamento:</label>
            <textarea class="form-control" id="addAcompanhamento" name="addAcompanhamento" required="true"></textarea>
        
          </div>
          <!--
          <div class="form-group">
            <input type="file" id="uploadAcompanhamento" name="uploadAcompanhamento">
          </div>
          -->
          <div class="modal-footer">
          
          <button type="button " class="btn btn-secondary btn-reset" data-dismiss="modal" >Fechar</button>
          <button type="submit" class="btn btn-danger" name="delItem" id="delItem">Enviar</button>
        </form>
          <span id="msgItem"></span>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Fim Modal Add Acompanhamento-->


<!-- Modal Aprovação -->


<div class="modal fade" id="mod_aprovacao" tabindex="-1" role="dialog" aria-labelledby="mod_aprovacao" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  bg-success text-white">
        <h5 class="modal-title" id="modalaaprovacao">Aprovar Chamado - <span id="numeroPedidoAprovacao" ></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="formAprovacao">
          <div class="form-group mx-auto">
          <input type="text" class="form-control" hidden="false" id="aprovacao_ID" name="aprovacao_ID">

          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                Aprovar: &nbsp;  <input type="radio" name="aprovacao_radio" value="2">
                &nbsp;Rejeitar: &nbsp;  <input type="radio" name="aprovacao_radio" value="3">
              </div>
            </div>
            
            <input type="text" class="form-control" id="justificativa_aprovacao" name="justificativa_aprovacao" placeholder="Justificativa" required="true">
          </div>      
        
          </div>
          <div class="modal-footer">
          <button type="button " class="btn btn-secondary btn-reset" data-dismiss="modal" >Fechar</button>
          <button type="submit" class="btn btn-success" name="aprovar" id="aprovar">Enviar</button>
          </form>
          <span id="msgItem"></span>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Fim Modal Aprovação -->


<!-- Modal Alterar Status -->


<div class="modal fade" id="mod_status" tabindex="-1" role="dialog" aria-labelledby="mod_status" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  bg-success text-white">
        <h5 class="modal-title" id="modalstatus">Alterar Status Chamado - <span id="numeroPedidoStatus" ></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="formStatus">
          <div class="form-group mx-auto">
          <input type="text" class="form-control" hidden="false" id="status_ID" name="status_ID">

          <div class="form-group">

          <label class="col-form-label">Status:</label>
                  
            <select id="modificarStatus" name="modificarStatus" class="custom-select" required="true">
              <!--<option value="0" selected="selected" disabled="disabled" style="display: none">Escolha uma opção</option>-->
              <?php if($tipo == 'compras' OR $tipo == 'supadm'){ ?>
              <option value="2">Pendente</option> 
              <option value="3">Concluído</option>
              <option value="7">Avaliar Orçamento</option>
              <?php } ?>
              
              <?php if($tipo == 'compras' OR $tipo == 'supadm'){ ?>
              
              <?php }else if($tipo == 'direx' OR $tipo == 'supadm'){ ?>
                  <option value="4">Orçamento Aprovado</option>
                  <option value="9">Refazer Orçamento</option>

                  <?php }else{ ?>
                
                <option value="9">Refazer Orçamento</option>

              <?php } ?>
              <?php if($tipo == 'compras' OR $tipo == 'supadm'){ ?>
              <option value="8">Disponivel para Retirada</option> 
              <?php } ?>
            </select>
          </div>
            
            
          
          <div class="form-group">
            <label for="l_JustificativaStatus" class="col-form-label">Justificativa:</label>
            <textarea class="form-control" id="justificativaStatus" name="justificativaStatus" required="true"></textarea>
          </div>     
        
          </div>
          <div class="modal-footer">
          <button type="button " class="btn btn-secondary btn-reset" data-dismiss="modal" >Fechar</button>
          <button type="submit" class="btn btn-success click-status" name="aprovar" id="aprovar">Enviar</button>
          </form>
          <span id="msgItem"></span>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Fim Modal Alterar Status -->


<script type="text/javascript" src="js/acompanhamento.js"> </script>
<script type="text/javascript" src="js/modal.js"> </script>
