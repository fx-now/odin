        <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Criador</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquisar formul&aacute;rios">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

<?
if($_GET["sp"] == "new"){
?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                      <h2>Novo formul&aacute;rio &nbsp; <a href="?criador&p=forms" class="btn btn-danger"<?= tooltip("Volta para a lista de formul&aacute;rios criados") ?>>Cancelar</a><a href="#" class="btn btn-success"<?= tooltip("Salva o formul&aacute;rio que est&aacute; sendo criado") ?>>Salvar</a></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      
                      <div id="paineldecricao" class="col-md-9 col-sm-9 col-xs-9" ondrop="drop(event)" ondragover="allowDrop(event)">
                          &nbsp;.
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-12">

                      <section class="panel">

                        <div class="x_title">
                            <h2 data-toggle="tooltip" title="Recursos">Recursos</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div id="listaderecursos" class="panel-body">
                            
                      <div id="tipoInputTexto" class="form-group" draggable="true" ondragstart="drag(event)">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Label</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input class="form-control" placeholder="Placeholder" type="text">
                        </div>
                      </div>
                            
                        </div>

                      </section>

                    </div>
                      
                  </div>
                </div>
              </div>
            </div>
<? }else{ ?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formul&aacute;rios &nbsp; <a href="?criador&p=forms&sp=new" class="btn btn-success"<?= tooltip("Abre a p&aacute;gina para criar um novo formul&aacute;rio de cadastro") ?>>novo</a></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      lista de formularios
                  </div>
                </div>
              </div>
            </div>
<? } ?>
          </div>
