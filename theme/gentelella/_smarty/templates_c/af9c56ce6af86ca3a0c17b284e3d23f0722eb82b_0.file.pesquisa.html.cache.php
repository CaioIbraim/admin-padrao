<?php
/* Smarty version 3.1.30, created on 2017-06-22 09:32:38
  from "D:\www\aux_regulacao\views\guia\pesquisa.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594bb8e6b31812_81357047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af9c56ce6af86ca3a0c17b284e3d23f0722eb82b' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\guia\\pesquisa.html',
      1 => 1497980798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594bb8e6b31812_81357047 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13415594bb8e6788014_95365323';
?>
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
<div class="page-header sigsaude"><h2><?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;
if ($_smarty_tpl->tpl_vars['subTituloPagina']->value != '') {?> <small><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['subTituloPagina']->value;?>
</small><?php }?></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="" onsubmit="$('#btnConfirmar').click(); return false;">
	
	<div class="form-group">
    	<label for="numero_guia" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Número da Guia</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    		<input type="text" id="numero_guia" name="numero_guia" value="" placeholder="Informe o número da GAU" class="form-control" required>
    	</div>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
    		<button type="button" id="btnConfirmar" class="btn btn-primary"><span class="fa fa-print"></span> Imprimir</button>
    	</div>
  	</div>
  	
</form>
<form method="post" id="frmFormularioAux" action=""><input type="hidden" name="numero_guia" id="numero_guia2" value=""></form>

<!-- Scripts of page -->


<?php echo '<script'; ?>
>
$(document).ready(function(){
	
	$('#btnConfirmar').click(function(){

		if ($('#numero_guia').val() == "") {
			return false;
		}
		
		$.ajax({
            url: "<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/pesquisa",
            data: $("#frmFormulario").serialize(),
            type: 'POST',
            context: $('#msgAjax'),
            beforeSend: function(){
            	$("#msgAjax").html(imagemAjax);
            	$("#btnConfirmar").attr("disabled","disabled");
            	rolarScroll();
            },
            success: function(data){
                //this.append(data);
                $("#msgAjax").html(data);	            	
                $("#btnConfirmar").removeAttr("disabled");
                
            }
		});
		
	});
    
});
<?php echo '</script'; ?>
> 


<?php }
}
