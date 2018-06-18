<?php
/* Smarty version 3.1.30, created on 2018-01-08 15:08:12
  from "C:\xampp\htdocs\estatistica_ssm\views\_includes\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a53a57c8ae810_00809816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf1f24a4adc29649e219c4c36ff4c13f4fd3740' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\_includes\\layout.html',
      1 => 1509464495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a53a57c8ae810_00809816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19152155735a53a57c650fa1_97448215';
?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php if ($_smarty_tpl->tpl_vars['tituloHTMLPagina']->value != '') {
echo $_smarty_tpl->tpl_vars['tituloHTMLPagina']->value;?>
 - <?php }
echo $_smarty_tpl->tpl_vars['APP_NOME']->value;?>
</title>

    <!-- Bootstrap -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- SideBar -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views//_jquery/bootsidemenu/BootSideMenu.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_css/font-awesome-animation.min.css" rel="stylesheet">
    
    <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_css/bootstrap-multiselect.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_css/bootstrap-select/bootstrap-select.css" rel="stylesheet">
    
    
    
    <!-- NProgress -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/build/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_css/extras.css" rel="stylesheet">
  
  
<style>
.input-group-btn {
    padding : 19px 12px ! imporatant;
}
    
.table, thead, tr, td, th{
    font-size: 10px ! important;
    border: solid #666  thin ! important;
    text-align: center;
}

.over{
    overflow: auto ! important;    
    scrollbar-base-color:#fff ! important;
}

</style>
  
  
  </head>

  <body class="nav-md " id="myBody">
    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- SideBar -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/bootsidemenu/BootSideMenu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.fullscreen.js"><?php echo '</script'; ?>
>
    
    
    <!-- Scripts para utilização no site -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_js/utilidades.js"><?php echo '</script'; ?>
>
	<!-- ================================================== -->
    
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              
              <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
" class="site_title"><label id="mini-logo" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_images/favicon.png" alt="SIGSAUDE" width="45" height="45"></label><span><img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_images/logotipo.png" alt="SIGSAUDE" width="200" height="45"></span></a>              
            </div>

            <div class="clearfix"></div>

            
            <br />
			
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3><?php echo $_smarty_tpl->tpl_vars['APP_NOME']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['APP_VERSAO']->value;?>
</h3>
                <ul class="nav side-menu">
                  
                  <?php
$__section_x_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['SIS_MENU_ARRAY']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total != 0) {
for ($__section_x_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_0_iteration <= $__section_x_0_total; $__section_x_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
                    <li><a><i class="<?php echo $_smarty_tpl->tpl_vars['SIS_MENU_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['icone'];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['SIS_MENU_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['titulo'];?>
 <?php if ($_smarty_tpl->tpl_vars['SIS_MENU_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['filhos'] > 0) {?><span class="fa fa-chevron-down"></span><?php }?></a>
                      <?php if ($_smarty_tpl->tpl_vars['SIS_MENU_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['filhos'] > 0) {?>
                      <ul class="nav child_menu">
                        <?php
$__section_y_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_y']) ? $_smarty_tpl->tpl_vars['__smarty_section_y'] : false;
$__section_y_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['SIS_MENU_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['arrFilhos']) ? count($_loop) : max(0, (int) $_loop));
$__section_y_1_total = $__section_y_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_y'] = new Smarty_Variable(array());
if ($__section_y_1_total != 0) {
for ($__section_y_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] = 0; $__section_y_1_iteration <= $__section_y_1_total; $__section_y_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']++){
?>
                        <li><a id="idURL_<?php echo $_smarty_tpl->tpl_vars['SIS_MENU_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['arrFilhos'][(isset($_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] : null)]['id'];?>
" onclick="abrirTelaMenu(this.id,'<?php echo $_smarty_tpl->tpl_vars['SIS_MENU_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['arrFilhos'][(isset($_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] : null)]['url'];?>
');"><?php echo $_smarty_tpl->tpl_vars['SIS_MENU_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['arrFilhos'][(isset($_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] : null)]['titulo'];?>
</a>

                        </li>
                        <?php
}
}
if ($__section_y_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_y'] = $__section_y_1_saved;
}
?>
                      </ul>
                      <?php }?>
                    </li>
                  <?php
}
}
if ($__section_x_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_0_saved;
}
?> 
                  
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Principal" href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Subir" id="btnSubir">
                <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Tela Cheia" id="btnFullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Sair" href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
login/sair">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
              
                
                
                              
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    
                    <i class="fa fa-user"></i>
                    <i class=" fa fa-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  	<li class="dropdown-header" style="margin-top: 10px;"><strong>Login:</strong> <?php echo $_smarty_tpl->tpl_vars['arrDadosUsuarioLogado']->value['login'];?>
</li>
                  	<li class="dropdown-header"><strong>Perfil:</strong> <?php echo $_smarty_tpl->tpl_vars['arrDadosUsuarioLogado']->value['perfil'];?>
</li>
                  	<li class="dropdown-header"><strong>OM:</strong> <?php echo $_smarty_tpl->tpl_vars['arrDadosUsuarioLogado']->value['sigla_om_usuario'];?>
</li>
                  	<li role="separator" class="divider"></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
login/sair"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>
              
              <?php if (count($_smarty_tpl->tpl_vars['SIS_NOTIFICACAO_ARRAY']->value)) {?>

              <!--
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o faa-ring animated faa-slow"></i>
                    <span class="badge bg-red"><?php echo count($_smarty_tpl->tpl_vars['SIS_NOTIFICACAO_ARRAY']->value);?>
</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <?php
$__section_x_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['SIS_NOTIFICACAO_ARRAY']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_2_total = $__section_x_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_2_total != 0) {
for ($__section_x_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_2_iteration <= $__section_x_2_total; $__section_x_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
                    <li>
                      <a>
                        <span>
                          <span><?php echo $_smarty_tpl->tpl_vars['SIS_NOTIFICACAO_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['usuario'];?>
</span>
                          <span class="time"><?php echo $_smarty_tpl->tpl_vars['SIS_NOTIFICACAO_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['tempo'];?>
</span>
                        </span>
                        <span class="message">
                          <?php echo $_smarty_tpl->tpl_vars['SIS_NOTIFICACAO_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['texto'];?>

                        </span>
                      </a>
                    </li>
                    <?php
}
}
if ($__section_x_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_2_saved;
}
?>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>Ver todos</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>

                -->
                <?php }?>
              
				
                
                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" id="divPrincipal">
                  
	        <div class="" id="divAjaxPrincipal">
				
				
				
				
				<?php echo $_smarty_tpl->tpl_vars['htmlPaginaSolicitada']->value;?>

				
			</div>
		    
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['APP_NOME']->value, 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['APP_VERSAO']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['APP_CREDITOS']->value;?>

          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    	 <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal"></button>
	          
	        </div>
	        <div class="modal-body" >
	          <h2 id="txt-modal"></h2>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal"> &times;</button>
	        </div>
	      </div>
	      
	    </div>
	  </div>
	
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_js/bootstrap-select/bootstrap-select.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_js/bootstrap-multiselect.js"><?php echo '</script'; ?>
>
	

    <!-- FastClick -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/fastclick/lib/fastclick.js"><?php echo '</script'; ?>
>
    <!-- NProgress -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/nprogress/nprogress.js"><?php echo '</script'; ?>
>  
    
    
    <!-- Chart.js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/Chart.js/dist/Chart.min.js"><?php echo '</script'; ?>
>
    <!-- Custom Theme Scripts -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/build/js/custom.js"><?php echo '</script'; ?>
>
	
	<!-- Custom Theme Scripts -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_js/jquery.base64.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_js/jquery.btechco.excelexport.js"><?php echo '</script'; ?>
>
	
	
    <?php echo '<script'; ?>
>
    
    $(document).ready(function() {
    	
    	imagemAjax = '<center><i class="fa fa-refresh fa-spin fa-2x fa-fw"></i><span class="sr-only">Loading...</span></center>';
    	
		limparFormulario = function(idFormulario)
		{
			$('#'+idFormulario).each (function(){
			  this.reset();
			});
		}
		
		abrirTelaMenu = function(objID,url) {
			carregarTelaAjax(url,'');
		}
    	
    	carregarTelaAjax = function(strUrl,arrDados,divHtml)
    	{
    		if(divHtml === undefined) {
    			divHtml = 'divAjaxPrincipal';
    	    }
    		
    		$.ajax({
    			  method: "POST",
    			  url: '<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
'+strUrl,
    			  data: arrDados,
    			  dataType: "html",
    			  
    		  beforeSend: function(){
    	      		$("#"+divHtml).html(imagemAjax);
    	           },
    	           success: function(data){
    	                //this.append(data);
    	                $("#"+divHtml).html(data);	            
    	           }
    		});
    	}
    	
    	
    	abrirModal = function(msg)
    	{	
    		$("#myModal").modal();
    		$("#txt-modal").html(msg);	
    	}
    	
    	
    });
    <?php echo '</script'; ?>
>
    
    
    
    

<?php echo '<script'; ?>
>
  $(document).ready(function () {
  	$("body").delegate(".export", "click", function() {
            
            function makeid() {
                 //Função para gerar ID
                 var text = "";
                 var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                 for (var i = 0; i < 5; i++){
                       text += possible.charAt(Math.floor(Math.random() * possible.length));
                 }
                 return text;
            }
            
            //Exporta a tabela para excel
            $( ".x_content table" ).each(function( index ) {
                $( this ).attr('id', makeid());
               });
            var f = $(this).closest(".x_panel").find('table').attr('id');
            
            $(f).btechco_excelexport({
                containerid: f
               , datatype: $datatype.Table
               , filename: 'tabela'
            });
        });
        
        var tamanhoFont = 12;
        
        $("body").delegate(".text-plus", "click", function() {
            //Aciona botão fonte maior
            tamanhoFont = tamanhoFont + 1;
            //Altera propriedades da fonte da div conteudo
            alert(tamanhoFont);
            $(this).closest(".x_panel").find('table').css("font-size", "10px");
	});
        
        
  });
<?php echo '</script'; ?>
>

  </body>
</html><?php }
}
