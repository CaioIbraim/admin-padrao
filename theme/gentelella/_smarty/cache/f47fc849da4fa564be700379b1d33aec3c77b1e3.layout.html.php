<?php
/* Smarty version 3.1.30, created on 2018-01-08 15:08:12
  from "C:\xampp\htdocs\estatistica_ssm\views\_includes\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a53a57c8b6520_06854227',
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
  'cache_lifetime' => 3600,
),true)) {
function content_5a53a57c8b6520_06854227 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Principal - ESTATÍSTICAS DO SSM</title>

    <!-- Bootstrap -->
    <link href="http://localhost/estatistica_ssm/views/_gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- SideBar -->
    <link href="http://localhost/estatistica_ssm/views//_jquery/bootsidemenu/BootSideMenu.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://localhost/estatistica_ssm/views/_gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://localhost/estatistica_ssm/views/_css/font-awesome-animation.min.css" rel="stylesheet">
    
    <link href="http://localhost/estatistica_ssm/views/_css/bootstrap-multiselect.css" rel="stylesheet">
	<link href="http://localhost/estatistica_ssm/views/_css/bootstrap-select/bootstrap-select.css" rel="stylesheet">
    
    
    
    <!-- NProgress -->
    <link href="http://localhost/estatistica_ssm/views/_gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://localhost/estatistica_ssm/views/_gentelella/build/css/custom.min.css" rel="stylesheet">
    <link href="http://localhost/estatistica_ssm/views/_css/extras.css" rel="stylesheet">
  
  
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
    <script src="http://localhost/estatistica_ssm/views/_gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="http://localhost/estatistica_ssm/views/_gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SideBar -->
    <script src="http://localhost/estatistica_ssm/views/_jquery/bootsidemenu/BootSideMenu.js"></script>
    <script src="http://localhost/estatistica_ssm/views/_jquery/jquery.fullscreen.js"></script>
    
    
    <!-- Scripts para utilização no site -->
    <script src="http://localhost/estatistica_ssm/views/_js/utilidades.js"></script>
	<!-- ================================================== -->
    
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              
              <a href="http://localhost/estatistica_ssm/" class="site_title"><label id="mini-logo" style="display: none;"><img src="http://localhost/estatistica_ssm/views/_images/favicon.png" alt="SIGSAUDE" width="45" height="45"></label><span><img src="http://localhost/estatistica_ssm/views/_images/logotipo.png" alt="SIGSAUDE" width="200" height="45"></span></a>              
            </div>

            <div class="clearfix"></div>

            
            <br />
			
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>ESTATÍSTICAS DO SSM - 1.0</h3>
                <ul class="nav side-menu">
                  
                   
                  
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Principal" href="http://localhost/estatistica_ssm/">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Subir" id="btnSubir">
                <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Tela Cheia" id="btnFullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Sair" href="http://localhost/estatistica_ssm/login/sair">
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
                  	<li class="dropdown-header" style="margin-top: 10px;"><strong>Login:</strong> </li>
                  	<li class="dropdown-header"><strong>Perfil:</strong> </li>
                  	<li class="dropdown-header"><strong>OM:</strong> </li>
                  	<li role="separator" class="divider"></li>
                    <li><a href="http://localhost/estatistica_ssm/login/sair"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>
              
              
              <!--
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
                          <span class="time">2 minutos</span>
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
                          <span class="time">7 minutos</span>
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

                -->
                              
				
                
                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" id="divPrincipal">
                  
	        <div class="" id="divAjaxPrincipal">
				
				
				
				
				<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<div class="title_left">
  <h3>Estatísicas do SSM</h3>
</div>

<div class="row">
	<div class="col-md-12">
		<p>
			Sistema de apresentação dos dados estatísticos relacionados aos sistemas utilizados pela Diretoria de Saúde da Marinha do Brasil
		</p>
	</div>
</div>


<!--
<div class="row top_tiles">
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-users"></i></div>
      <div class="count">179</div>
      <h3>UsuÃ¡rios</h3>
      <p>usuÃ¡rios ativos no sistema.</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-comments-o"></i></div>
      <div class="count">17</div>
      <h3>SolicitaÃ§Ãµes</h3>
      <p>Abertas ou em analise.</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-sort-amount-asc"></i></div>
      <div class="count">65</div>
      <h3>IntervenÃ§Ã£o</h3>
      <p>SolicitaÃ§Ãµes que sofreram intervenÃ§Ã£o.</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-check-square-o"></i></div>
      <div class="count">50</div>
      <h3>Ratificadas</h3>
      <p>SolicitaÃ§Ãµes ratificadas</p>
    </div>
  </div>
</div>
-->

<!-- Graficos informativos 






<div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>GrÃ¡fico<small>Guias Geradas</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="lineChart"></canvas>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>GrÃ¡fico<small> Guias Geradas</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="mybarChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
 
 
 -->

<!-- Tabela com resumo das informaÃ§Ãµes
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Acompanhamento <small>Guias pendentes</small></h2>
        <span style="float:right; padding:2px"><a href="#" class="export"><i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>	
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <table class="table" id="tb">
          <thead>
            <tr>
              <th>SolicitaÃ§Ã£o</th>
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
              <th scope="row">1233 </th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-danger">Sim</span></td>
            </tr>
            <tr>
              <th scope="row">1233 </th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-info">NÃ£o</span></td>
            </tr>
            <tr>
              <th scope="row">1233 </th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-info">NÃ£o</span></td>
            </tr>
            <tr>
              <th scope="row">1233 </th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-danger">Sim</span></td>
            </tr>
            <tr>
              <th scope="row">1233 </th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-danger">Sim</span></td>
            </tr>
            <tr>
              <th scope="row">1233 </th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-info">NÃ£o</span></td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>








-->











				
			</div>
		    
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            ESTATÍSTICAS DO SSM 1.0 - 110 Anos Cuidando da Saúde da Família Naval
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
	
	<script src="http://localhost/estatistica_ssm/views/_js/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="http://localhost/estatistica_ssm/views/_js/bootstrap-multiselect.js"></script>
	

    <!-- FastClick -->
    <script src="http://localhost/estatistica_ssm/views/_gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="http://localhost/estatistica_ssm/views/_gentelella/vendors/nprogress/nprogress.js"></script>  
    
    
    <!-- Chart.js -->
    <script src="http://localhost/estatistica_ssm/views/_gentelella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="http://localhost/estatistica_ssm/views/_gentelella/build/js/custom.js"></script>
	
	<!-- Custom Theme Scripts -->
    <script src="http://localhost/estatistica_ssm/views/_js/jquery.base64.js"></script>
	<script src="http://localhost/estatistica_ssm/views/_js/jquery.btechco.excelexport.js"></script>
	
	
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
    			  url: 'http://localhost/estatistica_ssm/'+strUrl,
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
    </script>
    
    
    
    

<script>
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
</script>

  </body>
</html><?php }
}
