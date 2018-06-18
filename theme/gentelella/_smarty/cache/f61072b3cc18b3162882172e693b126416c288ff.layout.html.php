<?php
/* Smarty version 3.1.30, created on 2017-08-03 13:59:24
  from "D:\www\aux_regulacao\views\_includes\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5983566ca27317_91945676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b778d8aecf1be3e51ddfb72c3a644de7355c3714' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\_includes\\layout.html',
      1 => 1498159257,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5983566ca27317_91945676 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Formulários - Saúde Naval" />
	    
		<title>Principal - AUX REGULAÇÃO-PROD</title>

		<link href="http://localhost/aux_regulacao/views/_images/favicon.png" rel="shortcut icon" />
	
	    <!-- Bootstrap -->
	    <link href="http://localhost/aux_regulacao/views/_bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://localhost/aux_regulacao/views/_font-awesome/css/font-awesome.min.css" type="text/css" />
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    	<link href="http://localhost/aux_regulacao/views/_bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
			
		<!-- Custom styles for this template -->
		<link href="http://localhost/aux_regulacao/views/_css/app.css" rel="stylesheet">
		<link href="http://localhost/aux_regulacao/views/_css/docs.css" rel="stylesheet">
		<link href="http://localhost/aux_regulacao/views/_css/extras.css" rel="stylesheet">
		
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    	<!--[if lt IE 9]><script src="http://localhost/aux_regulacao/views/_bootstrap/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    	<script src="http://localhost/aux_regulacao/views/_bootstrap/assets/js/ie-emulation-modes-warning.js"></script>
	
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="http://localhost/aux_regulacao/views/_js/html5shiv.min.js"></script>
	      <script src="http://localhost/aux_regulacao/views/_js/respond.min.js"></script>
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
    	<script src="http://localhost/aux_regulacao/views/_jquery/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="http://localhost/aux_regulacao/views/_bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>
    	<script src="http://localhost/aux_regulacao/views/_bootstrap/js/bootstrap.min.js"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="http://localhost/aux_regulacao/views/_bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
		<!-- ================================================== -->
			
	    <!-- Scripts para utilização no site -->
    	<script src="http://localhost/aux_regulacao/views/_js/utilidades.js"></script>
		<!-- ================================================== -->
		
		<header>
    		<div class="container">
	    		<div class="row">
	    			<nav class="navbar" id="aux-nav">
						<div class="col-md-2 linkPortal">AUX REGULAÇÃO-PROD</div>
						<div class="col-md-2 col-md-offset-3 acessibilidade">
							<a id="contraste" class="pull-right" alt="Ajuste Contraste"><i class="glyphicon glyphicon-adjust" aria-hidden="true"></i> Contraste</a>
						</div>
						<div class="col-md-5 pull-right perfilUsuario">
							<ul class="list-inline">
								<li>OM: DSM</li>
								<li>Perfil: Tudo</li>
								<li>Login: <i><span title="LEVY DOS SANTOS TEIXEIRA">85388769</span></i></li>
								<li>versão: 1.0</li>
							</ul>
						</div>
					</nav>
	    		</div>

	    		<div class="row">
	    			<nav class="navbar" id="main-nav">
		            	<div class="navbar-header">
		                	<a href="http://localhost/aux_regulacao/" class="navbar-brand" alt="AUX REGULAÇÃO-PROD - SIGSAUDE. Clique para retornar para página inicial." title="AUX REGULAÇÃO-PROD - SIGSAUDE. Clique para retornar para página inicial."><img class="img-responsive" alt='ajax' src='http://localhost/aux_regulacao/views/_images/logotipo.png'></a>
		                </div>
	                	
	                	<ul class="nav navbar-nav navbar-right">
						        						        <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gerênciar <span class="caret"></span></a>
							          <ul class="dropdown-menu">
							            <li><a href="http://localhost/aux_regulacao/usuarios">Usuários</a></li>							            
							            <li><a href="http://localhost/aux_regulacao/ose">OSE</a></li>
							            <li><a href="http://localhost/aux_regulacao/contrato">Contratos</a></li>
									  </ul>
							   	</li>
							   	<li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Guia <span class="caret"></span></a>
							          <ul class="dropdown-menu">
							          	
							            <li><a href="http://localhost/aux_regulacao/guia-pesquisa">Pesquisar</a></li>
							            <li role="separator" class="divider"></li>
							            <li class="dropdown-header">Gerar Guias</li>
							            <li><a href="http://localhost/aux_regulacao/guia-consulta">&nbsp;&nbsp;&nbsp;Consultas</a></li>
							            <li><a href="http://localhost/aux_regulacao/guia-internacao">&nbsp;&nbsp;&nbsp;Internação </a></li>
							            <li><a href="http://localhost/aux_regulacao/guia-solicitacao">&nbsp;&nbsp;&nbsp;Solicitação de SP/SADT</a></li>
							            <li><a href="http://localhost/aux_regulacao/guia-odontologica">&nbsp;&nbsp;&nbsp;Tratamento Odontológico</a></li>
							            
							            
									  </ul>
							   	</li>
							   			                		<li><a href="http://localhost/aux_regulacao/alterarsenha"> Alterar Senha</a></li>
		                		<li><a href="http://localhost/aux_regulacao/login/sair"><i class="fa fa-sign-out"></i> Sair</a></li>
	                     </ul>
	               </nav>
	    		</div>
    		</div>
    	</header>
		
		<div class="container wrapper-content" id="divPrincipal"><div class="alert alert-success alert-dismissible" role="alert" > <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4>&nbsp;</h4><p>Bem Vindo ao <strong>Módulo Auxiliar de Administração do Regulação</strong></p></div>
<p class="text-justify">O Módulo Auxiliar de Administração do Regulação visa agilizar a gestão de informações e operações existentes na plataforma legada do REGULAÇÃO, bem como a manutenção dos usuários que acessarão a referida plataforma.</p>
<p class="text-right"><strong>DIRETORIA DE SAÚDE DA MARINHA (DSM)</strong></p>
</div>
		<div id="divAjax" style="display: none;"></div>
		
		<script>
		var imagemAjax = "<center><img alt='ajax' src='http://localhost/aux_regulacao/views/_images/ajax.gif'></center>";
				
		rolarScroll = function()
		{
			$('html, body').animate({scrollTop:0}, 'slow');
		}
		
		carregarTelaAjax = function(strUrl,arrDados)
		{
			$.ajax({
				  method: "POST",
				  url: 'http://localhost/aux_regulacao/'+strUrl,
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
			        	<img src="http://localhost/aux_regulacao/views/_images/icoMarinha.png" />
			        </div>

			        <div class="col-md-4 col-md-offset-6">110 Anos Cuidando da Saúde da Família Naval</div>
		        </div>
	        </div>
      	</footer>
		
	</body>
</html><?php }
}
