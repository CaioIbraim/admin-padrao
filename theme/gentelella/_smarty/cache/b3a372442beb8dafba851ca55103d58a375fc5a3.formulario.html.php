<?php
/* Smarty version 3.1.30, created on 2017-06-21 14:55:27
  from "D:\www\aux_regulacao\views\ose\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594ab30f131923_83889156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8821855ac0f2c0320fe4ed6ebb94fdbdd6ca3912' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\ose\\formulario.html',
      1 => 1498066135,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_594ab30f131923_83889156 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.mask.min.js"></script>
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link href="http://localhost/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.js"></script>

<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>OSE <small><i class="fa fa-angle-double-right"></i> Alterar dados</small></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="nm_ose" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome</label>
    	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 obrigatorio">
      		<input type="text" id="nm_ose" name="nm_ose" value="3F SERVIÇOS MÉDICOS E ODONTOLOGICOS LTDA" placeholder="Nome da OSE" class="form-control" maxlength="100" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="documento" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Documento</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 obrigatorio">
      		<input type="text" id="documento" name="documento" value="13.530.988/0001-42" placeholder="CPF/CNPJ" class="form-control" maxlength="20" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="cep" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">CEP</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 obrigatorio">
      		<input type="text" id="cep" name="cep" value="29101410" placeholder="CEP" class="form-control" maxlength="9" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="nm_logr" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Logradouro</label>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 obrigatorio">
      		<input type="text" id="nm_logr" name="nm_logr" value="AV. CHAMPANGNART" placeholder="Logradouro" class="form-control" maxlength="50" required>
    	</div>
    	<label for="nu_logr" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Número</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 obrigatorio">
      		<input type="text" id="nu_logr" name="nu_logr" value="304" placeholder="Número" class="form-control" maxlength="15" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="ds_compl" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Complemento</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
      		<input type="text" id="ds_compl" name="ds_compl" value="ED. A.DA S. FREIRE 3534-4447" placeholder="Complemento" class="form-control" maxlength="60">
    	</div>
    	<label for="nm_bairro" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Bairro</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 obrigatorio">
      		<input type="text" id="nm_bairro" name="nm_bairro" value="PRAIA DA COSTA" placeholder="Bairro" class="form-control" maxlength="50" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="nm_municipio" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Município</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 obrigatorio">
      		<input type="text" id="nm_municipio" name="nm_municipio" value="VILA VELHA" placeholder="Município" class="form-control" maxlength="60" required>
    	</div>
    	<label for="uf" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Estado</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 obrigatorio">
      		
      		<select id="uf" name="uf" class="c-select" required>
      		
      			<option value="">Selecione</option> 
      			<option value="AC" >Acre</option> 
				<option value="AL" >Alagoas</option> 
				<option value="AM" >Amazonas</option> 
				<option value="AP" >Amapá</option> 
				<option value="BA" >Bahia</option> 
				<option value="CE" >Ceará</option> 
				<option value="DF" >Distrito Federal</option> 
				<option value="ES" selected>Espírito Santo</option> 
				<option value="GO" >Goiás</option> 
				<option value="MA" >Maranhão</option> 
				<option value="MT" >Mato Grosso</option> 
				<option value="MS" >Mato Grosso do Sul</option> 
				<option value="MG" >Minas Gerais</option> 
				<option value="PA" >Pará</option> 
				<option value="PB" >Paraíba</option> 
				<option value="PR" >Paraná</option> 
				<option value="PE" >Pernambuco</option> 
				<option value="PI" >Piauí</option> 
				<option value="RJ" >Rio de Janeiro</option> 
				<option value="RN" >Rio Grande do Norte</option> 
				<option value="RO" >Rondônia</option> 
				<option value="RS" >Rio Grande do Sul</option> 
				<option value="RR" >Roraima</option> 
				<option value="SC" >Santa Catarina</option> 
				<option value="SE" >Sergipe</option> 
				<option value="SP" >São Paulo</option> 
				<option value="TO" >Tocantins</option> 
      		</select>
      		
      		
    	</div>
  	</div>
  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="chave" name="chave" value="1948" required>
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="location.href='ose';">Retornar</button>
  			<button type="submit" id="btnConfirmar" class="btn btn-primary">Confirmar</button>
    	</div>
  	</div>
</form>

<!-- Scripts of page -->


<script>
$(document).ready(function(){
	
	var options = {
		onKeyPress: function (cpf, ev, el, op) {
			var masks = ['000.000.000-00#', '00.000.000/0000-00'],
		    mask = (cpf.length > 14) ? masks[1] : masks[0];
		    el.mask(mask, op);
		}
	}

	$('#documento').mask('00.000.000/0000-00', options);
	$('#cep').mask('00000-000', {clearIfNotMatch: true});
	
	
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
	            url: "http://localhost/aux_regulacao/ose/confirmaralterar",
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
