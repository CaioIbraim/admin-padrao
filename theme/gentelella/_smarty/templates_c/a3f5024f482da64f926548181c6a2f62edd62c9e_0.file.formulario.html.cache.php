<?php
/* Smarty version 3.1.30, created on 2017-08-15 13:28:52
  from "D:\www\altacomplexidade\views\basico\tipo-arquivo\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59932144ab8575_43587232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3f5024f482da64f926548181c6a2f62edd62c9e' => 
    array (
      0 => 'D:\\www\\altacomplexidade\\views\\basico\\tipo-arquivo\\formulario.html',
      1 => 1502477316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59932144ab8575_43587232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2023559932144a7b676_17977819';
echo $_smarty_tpl->tpl_vars['htmlBREADCRUMB']->value;?>


<!-- script e css da tela -->
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

<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2><?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['subTituloPagina']->value != '') {?><small><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['subTituloPagina']->value;?>
</small><?php }?></h2>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<br>
			<form method="post" id="frmFormulario" class="form-horizontal form-label-left">
				<div class="form-group">
                	<label for="label" class="control-label col-md-3 col-sm-3 col-xs-12">Código <span class="required">*</span></label>
                   	<div class="col-md-6 col-sm-6 col-xs-12">
                    	<input type="text" class="form-control col-md-7 col-xs-12" required="required" id="label" name="label" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['label'];?>
" >
                   	</div>
             	</div>
                <div class="form-group">
                	<label for="descricao" class="control-label col-md-3 col-sm-3 col-xs-12">Descrição <span class="required">*</span></label>
					<div class="col-md-6 col-sm-6 col-xs-12">
                    	<input type="text" class="form-control col-md-7 col-xs-12" required="required" name="descricao" id="descricao" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['descricao'];?>
" >
                   	</div>
              	</div>
              	<div class="ln_solid"></div>
               	<div class="form-group">
                   	<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
			    		<input type="hidden" id="chave" name="chave" value="<?php echo $_smarty_tpl->tpl_vars['chave']->value;?>
" required>
                       	<button id="btnCancelar"  type="button" class="btn btn-primary">Retornar</button>
                       	<button id="btnConfirmar" type="submit" class="btn btn-success">Confirmar</button>
					</div>
               	</div>
			</form>

	</div>
</div>
<!-- Scripts of page -->


<?php echo '<script'; ?>
>
$(document).ready(function(){
	
	$("#btnCancelar").click(function(){
		carregarTelaAjax('<?php echo $_smarty_tpl->tpl_vars['urlPaginaSimples']->value;?>
','');		
	});
	
	// Validação do formulário
   	$("#frmFormulario").validate({
   		errorElement: 'div',
		errorClass: 'has-error help-block',
		focusInvalid: false,
		
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
	            	$('html, body').animate({scrollTop:0}, 'slow');
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
