<?php
/* Smarty version 3.1.30, created on 2017-02-17 13:22:23
  from "D:\www\catalogo\views\_includes\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a7152fbeba02_60017174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f3c109d7edc3b3716d25c415d45d4e89fed9121' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\_includes\\layout.html',
      1 => 1487336875,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_58a7152fbeba02_60017174 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Formulários - Saúde Naval" />
	    
		<title>Principal - Catalogo Básico</title>

		<link href="http://10.4.224.74/catalogo/views/_images/favicon.png" rel="shortcut icon" />
	
	    <!-- Bootstrap -->
	    <link href="http://10.4.224.74/catalogo/views/_bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://10.4.224.74/catalogo/views/_font-awesome/css/font-awesome.min.css" type="text/css" />
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    	<link href="http://10.4.224.74/catalogo/views/_bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
			
		<!-- Custom styles for this template -->
		<link href="http://10.4.224.74/catalogo/views/_css/app.css" rel="stylesheet">
		<link href="http://10.4.224.74/catalogo/views/_css/docs.css" rel="stylesheet">
		<link href="http://10.4.224.74/catalogo/views/_css/extras.css" rel="stylesheet">
		
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    	<!--[if lt IE 9]><script src="http://10.4.224.74/catalogo/views/_bootstrap/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    	<script src="http://10.4.224.74/catalogo/views/_bootstrap/assets/js/ie-emulation-modes-warning.js"></script>
	
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="http://10.4.224.74/catalogo/views/_js/html5shiv.min.js"></script>
	      <script src="http://10.4.224.74/catalogo/views/_js/respond.min.js"></script>
	    <![endif]-->
	    
	    <style type="text/css">
	    body {
			overflow-y: scroll;
		}
	    table th, table td {
		    text-align: left;
		}
		
		.obrigatorio input[type="password"] {
		    border-left: 3px solid #b94a48;
		}
		
		input[type="password"] {
		    background: #f1f1f1 none repeat scroll 0 0 !important;
		    border: 1px solid #ccc;
		    color: #727979;
		}
		input[type="password"] {
		    border-radius: 0 !important;
		    box-shadow: none !important;
		    font-size: 13px !important;
		    height: auto;
		    padding: 8px 10px;
		    width: 100%;
		}
		input[type="password"]:focus{
		  box-shadow: none !important;
		  background: #fff !important;
		  border-color: #66afe9;
		}
		
		header #main-nav .navbar-brand {
	 	   	margin-top: -15px;
	    }
		
		.navbar-brand {    
			height: 65px;
	    }
	    
	    header #main-nav .navbar-nav > li > a:hover {
			background-color: transparent !important;
		    border-color: #337ab7 !important;
		    border-bottom: 2px solid #4691d3 !important;;
		
		}
		
		.nav .open > a, .nav .open > a:focus, .nav .open > a:hover {    
			background-color: transparent !important;
		    border-color: #337ab7 !important;
		    border-bottom: 2px solid #4691d3 !important;;
		}
	    
	    .contraste-ativo header #main-nav .navbar-nav > li > a:hover {
			background-color: #000;
		    border-color: #ede661;
		    border-bottom: 2px solid #ede661;
	    
	    }
		
		.contraste-ativo .nav .open > a, .nav .open > a:focus, .nav .open > a:hover {    
			background-color: #000;
		    border-color: #ede661;
		    border-bottom: 2px solid #ede661;
		}
		
		.contraste-ativo .dropdown-menu > li > a {  
			background-color: #262626;
			
		}
		
		.contraste-ativo .dropdown-menu {
		    background-color: #262626;
	    }
	    </style>
	    
  	</head>
	<body>	
		<!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
    	<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="http://10.4.224.74/catalogo/views/_bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>
    	<script src="http://10.4.224.74/catalogo/views/_bootstrap/js/bootstrap.min.js"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="http://10.4.224.74/catalogo/views/_bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
		<!-- ================================================== -->
			
	    <!-- Scripts para utilização no site -->
    	<script src="http://10.4.224.74/catalogo/views/_js/utilidades.js"></script>
		<!-- ================================================== -->
		
		<header>
    		<div class="container">
	    		<div class="row">
	    			<nav class="navbar" id="aux-nav">
						<div class="col-md-2 linkPortal">CATALOGO BÁSICO</div>
						<div class="col-md-2 col-md-offset-3 acessibilidade">
							<a id="contraste" class="pull-right" alt="Ajuste Contraste"><i class="glyphicon glyphicon-adjust" aria-hidden="true"></i> Contraste</a>
						</div>
						<div class="col-md-5 pull-right perfilUsuario">
							<ul class="list-inline">
								<li>OM: DSM</li>
								<li>Perfil: Administrador</li>
								<li>Login: <i><span title="Levy dos Santos teixeira">85388769</span></i></li>
								<li>versão: 1.0</li>
							</ul>
						</div>
					</nav>
	    		</div>

	    		<div class="row">
	    			<nav class="navbar" id="main-nav">
		            	<div class="navbar-header">
		                	<a href="http://10.4.224.74/catalogo/" class="navbar-brand" alt="CATALOGO BÁSICO - SIGSAUDE. Clique para retornar para página inicial." title="CATALOGO BÁSICO - SIGSAUDE. Clique para retornar para página inicial."><img class="img-responsive" alt='ajax' src='http://10.4.224.74/catalogo/views/_images/logotipo.png'></a>
		                </div>
	                	
	                	<ul class="nav navbar-nav navbar-right">
						        						        <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administração <span class="caret"></span></a>
							          <ul class="dropdown-menu">
							            <li><a href="http://10.4.224.74/catalogo/centro-atividade">Centros de Atividades</a></li>							            <li><a href="http://10.4.224.74/catalogo/pessoas">Pessoas</a></li>
							            <li><a href="http://10.4.224.74/catalogo/profissional-saude">Profissionais de Saúde</a></li>
							            <li><a href="http://10.4.224.74/catalogo/equipamentos">Equipamentos de Saúde</a></li>
							            <li><a href="http://10.4.224.74/catalogo/equipes">Equipes de Profissionais de Saúde</a></li>
									  </ul>
							   	</li>
							   	<li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gerência <span class="caret"></span></a>
							          <ul class="dropdown-menu">
							            <li><a href="http://10.4.224.74/catalogo/centro-atividade-om">Centros de Atividades da OM</a></li>
							            <li><a href="http://10.4.224.74/catalogo/procedimentos-saude">Procedimentos de Saúde da OM</a></li>
							            <li><a href="http://10.4.224.74/catalogo/usuarios-extra-mb">Usuarios Extra-MB</a></li>
							            <li><a href="http://10.4.224.74/catalogo/alocacao-profissionais-saude">Alocação de Profissionais</a></li>
							            <li><a href="http://10.4.224.74/catalogo/alocacao-equipamentos">Alocação de Equipamentos de Saúde</a></li>
							            <li><a href="http://10.4.224.74/catalogo/alocacao-equipes">Alocação de Equipes</a></li>
							            <li><a href="http://10.4.224.74/catalogo/alocacao-profissionais-equipes">Alocação de Profissionais a Equipes</a></li>
									  </ul>
							   	</li>
							   			                		<li><a href="http://10.4.224.74/catalogo/login/sair"><i class="fa fa-sign-out"></i> Sair</a></li>
	                     </ul>
	               </nav>
	    		</div>
    		</div>
    	</header>
		
		<div class="container wrapper-content" id="divPrincipal"><div class="alert alert-success alert-dismissible" role="alert" > <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4>&nbsp;</h4><p>Bem Vindo ao <strong>Módulo de Catálog Básico do SIGSAUDE</strong></p></div>
<p class="text-justify">O módulo de Administração do SIGSAUDE visa fazer a gestão de módulos e perfis existentes na plataforma SIGSAUDE, bem como o cadastramento e manutenção dos usuários que acessarão a referida plataforma.</p>
<p class="text-right"><strong>DIRETORIA DE SAÚDE DA MARINHA (DSM)</strong></p>
</div>
		<div id="divAjax" style="display: none;"></div>
		
		<script>
		var imagemAjax = "<center><img alt='ajax' src='http://10.4.224.74/catalogo/views/_images/ajax.gif'></center>";
				
		rolarScroll = function()
		{
			$('html, body').animate({scrollTop:0}, 'slow');
		}
		
		carregarTelaAjax = function(strUrl,arrDados)
		{
			$.ajax({
				  method: "POST",
				  url: 'http://10.4.224.74/catalogo/'+strUrl,
				  data: arrDados,
				  dataType: "html",
				  
				  beforeSend: function(){
		          		$("#divPrincipal").html(imagemAjax);
		            	rolarScroll();
		           },
		           success: function(data){
		                //this.append(data);
		                $("#divPrincipal").html(data);	            
		           }
				  
			});
		}
		
		limparFormulario = function(idFormulario)
		{
			$('#'+idFormulario).each (function(){
			  this.reset();
			});
		}
		
		$('#contraste').click(function(){   
			$('body').toggleClass('contraste-ativo');
		});
		</script>
		
		
		<!-- Footer -->
    	<footer>
	        <div class="container">
		        <div class="row">
			        <div class="col-md-2">
			        	<img src="http://10.4.224.74/catalogo/views/_images/icoMarinha.png" />
			        </div>

			        <div class="col-md-4 col-md-offset-6">109 Anos Cuidando da Saúde da Família Naval</div>
		        </div>
	        </div>
      	</footer>
		
	</body>
</html><?php }
}
