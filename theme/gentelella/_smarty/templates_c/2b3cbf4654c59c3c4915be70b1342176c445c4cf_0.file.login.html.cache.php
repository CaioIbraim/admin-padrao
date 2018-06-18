<?php
/* Smarty version 3.1.30, created on 2016-08-29 16:02:10
  from "D:\www\mvc\views\login\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57c486b22bbe62_95070279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b3cbf4654c59c3c4915be70b1342176c445c4cf' => 
    array (
      0 => 'D:\\www\\mvc\\views\\login\\login.html',
      1 => 1472491264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c486b22bbe62_95070279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2996457c486b22891d0_18556904';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_css/login.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_bootstrap/assets/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_bootstrap/assets/js/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" id="frmLogin" method="post" action="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
login/entrar" onsubmit="return true;">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="senha" name="senha" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="btnlogin">Sign in</button>
      </form>
      <br>
      <div id="divAjax"></div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_bootstrap/assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
    
    
    <!-- script e css da tela -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.mask.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.validate/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.validate/localization/messages_pt_BR.js"><?php echo '</script'; ?>
>
	<!-- script e css da tela -->
    
    
	<?php echo '<script'; ?>
>
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
	<?php echo '</script'; ?>
> 
	
	    
    
  </body>
</html>
<?php }
}
