<?php
/* Smarty version 3.1.30, created on 2017-02-02 13:58:53
  from "D:\www\catalogo\views\equipamentos\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5893573d0160d6_89606508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ded7ac24307a66eee9522b721a5ab03544379743' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\equipamentos\\formulario.html',
      1 => 1486050643,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5893573d0160d6_89606508 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://localhost/catalogo/views/_jquery/jquery.mask.min.js"></script>
<script src="http://localhost/catalogo/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://localhost/catalogo/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Estruturas/Equipamentos de Saúde <small><i class="fa fa-angle-double-right"></i> Excluir dados</small></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="r_eqpmt" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Descrição</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
      		<input type="text" id="r_eqpmt" name="r_eqpmt" value="AAAAA TESTE 2222" readonly placeholder="Descrição do equipamento" maxlength="200" class="form-control" required>
    	</div>
  	</div>

  	  	<div class="form-group">
    	<div class="col-sm-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-10">
      		<div class="checkbox">
        		<label><strong>Ativo</strong>.</label><br>
        	</div>
    	</div>
  	</div>
  	  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="c_eqpmt" name="c_eqpmt" value="28">
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="carregarTelaAjax('equipamentos','');">Retornar</button>
  			<button type="submit" id="btnConfirmar" class="btn btn-primary">Confirmar</button>
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
   			i_acao: {required: true}
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
	            url: "http://localhost/catalogo/equipamentos/confirmarexcluir",
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
});
</script> 

<?php }
}
