<?php
/* Smarty version 3.1.30, created on 2017-08-09 10:38:29
  from "D:\www\sigsaude\views\_includes\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598b10550977d6_79327159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '976e6a46e01521d4a385514d693739085b70722b' => 
    array (
      0 => 'D:\\www\\sigsaude\\views\\_includes\\layout.html',
      1 => 1502285907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598b10550977d6_79327159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18539598b1054df23d8_27376470';
?>
<!DOCTYPE html>
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
    <!-- NProgress -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/build/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_css/extras.css" rel="stylesheet">
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
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;
echo $_smarty_tpl->tpl_vars['SIS_MENU_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['arrFilhos'][(isset($_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] : null)]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['SIS_MENU_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['arrFilhos'][(isset($_smarty_tpl->tpl_vars['__smarty_section_y']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_y']->value['index'] : null)]['titulo'];?>
</a></li>
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
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen" id="btnFullScreen">
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
                <?php }?>
              
				
                
                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" id="divPrincipal">
	        <div class="">
				<div class="page-title">
			    	<div class="title_left">
			       		
						<ol class="breadcrumb">
						  <li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
"><i class="fa fa-home"></i> Principal</a></li>
						  <?php
$__section_x_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['SIS_BREADCRUMB_ARRAY']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_3_total = $__section_x_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_3_total != 0) {
for ($__section_x_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_3_iteration <= $__section_x_3_total; $__section_x_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
						  <li class="active"><?php echo $_smarty_tpl->tpl_vars['SIS_BREADCRUMB_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['texto'];?>
</li>
						  <?php
}
}
if ($__section_x_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_3_saved;
}
?>
						</ol>
			       		
			     	</div>
				</div>
			   	<div class="clearfix"></div>
				
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
    
    
    <!--side bar -->
	<div id="side-bar-menu">
	    	<br>
	    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    	
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Menu Lateral <small>Subtitulo</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

					<ul class="list-unstyled timeline">
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a class="tag" href="">
                            <span>DSM</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title"><a>Phasellus enim erat, velit.</a></h2>
                          <div class="byline">
                            <span>13hs atrás</span> por <a>Levy</a>
                          </div>
                          <p class="excerpt">Nunc tincidunt ante vitae massa. Duis ante orci, molestie vitae, vehicula venenatis, tincidunt ac, pede...</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a class="tag" href="">
                            <span>DSM</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title"><a>Phasellus enim erat, velit.</a></h2>
                          <div class="byline">
                            <span>13hs atrás</span> por <a>Levy</a>
                          </div>
                          <p class="excerpt">Nunc tincidunt ante vitae massa. Duis ante orci, molestie vitae, vehicula venenatis, tincidunt ac, pede...</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a class="tag" href="">
                            <span>DSM</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title"><a>Phasellus enim erat, velit.</a></h2>
                          <div class="byline">
                            <span>13hs atrás</span> por <a>Levy</a>
                          </div>
                          <p class="excerpt">Nunc tincidunt ante vitae massa. Duis ante orci, molestie vitae, vehicula venenatis, tincidunt ac, pede...</p>
                        </div>
                      </div>
                    </li>
                  	</ul>
					
					
                    
                  </div>
                </div>
	    		
	    	</div>
	    
	
	</div>	
	
	
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
    <!-- Custom Theme Scripts -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/build/js/custom.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
    $(document).ready(function() {
    
    });
    <?php echo '</script'; ?>
>
    
    
  </body>
</html><?php }
}
