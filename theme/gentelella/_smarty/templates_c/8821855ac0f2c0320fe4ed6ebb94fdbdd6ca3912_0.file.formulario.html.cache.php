<?php
/* Smarty version 3.1.30, created on 2017-06-21 14:55:27
  from "D:\www\aux_regulacao\views\ose\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594ab30f0f4a28_39786220',
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
  'includes' => 
  array (
  ),
),false)) {
function content_594ab30f0f4a28_39786220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '25835594ab30eca4d15_69603490';
?>
<!-- script e css da tela -->
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

<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.dataTables/datatables.min.js"><?php echo '</script'; ?>
>

<!-- script e css da tela -->

<div id="msgAjax"><?php echo $_smarty_tpl->tpl_vars['msgErro']->value;?>
</div>
<div class="page-header sigsaude"><h2><?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;
if ($_smarty_tpl->tpl_vars['subTituloPagina']->value != '') {?> <small><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['subTituloPagina']->value;?>
</small><?php }?></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="nm_ose" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome</label>
    	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 obrigatorio">
      		<input type="text" id="nm_ose" name="nm_ose" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['nm_ose'];?>
" placeholder="Nome da OSE" class="form-control" maxlength="100" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="documento" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Documento</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 obrigatorio">
      		<input type="text" id="documento" name="documento" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['documento'];?>
" placeholder="CPF/CNPJ" class="form-control" maxlength="20" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="cep" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">CEP</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 obrigatorio">
      		<input type="text" id="cep" name="cep" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['cep'];?>
" placeholder="CEP" class="form-control" maxlength="9" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="nm_logr" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Logradouro</label>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 obrigatorio">
      		<input type="text" id="nm_logr" name="nm_logr" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['nm_logr'];?>
" placeholder="Logradouro" class="form-control" maxlength="50" required>
    	</div>
    	<label for="nu_logr" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Número</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 obrigatorio">
      		<input type="text" id="nu_logr" name="nu_logr" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['nu_logr'];?>
" placeholder="Número" class="form-control" maxlength="15" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="ds_compl" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Complemento</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
      		<input type="text" id="ds_compl" name="ds_compl" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['ds_compl'];?>
" placeholder="Complemento" class="form-control" maxlength="60">
    	</div>
    	<label for="nm_bairro" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Bairro</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 obrigatorio">
      		<input type="text" id="nm_bairro" name="nm_bairro" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['nm_bairro'];?>
" placeholder="Bairro" class="form-control" maxlength="50" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="nm_municipio" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Município</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 obrigatorio">
      		<input type="text" id="nm_municipio" name="nm_municipio" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['nm_municipio'];?>
" placeholder="Município" class="form-control" maxlength="60" required>
    	</div>
    	<label for="uf" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Estado</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 obrigatorio">
      		
      		<select id="uf" name="uf" class="c-select" required>
      		
      			<option value="">Selecione</option> 
      			<option value="AC" <?php if ("AC" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Acre</option> 
				<option value="AL" <?php if ("AL" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Alagoas</option> 
				<option value="AM" <?php if ("AM" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Amazonas</option> 
				<option value="AP" <?php if ("AP" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Amapá</option> 
				<option value="BA" <?php if ("BA" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Bahia</option> 
				<option value="CE" <?php if ("CE" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Ceará</option> 
				<option value="DF" <?php if ("DF" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Distrito Federal</option> 
				<option value="ES" <?php if ("ES" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Espírito Santo</option> 
				<option value="GO" <?php if ("GO" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Goiás</option> 
				<option value="MA" <?php if ("MA" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Maranhão</option> 
				<option value="MT" <?php if ("MT" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Mato Grosso</option> 
				<option value="MS" <?php if ("MS" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Mato Grosso do Sul</option> 
				<option value="MG" <?php if ("MG" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Minas Gerais</option> 
				<option value="PA" <?php if ("PA" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Pará</option> 
				<option value="PB" <?php if ("PB" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Paraíba</option> 
				<option value="PR" <?php if ("PR" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Paraná</option> 
				<option value="PE" <?php if ("PE" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Pernambuco</option> 
				<option value="PI" <?php if ("PI" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Piauí</option> 
				<option value="RJ" <?php if ("RJ" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Rio de Janeiro</option> 
				<option value="RN" <?php if ("RN" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Rio Grande do Norte</option> 
				<option value="RO" <?php if ("RO" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Rondônia</option> 
				<option value="RS" <?php if ("RS" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Rio Grande do Sul</option> 
				<option value="RR" <?php if ("RR" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Roraima</option> 
				<option value="SC" <?php if ("SC" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Santa Catarina</option> 
				<option value="SE" <?php if ("SE" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Sergipe</option> 
				<option value="SP" <?php if ("SP" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>São Paulo</option> 
				<option value="TO" <?php if ("TO" == $_smarty_tpl->tpl_vars['arrDados']->value['uf']) {?>selected<?php }?>>Tocantins</option> 
      		</select>
      		
      		
    	</div>
  	</div>
  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="chave" name="chave" value="<?php echo $_smarty_tpl->tpl_vars['chave']->value;?>
" required>
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlPaginaSimples']->value;?>
';">Retornar</button>
  			<button type="submit" id="btnConfirmar" class="btn btn-primary">Confirmar</button>
    	</div>
  	</div>
</form>

<!-- Scripts of page -->


<?php echo '<script'; ?>
>
$(document).ready(function(){
	
	var options = {
		onKeyPress: function (cpf, ev, el, op) {
			var masks = ['000.000.000-00#', '00.000.000/0000-00'],
		    mask = (cpf.length > 14) ? masks[1] : masks[0];
		    el.mask(mask, op);
		}
	}

	$('#documento').mask('<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['mascara'];?>
', options);
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
	            url: "<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['TelaOperacao']->value;?>
",
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
<?php echo '</script'; ?>
> 


<?php }
}
