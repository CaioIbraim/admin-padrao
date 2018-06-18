<?php
/* Smarty version 3.1.30, created on 2017-02-01 15:03:12
  from "D:\www\catalogo\views\centro-atividade\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589214d053d7a3_28571448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a87268553f216905cb283ae46e8184f96abe0d26' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\centro-atividade\\formulario.html',
      1 => 1478795322,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_589214d053d7a3_28571448 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.mask.min.js"></script>
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Centro de Atividades <small><i class="fa fa-angle-double-right"></i> Incluir dados</small></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	<div class="form-group">
    	<label for="c_categ_ctro_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Categoria</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
    		<select id="c_categ_ctro_atvdd" name="c_categ_ctro_atvdd" class="c-select"  required>
    		<option value="">Selecione</option>
    		    			<option value="3" >Administrativo</option>
    		    			<option value="1" >Clínica</option>
    		    			<option value="2" >Enfermagem</option>
    		    			<option value="4" >Laboratório</option>
    		    			<option value="5" >Serviço</option>
    		    		</select>
    	</div>
  	</div>
	
	<div class="form-group">
    	<label for="r_ctro_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome</label>
    	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 obrigatorio">
      		<input type="text" id="r_ctro_atvdd" name="r_ctro_atvdd" value=""  placeholder="Nome do Centro de Atividades " maxlength="100" class="form-control" required>
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
    		<input type="hidden" id="c_ctro_atvdd" name="c_ctro_atvdd" value="">
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="carregarTelaAjax('centro-atividade','');">Retornar</button>
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
	            url: "http://10.4.224.74/catalogo/centro-atividade/confirmarincluir",
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
