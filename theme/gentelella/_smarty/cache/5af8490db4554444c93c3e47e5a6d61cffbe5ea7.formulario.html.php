<?php
/* Smarty version 3.1.30, created on 2017-04-20 16:22:56
  from "D:\www\aux_regulacao\views\usuariossmjustica\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f90a908fb5c0_34853523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '460dece22bac31972055a04a3ede79023d1f4c86' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\usuariossmjustica\\formulario.html',
      1 => 1492691767,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_58f90a908fb5c0_34853523 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.mask.min.js"></script>
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link href="http://localhost/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.js"></script>

<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Usuários do Fusma por Decisão Judicial <small><i class="fa fa-angle-double-right"></i> Incluir dados</small></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
  	<div class="form-group">
    	<label for="nip_tit" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">NIP Titular</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
      		<input type="text" id="nip_tit" name="nip_tit" value="" placeholder="NIP Titular" class="form-control"  maxlength="8">
      	</div>
  	</div>
  	
  	<div class="form-group">
    	<label for="nip_vinc" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">NIP Dependente</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
      		<input type="text" id="nip_vinc" name="nip_vinc" value="" placeholder="NIP Dependente" class="form-control"  maxlength="8">
      	</div>
  	</div>
  	
  	<div class="form-group">
    	<label for="nm_pessoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome</label>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 obrigatorio">
      		<input type="text" id="nm_pessoa" name="nm_pessoa" value="" placeholder="Nome da Pessoa" class="form-control"  maxlength="80" required>
      	</div>
  	</div>
  	
  	<div class="form-group">
    	<label for="observacao" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Observação</label>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 obrigatorio">
      		<input type="text" id="observacao" name="observacao" value="" placeholder="Observação" class="form-control"  maxlength="500" required>
      	</div>
  	</div>
  	
  	<div class="form-group">
    	<label for="data_cadastro" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Data Inclusão</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 obrigatorio">
      		<input type="text" id="data_cadastro" name="data_cadastro" value="" placeholder="Data" class="form-control"  maxlength="10" required>
      	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="id_tipo_pessoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Tipo da Pessoa</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
    		<select id="id_tipo_pessoa" name="id_tipo_pessoa" class="c-select"  required>
    		<option value="">Selecione</option>
    		<option value="1" >Militar</option>
    		<option value="2" >Pensionista</option>
    		<option value="3" >Dependente</option>
    		<option value="4" >Civil</option>
    		<option value="5" >Contratado</option>
    		<option value="6" >Outros</option>
    		</select>
    	</div>
  	</div>
  	  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="chave" name="chave" value="" required>
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="location.href='usuariossmjustica';">Retornar</button>
  			<button type="submit" id="btnConfirmar" class="btn btn-primary">Confirmar</button>
    	</div>
  	</div>
</form>

<!-- Scripts of page -->


<script>
$(document).ready(function(){

	$('#nip_tit').mask('00000000', {clearIfNotMatch: true});
	$('#nip_vinc').mask('00000000', {clearIfNotMatch: true});
	$('#data_cadastro').mask('00/00/0000', {clearIfNotMatch: true});

	$("#nip_tit").blur(function(){
		if (!Utilidades.verificaNIP(this.value)){
			this.value = '';
		}
	});
	$("#nip_vinc").blur(function(){
		if (!Utilidades.verificaNIP(this.value)){
			this.value = '';
		}
	});
	$("#data_cadastro").blur(function(){
		if (!Utilidades.verificaData(this.value)){
			this.value = '';
		}
	});
	
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
	            url: "http://localhost/aux_regulacao/usuariossmjustica/confirmarincluir",
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
