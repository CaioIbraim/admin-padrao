<?php
/* Smarty version 3.1.30, created on 2017-08-18 14:09:28
  from "C:\xampp\htdocs\altacomplexidade\views\_includes\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59971f487770c2_22959686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f3c51381a275dc867ca35f1d1a73f8c48766055' => 
    array (
      0 => 'C:\\xampp\\htdocs\\altacomplexidade\\views\\_includes\\layout.html',
      1 => 1502806308,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59971f487770c2_22959686 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Principal - ALTA COMPLEXIDADE</title>

    <!-- Bootstrap -->
    <link href="http://localhost/altacomplexidade/views/_gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SideBar -->
    <link href="http://localhost/altacomplexidade/views//_jquery/bootsidemenu/BootSideMenu.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://localhost/altacomplexidade/views/_gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://localhost/altacomplexidade/views/_css/font-awesome-animation.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="http://localhost/altacomplexidade/views/_gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://localhost/altacomplexidade/views/_gentelella/build/css/custom.min.css" rel="stylesheet">
    <link href="http://localhost/altacomplexidade/views/_css/extras.css" rel="stylesheet">
  </head>

  <body class="nav-md " id="myBody">
    <!-- jQuery -->
    <script src="http://localhost/altacomplexidade/views/_gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="http://localhost/altacomplexidade/views/_gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SideBar -->
    <script src="http://localhost/altacomplexidade/views/_jquery/bootsidemenu/BootSideMenu.js"></script>
    <script src="http://localhost/altacomplexidade/views/_jquery/jquery.fullscreen.js"></script>
	<!-- Scripts para utilização no site -->
    <script src="http://localhost/altacomplexidade/views/_js/utilidades.js"></script>
	<!-- ================================================== -->
    
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              
              <a href="http://localhost/altacomplexidade/" class="site_title"><label id="mini-logo" style="display: none;"><img src="http://localhost/altacomplexidade/views/_images/favicon.png" alt="SIGSAUDE" width="45" height="45"></label><span><img src="http://localhost/altacomplexidade/views/_images/logotipo.png" alt="SIGSAUDE" width="200" height="45"></span></a>              
            </div>

            <div class="clearfix"></div>

            
            <br />
			
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>ALTA COMPLEXIDADE - 1.0</h3>
                <ul class="nav side-menu">
                  
                                    <li><a><i class="fa fa-globe"></i> Básico <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a id="idURL_1" onclick="abrirTelaMenu(this.id,'basico-tipoarquivo');">Tipo de Arquivo</a></li>
                                            <li><a id="idURL_2" onclick="abrirTelaMenu(this.id,'basico-tipoarquivoo');">Tipo de Arquivo2</a></li>
                                            <li><a id="idURL_3" onclick="abrirTelaMenu(this.id,'');">Clinicas</a></li>
                                            <li><a id="idURL_4" onclick="abrirTelaMenu(this.id,'');">Usuários por Clinicas</a></li>
                                            <li><a id="idURL_5" onclick="abrirTelaMenu(this.id,'');">Tipo de Óbice</a></li>
                                            <li><a id="idURL_6" onclick="abrirTelaMenu(this.id,'');">Tipo de Custo</a></li>
                                            <li><a id="idURL_7" onclick="abrirTelaMenu(this.id,'');">OPMEs</a></li>
                                          </ul>
                                      </li>
                                    <li><a><i class="fa fa-files-o"></i> Solicitações <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a id="idURL_9" onclick="abrirTelaMenu(this.id,'');">Pesquisa</a></li>
                                            <li><a id="idURL_10" onclick="abrirTelaMenu(this.id,'');">Nova Solicitação</a></li>
                                            <li><a id="idURL_11" onclick="abrirTelaMenu(this.id,'');">Gestão</a></li>
                                          </ul>
                                      </li>
                                    <li><a><i class="fa fa-print"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a id="idURL_13" onclick="abrirTelaMenu(this.id,'');">Relatório 0001</a></li>
                                            <li><a id="idURL_14" onclick="abrirTelaMenu(this.id,'');">Relatório 0002</a></li>
                                            <li><a id="idURL_15" onclick="abrirTelaMenu(this.id,'');">Relatório 0003</a></li>
                                          </ul>
                                      </li>
                                    
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Principal" href="http://localhost/altacomplexidade/">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Subir" id="btnSubir">
                <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Tela Cheia" id="btnFullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Sair" href="http://localhost/altacomplexidade/login/sair">
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
                  	<li class="dropdown-header" style="margin-top: 10px;"><strong>Login:</strong> teste</li>
                  	<li class="dropdown-header"><strong>Perfil:</strong> Tudo</li>
                  	<li class="dropdown-header"><strong>OM:</strong> DSM</li>
                  	<li role="separator" class="divider"></li>
                    <li><a href="http://localhost/altacomplexidade/login/sair"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
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
                          <span class="time">15 minutos</span>
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
	        <div class="" id="divAjaxPrincipal">
				
				
				
				
				<div class="row top_tiles">
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-ambulance"></i></div>
      <div class="count">179</div>
      <h3>Em EMERG</h3>
      <p>Solicitações abertas em EMERG.</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-comments-o"></i></div>
      <div class="count">17</div>
      <h3>Solicitações</h3>
      <p>Abertas ou em analise.</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-sort-amount-asc"></i></div>
      <div class="count">65</div>
      <h3>Intervenção</h3>
      <p>Solicitações que sofreram intervenção.</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-check-square-o"></i></div>
      <div class="count">50</div>
      <h3>Ratificadas</h3>
      <p>Solicitações ratificadas</p>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Pendências <small>Solicitações pendentes</small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <table class="table">
          <thead>
            <tr>
              <th>Solicitação</th>
              <th>Data</th>
              <th>OM Origem</th>
              <th>Clinica</th>
              <th>OSE</th>
              <th>Status</th>
              <th>EMERG?</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1233 <a data-toggle="tooltip" data-placement="top" title="Abrir&nbsp;solicitação" class="btn btn-info btn-xs" href="#" ><i class="fa fa-search"></i></a></th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-danger">Sim</span></td>
            </tr>
            <tr>
              <th scope="row">1233 <a data-toggle="tooltip" data-placement="top" title="Abrir&nbsp;solicitação" class="btn btn-info btn-xs" href="#" ><i class="fa fa-search"></i></a></th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td>Não</td>
            </tr>
            <tr>
              <th scope="row">1233 <a data-toggle="tooltip" data-placement="top" title="Abrir&nbsp;solicitação" class="btn btn-info btn-xs" href="#" ><i class="fa fa-search"></i></a></th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td>Não</td>
            </tr>
            <tr>
              <th scope="row">1233 <a data-toggle="tooltip" data-placement="top" title="Abrir&nbsp;solicitação" class="btn btn-info btn-xs" href="#" ><i class="fa fa-search"></i></a></th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-danger">Sim</span></td>
            </tr>
            <tr>
              <th scope="row">1233 <a data-toggle="tooltip" data-placement="top" title="Abrir&nbsp;solicitação" class="btn btn-info btn-xs" href="#" ><i class="fa fa-search"></i></a></th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-danger">Sim</span></td>
            </tr>
            <tr>
              <th scope="row">1233 <a data-toggle="tooltip" data-placement="top" title="Abrir&nbsp;solicitação" class="btn btn-info btn-xs" href="#" ><i class="fa fa-search"></i></a></th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td>Não</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>


				
			</div>
		    
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            ALTA COMPLEXIDADE 1.0 - 110 Anos Cuidando da Saúde da Família Naval
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
    <script src="http://localhost/altacomplexidade/views/_gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="http://localhost/altacomplexidade/views/_gentelella/vendors/nprogress/nprogress.js"></script>    
    <!-- Custom Theme Scripts -->
    <script src="http://localhost/altacomplexidade/views/_gentelella/build/js/custom.js"></script>

    <script>
    
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
    			  url: 'http://localhost/altacomplexidade/'+strUrl,
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
    });
    </script>
    
    
  </body>
</html><?php }
}
