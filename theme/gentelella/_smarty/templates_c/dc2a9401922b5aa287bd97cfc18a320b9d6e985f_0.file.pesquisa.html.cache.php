<?php
/* Smarty version 3.1.30, created on 2017-08-02 10:49:39
  from "D:\www\aux_regulacao\views\contrato\pesquisa.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5981d87355cc18_38913011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc2a9401922b5aa287bd97cfc18a320b9d6e985f' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\contrato\\pesquisa.html',
      1 => 1497975800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5981d87355cc18_38913011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '110745981d87306b0e7_31328170';
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

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="id_om" class="col-xs-12 col-sm-1 col-md-1 col-lg-1 control-label">OM</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 obrigatorio">
    		<select id="id_om" name="id_om" class="c-select" >
    		<option value="">Todas</option>
    		<?php
$__section_x_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['combo1']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total != 0) {
for ($__section_x_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_0_iteration <= $__section_x_0_total; $__section_x_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
    		<option value="<?php echo $_smarty_tpl->tpl_vars['combo1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['combo1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['label'];?>
</option>
    		<?php
}
}
if ($__section_x_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_0_saved;
}
?>
    		</select>
    	</div>
  		<label for="id_ose" class="col-xs-12 col-sm-1 col-md-1 col-lg-1 control-label">OSE</label>
    	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 obrigatorio">
    		<select id="id_ose" name="id_ose" class="c-select">
	    		<option value="">Todas</option>
    		</select>
    	</div>
  	</div>
  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
  			<button type="button" id="btnConfirmar" class="btn btn-primary"><span class="fa fa-search"></span> Listar Contratos</button>
  			<button type="button" id="btnNovoContrato" class="btn btn-primary" ><span class="fa fa-plus"></span> Novo Contrato</button>
    	</div>
  	</div>
</form>
<br><br>
<div id="divPesquisa"></div>

<!-- Scripts of page -->


<?php echo '<script'; ?>
>
$(document).ready(function(){
	
	$('#id_om').change(function(){
        $('#id_ose').load('<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/carregacombo/'+$('#id_om').val() );
        //$('#divPesquisa').html('');
        if ($("#id_ose").val() != "") {
        	//$("#id_ose option:first").attr('selected','selected');
        	
        	  $("#id_ose option").each(function(i){
        	      $(this).removeAttr("selected");
        	      if (i == 0) this.selected = true; // onde o "i" é o index desse select, começando em zero
        	    });
        	
        	
        }
    	pesquisarAjax();
    });
	
	$('#id_ose').change(function(){
        //$('#divPesquisa').html('');
        pesquisarAjax();
    });
	
	$('#btnConfirmar').click(function(){
		pesquisarAjax();
	});
	
	$('#btnNovoContrato').click(function(){

		id_om = $("#id_om").val();
		//id_ose = $("#id_ose").val();
		
		if (id_om == "") {
			alert('Informe pelo menos a OM para cadastrar do novo contrato.');
			$("#id_om").focus();
			return false;
		}
	
		carregarTelaAjax('<?php echo $_smarty_tpl->tpl_vars['urlPaginaSimples']->value;?>
/incluir',$("#frmFormulario").serialize());
	});
	
	
	
	pesquisarAjax = function(){
		$.ajax({
            url: "<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/retornopesquisa",
            data: $("#frmFormulario").serialize(),
            type: 'POST',
            context: $('#divPesquisa'),
            beforeSend: function(){
            	$("#divPesquisa").html(imagemAjax);
            	$("#btnConfirmar").attr("disabled","disabled");
            	rolarScroll();
            },
            success: function(data){
                //this.append(data);
                $("#divPesquisa").html(data);	            	
                $("#btnConfirmar").removeAttr("disabled");
                
            }
		});
	}
    
});
<?php echo '</script'; ?>
> 


<?php }
}
