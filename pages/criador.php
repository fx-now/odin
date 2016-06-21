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
    //fonte: http://bootsnipp.com/snippets/g5X5z
?>
    <link href="mods/criador/css.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="mods/criador/js.js"></script>
    <![endif]-->
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                      <h2>Novo formul&aacute;rio &nbsp; <a href="?criador&p=forms" class="btn btn-danger"<?= tooltip("Volta para a lista de formul&aacute;rios criados") ?>>Cancelar</a><a href="#" class="btn btn-success"<?= tooltip("Salva o formul&aacute;rio que est&aacute; sendo criado") ?>>Salvar</a></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      

           <div class="row clearfix">
	          <!-- Components -->
        <div class="col-md-6">
          <h2>Drag & Drop components</h2>
          <hr>
          <div class="tabbable">
            <ul class="nav nav-tabs" id="formtabs">
              <!-- Tab nav -->
            </ul>
            <form class="form-horizontal" id="components" role="form">
              <fieldset>
                <div class="tab-content">
                  <!-- Tabs of snippets go here -->
                </div>
              </fieldset>
            </form>
          </div>
        </div>
        <!-- / Components -->
        <!-- Building Form. -->
        <div class="col-md-6">
          <div class="clearfix">
            <h2>Your Form</h2>
            <hr>
            <div id="build">
              <form id="target" class="form-horizontal">
              </form>
            </div>
          </div>
        </div>
        <!-- / Building Form. -->
      </div>      
                   <script data-main="mods/criador/main-built.js" src="mods/criador/require.js" ></script>   
                      
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
