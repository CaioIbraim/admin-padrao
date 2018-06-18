<?php
/* Smarty version 3.1.30, created on 2017-08-03 14:04:29
  from "D:\www\aux_regulacao\views\login\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5983579db90547_32617884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '472e388b126c2ef9f620f4ce871945dddc4dcf84' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\login\\login.html',
      1 => 1492453217,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5983579db90547_32617884 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
	<html lang="pt-br">
		<head>
		<meta charset = "utf-8" />
		<title>AUX REGULAÇÃO-PROD - 1.0</title>
		<link href="html/images/favicon.png" rel="shortcut icon" />

		<meta name="description" content="Formulários - Saúde Naval" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    	<link rel="stylesheet" href="http://localhost/aux_regulacao/views/_bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://localhost/aux_regulacao/views/_css/login.css" type="text/css" />
		<link rel="stylesheet" href="http://localhost/aux_regulacao/views/_font-awesome/css/font-awesome.min.css" type="text/css" />

		
		<!-- fallback para o layout funcionar perfeitamente abaixo do ie9 -->
		<!--[if lt IE 9]>
			<script type='text/javascript' src="html/js/modernizr.min.js"></script>
			<script type='text/javascript' src="html/js/css3-mediaqueries.js"></script>  
			<script type='text/javascript' src="html/js/html5shiv.min.js"></script>
			<script type='text/javascript' src="html/js/respond.min.js"></script>
			<script type='text/javascript' src="html/js/placeholders.js"></script>
		
		
		<style type="text/css">
		  .padding{
			padding-bottom:70px;
		  }
		  .vertical-center{
			margin-top:30px;
			margin-left:20px;
		  }
		  
		img.bg {
		  /* Set rules to fill background */
		  min-height: 100%;
		  min-width: 1024px;
			
		  /* Set up proportionate scaling */
		  width: 100%;
		  height: auto;
			
		  /* Set up positioning */
		  position: fixed;
		  top: -200px;
		  left: 0;
		}
		
		@media screen and (max-width: 1024px) { /* Specific to this particular image */
		  img.bg {
		    left: 50%;
		    margin-left: -512px;   /* 50% */
		  }
		}
		
		html{overflow-x:hidden}
		  
		</style>
		
		<![endif]-->
		
		<!-- caso o javascript nao funcione, eu ao menos, tenho que mostrar os labels no login por que não funcionará o placeholder nos navegadores antigos -->
		<!--[if lt IE 9]>
		<noscript>
		    <style type="text/css">
		        .label_javascript {display:block;}
				.rodape{margin-top:100px;position:relative;float:left}
				.vertical-center{width:95%;margin-left:0px !important;}
		    </style>
		</noscript>
		<![endif]-->
		

	</head>

	<body class='home'>
		<!-- fundo para navegadores mais antigos que ie9 -->
		<!--[if lt IE 9]>
		<img src="html/images/bg.jpg" class="bg">
		<![endif]-->

		<div id="bg_pattern1"></div>


		<div class="container vertical-center">
		
			<div class='col-md-offset-2 col-md-8 cor_fundo padding'>
				<div class='col-md-5 login'>
               		<img alt="" src="http://localhost/aux_regulacao/views/_images/logotipo.png">
               		<form method="" action="http://localhost/aux_regulacao/login/entrar" onsubmit="return true;" id="frmLogin">
						<h1>AUX REGULAÇÃO-PROD - 1.0</h1>
						
						<label for="usuario" >Usuário</label>
						<input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuário" required autofocus>
				       
				        <label for="senha">Senha</label>
				        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
        				
						<div class='col-md-5 col-sm-3 col-xs-12 tira_margem'>
							<input class='btn_submit' type='submit' value='ENTRAR'>
						</div>
						
						<div class='col-md-12 col-sm-12 col-xs-12' id="divAjax"></div>
               		</form>			
				</div>
				<div class='col-md-1'></div>
				<div class='col-md-6 texto_central'>
					<p>As informações contidas nos sistemas informatizados da administração pública estão protegidas por sigilo.</p> 
					<p>O acesso não autorizado ou não motivado por necessidade de serviço, a disponibilização voluntária ou acidental da senha de acesso ou de informações e a quebra do sigilo constituem infrações ou ilícitos que sujeitam o usuário a responsabilização administrativa, penal e civil.</p> 
					<p>Quando encerrar as operações, tenha cuidado ao sair do sistema. <strong>Ao acessar o sistema, o usuário declara-se ciente das responsabilidades acima referidas</strong>.</p>
					<p><strong>Base Legal</strong>: Constituição Federal; Código Penal; Código de Conduta da Alta Administração Federal.</p>
				</div>
				
			</div>
			<div class='col-md-2'></div>
   		</div>
   		
   			
   		
		<footer>
			<div class='col-md-12 col-lg-12 col-sm-12 col-xs-12 rodape'>
				<img src='http://localhost/aux_regulacao/views/_images/marinha.png' alt='Marinha'>
				<div class='texto_rodape'>110 Anos Cuidando da Saúde da Família Naval</div>
			</div>
		</footer>
		
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="http://localhost/aux_regulacao/views/_bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
	    
	    <!-- script e css da tela -->
		<script src="http://localhost/aux_regulacao/views/_jquery/jquery.min.js"></script>
		<script src="http://localhost/aux_regulacao/views/_jquery/jquery.mask.min.js"></script>
		<script src="http://localhost/aux_regulacao/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
		<script src="http://localhost/aux_regulacao/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>
		<script src="http://localhost/aux_regulacao/views/_bootstrap/js/bootstrap.min.js"></script>
		
		
		<!-- Scripts of page -->
	    <script>

		$(document).ready(function(){
		
			// Validação do formulário
		   	$("#frmLogin").validate({
		   		errorElement: 'div',
				errorClass: 'has-error help-block',
				//focusInvalid: false,
				/*rules: {
		   			i_acao: {required: true}
		   		},
				messages: {
					nip: "Informe seu NIP.",
					senha: "Informe a data de nascimento."
				},*/
		
				highlight: function (e) {
					$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
				},
				
				success: function (e) {
					$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
					$(e).remove();
				},
		
				// EM CASO DE AJAX
				submitHandler: function (form) {
					
					$.ajax({
			            url: $("#frmLogin").attr('action'),
			            data: $("#frmLogin").serialize(),
			            type: 'POST',
			            context: $('#divAjax'),
			            beforeSend: function(){
			            	$("#divAjax").html('Aguarde...');
			            	$("#btnlogin").attr("disabled","disabled");
			            },
			            success: function(data){
			                this.append(data);
			                $("#divAjax").html(data);	            	
			                $("#btnlogin").removeAttr("disabled");
			            }
					});
					
					return false;
				},
				invalidHandler: function (form) {
							
				}	    		
		    });
		});
		</script> 
		

	</body>
</html>
<?php }
}
