<?php
/* Smarty version 3.1.30, created on 2017-02-08 13:11:23
  from "D:\www\catalogo\views\equipes\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589b351beca160_27561092',
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
  'includes' => 
  array (
  ),
),false)) {
function content_589b351beca160_27561092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '29050589b351ba70bd6_93492527';
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
<!-- script e css da tela -->

<div id="msgAjax"><?php echo $_smarty_tpl->tpl_vars['msgErro']->value;?>
</div>
<div class="page-header sigsaude"><h2><?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;
if ($_smarty_tpl->tpl_vars['subTituloPagina']->value != '') {?> <small><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['subTituloPagina']->value;?>
</small><?php }?></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="i_equip" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
      		<input type="text" id="i_equip" name="i_equip" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['i_equip'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Nome da equipe" maxlength="50" class="form-control" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="r_equip" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Descrição</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
      		<input type="text" id="r_equip" name="r_equip" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['r_equip'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Descrição da equipe" maxlength="200" class="form-control">
    	</div>
  	</div>

  	<?php if ($_smarty_tpl->tpl_vars['TelaOperacao']->value != "confirmarexcluir") {?>
	<div class="form-group">
    	<div class="col-sm-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-10">
      		<div class="checkbox">
        		<label><input type="checkbox" id="c_ind_atvdd" name="c_ind_atvdd" value="A" <?php if ($_smarty_tpl->tpl_vars['arrDados']->value['c_ind_atvdd'] == "A") {?>checked<?php }?>> Ativo</label><br>
        	</div>
    	</div>
  	</div>
  	<?php } else { ?>
  	<div class="form-group">
    	<div class="col-sm-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-10">
      		<div class="checkbox">
        		<label><strong><?php if ($_smarty_tpl->tpl_vars['arrDados']->value['c_ind_atvdd'] == "A") {?>Ativo<?php } else { ?>Inativo<?php }?></strong>.</label><br>
        	</div>
    	</div>
  	</div>
  	<?php }?>
  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="c_equip" name="c_equip" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['c_equip'];?>
">
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="carregarTelaAjax('<?php echo $_smarty_tpl->tpl_vars['urlPaginaSimples']->value;?>
','');">Retornar</button>
  			<button type="submit" id="btnConfirmar" class="btn btn-primary">Confirmar</button>
    	</div>
  	</div>
</form>

<!-- Scripts of page -->


<?php echo '<script'; ?>
>
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
