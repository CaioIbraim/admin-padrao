<?php
/* Smarty version 3.1.30, created on 2017-07-14 15:34:28
  from "D:\www\aux_regulacao\views\alterarsenha\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59690eb409cb89_17267980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cac3802e77d65f82e378418697e941574dc7c7cc' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\alterarsenha\\formulario.html',
      1 => 1498152944,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59690eb409cb89_17267980 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Alterar Senha</h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="senha_atual" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Senha Atual</label>
    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 obrigatorio">
      		<input type="password" id="senha_atual" name="senha_atual" value="" class="form-control" maxlength="20" required>
    	</div>
  	</div>
	<div class="form-group">
    	<label for="nova_senha" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nova Senha</label>
    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 obrigatorio">
      		<input type="password" id="nova_senha" name="nova_senha" value="" class="form-control" maxlength="20" required>
    	</div>
  	</div>
	<div class="form-group">
    	<label for="confirmacao" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Confirmação</label>
    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 obrigatorio">
      		<input type="password" id="confirmacao" name="confirmacao" value="" class="form-control" maxlength="20" required>
    	</div>
  	</div>
  	  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
  			<button type="submit" id="btnConfirmar" class="btn btn-primary">Alterar</button>
    	</div>
  	</div>
</form>


<!-- Scripts of page -->


<script>
$(document).ready(function(){
	
	// Validação do formulário
   	$("#frmFormulario").validate({
   		errorElement: 'div',
		errorClass: 'has-error help-block',
		focusInvalid: false,
		rules: {
			senha_atual: {
				required: true
			},
			nova_senha: {
				required: true,
				minlength: 8,
				senhaforte: true
			},
			confirmacao: {
				required: true,
				minlength: 8,
				equalTo: "#nova_senha"
			}
   		},
		messages: {
			nova_senha: {
				senhaforte: "Informe uma senha forte.<br>Use caracteres maiúsculos e números na senha.<br>Evite palavras fáceis."
			}
		},

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
	            url: "http://localhost/aux_regulacao/alterarsenha/alterar",
	            data: $("#frmFormulario").serialize(),
	            type: 'POST',
	            context: $('#divAjax'),
	            beforeSend: function(){
	            	$("#msgAjax").html(imagemAjax);
	            	$("#btnConfirmar").attr("disabled","disabled");
	            	rolarScroll();
	            },
	            success: function(data){
	                this.append(data);
	                $("#msgAjax").html(data);	            	
	                $("#btnConfirmar").removeAttr("disabled");
	                
	            }
			});
		},
		invalidHandler: function (form) {
					
		}	    		
    });
   	
   	$.validator.addMethod("senhaforte", function(value) {
   	   /*
   		return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
   	       && /[A-Za-z]/.test(value) // has a lowercase letter
   	       && /\d/.test(value) // has a digit
   	  	*/
   	  	
	   	var strength = 0;
   	   
		if (value.length > 7) {strength++; }
		// If password contains both lower and uppercase characters, increase strength value.
		if ( /([a-z].*[A-Z])|([A-Z].*[a-z])/.test(value)  ){ strength++; }
		// If it has numbers and characters, increase strength value.
		if ( /([a-zA-Z])/.test(value) && /([0-9])/.test(value) ){ strength++; }
		// If it has one special character, increase strength value.
		if ( /([!,%,&,@,#,$,^,*,?,_,~])/.test(value) ){ strength++; }
		// If it has two special characters, increase strength value.
		if ( /(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/.test(value) ){ strength++; }
		
		if ( /(deus)|(comand)|(diretor)|(jesus)|(marinha)/.test(value) ){
			strength = 0;
		}
		
		
   	  	if (strength >= 3){
   	  		return true;
   	  	}
   	    
   	  	return false;
   	       
   	});
   	
	
});
</script> 


<?php }
}
