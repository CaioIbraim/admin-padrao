<?php
/* Smarty version 3.1.30, created on 2017-08-09 10:38:29
  from "D:\www\sigsaude\views\_includes\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598b10550977d7_06227296',
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
  'cache_lifetime' => 3600,
),true)) {
function content_598b10550977d7_06227296 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Usuários do Regulação - ALTO CUSTO</title>

    <!-- Bootstrap -->
    <link href="http://localhost/sigsaude/views/_gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SideBar -->
    <link href="http://localhost/sigsaude/views//_jquery/bootsidemenu/BootSideMenu.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://localhost/sigsaude/views/_gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://localhost/sigsaude/views/_css/font-awesome-animation.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="http://localhost/sigsaude/views/_gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://localhost/sigsaude/views/_gentelella/build/css/custom.min.css" rel="stylesheet">
    <link href="http://localhost/sigsaude/views/_css/extras.css" rel="stylesheet">
  </head>

  <body class="nav-md " id="myBody">
    <!-- jQuery -->
    <script src="http://localhost/sigsaude/views/_gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="http://localhost/sigsaude/views/_gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SideBar -->
    <script src="http://localhost/sigsaude/views/_jquery/bootsidemenu/BootSideMenu.js"></script>
    <script src="http://localhost/sigsaude/views/_jquery/jquery.fullscreen.js"></script>
	<!-- Scripts para utilização no site -->
    <script src="http://localhost/sigsaude/views/_js/utilidades.js"></script>
	<!-- ================================================== -->
    
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              
              <a href="http://localhost/sigsaude/" class="site_title"><label id="mini-logo" style="display: none;"><img src="http://localhost/sigsaude/views/_images/favicon.png" alt="SIGSAUDE" width="45" height="45"></label><span><img src="http://localhost/sigsaude/views/_images/logotipo.png" alt="SIGSAUDE" width="200" height="45"></span></a>              
            </div>

            <div class="clearfix"></div>

            
            <br />
			
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>ALTO CUSTO - 1.0</h3>
                <ul class="nav side-menu">
                  
                                    <li><a><i class="fa fa-globe"></i> Básico <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="http://localhost/sigsaude/usuarios">Usuários</a></li>
                                            <li><a href="http://localhost/sigsaude/">Clinicas</a></li>
                                            <li><a href="http://localhost/sigsaude/">Usuários por Clinicas</a></li>
                                            <li><a href="http://localhost/sigsaude/">Tipo de Óbice</a></li>
                                            <li><a href="http://localhost/sigsaude/">Tipo de Arquivo</a></li>
                                            <li><a href="http://localhost/sigsaude/">Tipo de Custo</a></li>
                                            <li><a href="http://localhost/sigsaude/">OPMEs</a></li>
                                          </ul>
                                      </li>
                                    <li><a><i class="fa fa-files-o"></i> Solicitações <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="http://localhost/sigsaude/">Pesquisa</a></li>
                                            <li><a href="http://localhost/sigsaude/">Nova Solicitação</a></li>
                                            <li><a href="http://localhost/sigsaude/">Gestão</a></li>
                                          </ul>
                                      </li>
                                    <li><a><i class="fa fa-print"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="http://localhost/sigsaude/">Relatório 0001</a></li>
                                            <li><a href="http://localhost/sigsaude/">Relatório 0002</a></li>
                                            <li><a href="http://localhost/sigsaude/">Relatório 0003</a></li>
                                          </ul>
                                      </li>
                                    
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
              <a data-toggle="tooltip" data-placement="top" title="Sair" href="http://localhost/sigsaude/login/sair">
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
                  	<li class="dropdown-header" style="margin-top: 10px;"><strong>Login:</strong> 85388769</li>
                  	<li class="dropdown-header"><strong>Perfil:</strong> Tudo</li>
                  	<li class="dropdown-header"><strong>OM:</strong> HNMD</li>
                  	<li role="separator" class="divider"></li>
                    <li><a href="http://localhost/sigsaude/login/sair"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>
              
                              <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o faa-ring animated faa-slow"></i>
                    <span class="badge bg-red">3</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                      <a>
                        <span>
                          <span>DSM</span>
                          <span class="time">1 minutos</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                                        <li>
                      <a>
                        <span>
                          <span>DSM</span>
                          <span class="time">9 minutos</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                                        <li>
                      <a>
                        <span>
                          <span>DSM</span>
                          <span class="time">14 minutos</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
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
						  <li><a href="http://localhost/sigsaude/"><i class="fa fa-home"></i> Principal</a></li>
						  						  <li class="active">Gerenciar</li>
						  						  <li class="active">Usuários</li>
						  						</ol>
			       		
			     	</div>
				</div>
			   	<div class="clearfix"></div>
				
				<!-- script e css da tela -->
<link href="http://localhost/sigsaude/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://localhost/sigsaude/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>

<div class="x_panel">
	<div class="x_title">
		<h2>Usuários do Regulação</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
	
		<table id="tbGrid" class="table table-striped">
		  	<thead>
		       	<tr>
		            <th>OM</th>
		            <th>Login</th>
		            <th>Nome</th>
		            <th>Bloqueado</th>
		            <th>Perfil</th>
		        	
		        	<th width="132" class="text-center"><a class="btn btn-primary btn-xs" href="#" onclick="carregarTelaAjax('usuarios/incluir','');"><i class="fa fa-plus"></i> Incluir </a></th>
		    	</tr>
			</thead>
		</table>
	
	</div>
</div>



<script>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,null,null,{ "bSortable": false, "bSearchable": false },{ "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
	    
	    "autoWidth": false,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "http://localhost/sigsaude/usuarios/dadosgrid",
            "type": "POST"
        } 
    	
    	,"drawCallback": function(settings, json) {
        	$('[data-toggle="tooltip"]').tooltip();
        }
        	
    } );
 
    
});
</script>


				
			</div>
		    
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            ALTO CUSTO 1.0 - 110 Anos Cuidando da Saúde da Família Naval
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
    <script src="http://localhost/sigsaude/views/_gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="http://localhost/sigsaude/views/_gentelella/vendors/nprogress/nprogress.js"></script>    
    <!-- Custom Theme Scripts -->
    <script src="http://localhost/sigsaude/views/_gentelella/build/js/custom.js"></script>

    <script>
    $(document).ready(function() {
    
    });
    </script>
    
    
  </body>
</html><?php }
}
