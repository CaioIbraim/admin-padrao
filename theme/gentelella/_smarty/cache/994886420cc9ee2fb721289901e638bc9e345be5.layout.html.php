<?php
/* Smarty version 3.1.30, created on 2016-10-25 06:27:16
  from "/var/www/html/mvc/views/_includes/layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580f1764515fd1_43150124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48831cea8c51f45468d6155264d7b6d41804bc1c' => 
    array (
      0 => '/var/www/html/mvc/views/_includes/layout.html',
      1 => 1472581457,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_580f1764515fd1_43150124 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Formulários - Saúde Naval" />
	    
		<title>Principal - Formulários</title>

		<link href="http://10.4.228.220/mvc/views/_images/favicon.png" rel="shortcut icon" />
	
	    <!-- Bootstrap -->
	    <link href="http://10.4.228.220/mvc/views/_bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://10.4.228.220/mvc/views/_font-awesome/css/font-awesome.min.css" type="text/css" />
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    	<link href="http://10.4.228.220/mvc/views/_bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
			
		<!-- Custom styles for this template -->
		<link href="http://10.4.228.220/mvc/views/_css/app.css" rel="stylesheet">
		<link href="http://10.4.228.220/mvc/views/_css/docs.css" rel="stylesheet">
		
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    	<!--[if lt IE 9]><script src="http://10.4.228.220/mvc/views/_bootstrap/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    	<script src="http://10.4.228.220/mvc/views/_bootstrap/assets/js/ie-emulation-modes-warning.js"></script>
	
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="http://10.4.228.220/mvc/views/_js/html5shiv.min.js"></script>
	      <script src="http://10.4.228.220/mvc/views/_js/respond.min.js"></script>
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
    	<script src="http://10.4.228.220/mvc/views/_jquery/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="http://10.4.228.220/mvc/views/_bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>
    	<script src="http://10.4.228.220/mvc/views/_bootstrap/js/bootstrap.min.js"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="http://10.4.228.220/mvc/views/_bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
		<!-- ================================================== -->
			
	    <!-- Scripts para utilização no site -->
    	<script src="http://10.4.228.220/mvc/views/_js/utilidades.js"></script>
		<!-- ================================================== -->
		
		<header>
    		<div class="container">
	    		<div class="row">
	    			<nav class="navbar" id="aux-nav">
						<div class="col-md-2 linkPortal">FORMULÁRIOS</div>
						<div class="col-md-2 col-md-offset-2 acessibilidade">
							<a id="contraste" class="pull-right" alt="Ajuste Contraste"><i class="glyphicon glyphicon-adjust" aria-hidden="true"></i> Contraste</a>
						</div>
						<div class="col-md-6 pull-right perfilUsuario">
							<ul class="list-inline">
																<li>Perfil: Administrador</li>								<li>Nome: 85388769
										
								</li>
								<li>versão: 1.0</li>
							</ul>
						</div>
					</nav>
	    		</div>

	    		<div class="row">
	    			<nav class="navbar" id="main-nav">
		            	<div class="navbar-header">
		                	<a href="http://10.4.228.220/mvc/" class="navbar-brand" alt="FORMULÁRIOS - Saúde Naval. Clique para retornar para página inicial." title="FORMULÁRIOS - Saúde Naval. Clique para retornar para página inicial."><img class="img-responsive" alt='ajax' src='http://10.4.228.220/mvc/views/_images/logotipo.png'></a>
		                </div>
	                	
	                	<ul class="nav navbar-nav navbar-right">
						        						        <li class="dropdown">
							          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administração <span class="caret"></span></a>
							          <ul class="dropdown-menu">
							            <li><a href="http://10.4.228.220/mvc/mod/usuarios.php">Usuários</a></li>
							            <li><a href="http://10.4.228.220/mvc/mod/operacoes.php">Operações</a></li>
							            <li><a href="http://10.4.228.220/mvc/mod/categorias.php">Categorias de Formulários</a></li>
							            <li><a href="http://10.4.228.220/mvc/mod/formularios.php">Formulários</a></li>
							            <li><a href="http://10.4.228.220/mvc/mod/gruposacesso.php">Grupos de acesso</a></li>
									  </ul>
							   	</li>
							   			                									   	<li><a href="http://10.4.228.220/mvc/usuario/alterarsenha"><i class="fa fa-key"></i> Alterar Senha</a></li>
							   	<li><a href="http://10.4.228.220/mvc/login/sair"><i class="fa fa-sign-out"></i> Sair</a></li>
	                     </ul>
	               </nav>
	    		</div>
    		</div>
    	</header>
		
		<div class="container wrapper-content" id="divPrincipal">

<table border="1">
  <tr>
    <th>Column 1 Heading</th>
    <th>Column 2 Heading</th>
  </tr>
  <tr>
    <td>Row 1: Col 1</td>
    <td>Row 1: Col 2</td>
  </tr>
</table>


</div>
		<div id="divAjax" style="display: none;"></div>
		
		<script>
		var imagemAjax = "<center><img alt='ajax' src='http://10.4.228.220/mvc/views/_images/ajax.gif'></center>";
				
		rolarScroll = function()
		{
			$('html, body').animate({scrollTop:0}, 'slow');
		}
		
		carregarTelaAjax = function(strUrl,arrDados)
		{
			$.ajax({
				  method: "POST",
				  url: 'http://10.4.228.220/mvc/'+strUrl,
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
			        	<img src="http://10.4.228.220/mvc/views/_images/icoMarinha.png" />
			        </div>

			        <div class="col-md-4 col-md-offset-6">Creditos da DSM</div>
		        </div>
	        </div>
      	</footer>
		
	</body>
</html><?php }
}
