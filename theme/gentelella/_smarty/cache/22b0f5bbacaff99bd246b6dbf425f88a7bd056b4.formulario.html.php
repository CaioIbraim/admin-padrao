<?php
/* Smarty version 3.1.30, created on 2017-02-08 13:11:23
  from "D:\www\catalogo\views\equipes\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589b351bf20079_59818331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85794403b7ba5fd769e2afb23cd0005c78ae2d71' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\equipes\\formulario.html',
      1 => 1486553838,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_589b351bf20079_59818331 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.mask.min.js"></script>
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Equipes de Profissionais de Saúde <small><i class="fa fa-angle-double-right"></i> Incluir dados</small></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="i_equip" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
      		<input type="text" id="i_equip" name="i_equip" value=""  placeholder="Nome da equipe" maxlength="50" class="form-control" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="r_equip" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Descrição</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
      		<input type="text" id="r_equip" name="r_equip" value=""  placeholder="Descrição da equipe" maxlength="200" class="form-control">
    	</div>
  	</div>

  		<div class="form-group">
    	<div class="col-sm-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-10">
      		<div class="checkbox">
        		<label><input type="checkbox" id="c_ind_atvdd" name="c_ind_atvdd" value="A" > Ativo</label><br>
        	</div>
    	</div>
  	</div>
  	  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="c_equip" name="c_equip" value="">
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="carregarTelaAjax('equipes','');">Retornar</button>
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
	            url: "http://10.4.224.74/catalogo/equipes/confirmarincluir",
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
