<?php
/* Smarty version 3.1.30, created on 2017-07-14 15:34:39
  from "D:\www\aux_regulacao\views\contrato\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59690ebfa47fa8_40990055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4793b7c0a3ca69ea4a1a96d53a81dd099018dbd2' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\contrato\\formulario.html',
      1 => 1497975744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59690ebfa47fa8_40990055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1202159690ebf6487b5_44353774';
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

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.js"><?php echo '</script'; ?>
>
<!-- script e css da tela -->

<div id="msgAjax"><?php echo $_smarty_tpl->tpl_vars['msgErro']->value;?>
</div>
<div class="page-header sigsaude"><h2><?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;
if ($_smarty_tpl->tpl_vars['subTituloPagina']->value != '') {?> <small><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['subTituloPagina']->value;?>
</small><?php }?></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="texto_om" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">OM</label>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == '') {?>obrigatorio<?php }?>">
      		<input type="text" id="texto_om" name="texto_om" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['texto_om'];?>
" disabled class="form-control">
    	</div>
  	</div>
	<div class="form-group">
    	<label for="texto_ose" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">OSE</label>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6  <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == '') {?>obrigatorio<?php }?>">
      		<input type="text" id="texto_ose" name="texto_ose" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['texto_ose'];?>
" <?php if ($_smarty_tpl->tpl_vars['arrDados']->value['texto_ose'] != '') {?>disabled<?php } else { ?>readonly placeholder="Selecione uma OSE"<?php }?>  class="form-control">
    	</div>
  	</div>
	<div class="form-group">
    	<label for="dt_inicio" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Vigência - Inicio</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == '') {?>obrigatorio<?php }?>">
      		<input type="text" id="dt_inicio" name="dt_inicio" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['dt_inicio'];?>
" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?> class="form-control" maxlength="10" required>
    	</div>
  	</div>
	<div class="form-group">
    	<label for="dt_fim" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Vigência - Fim</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == '') {?>obrigatorio<?php }?>">
      		<input type="text" id="dt_fim" name="dt_fim" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['dt_fim'];?>
" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?> class="form-control" maxlength="10" required>
    	</div>
  	</div>
	<div class="form-group">
    	<label for="nu_contrato" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Número do Contrato</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == '') {?>obrigatorio<?php }?>">
      		<input type="text" id="nu_contrato" name="nu_contrato" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['nu_contrato'];?>
" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?> class="form-control" maxlength="15" required>
    	</div>
  	</div>
  	
  	<?php if ($_smarty_tpl->tpl_vars['TelaOperacao']->value != "confirmarincluir") {?>
	<div class="form-group">
    	<label for="ck_status" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Status</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 obrigatorio">
    		<select id="ck_status" name="ck_status" class="c-select" required>
    		<option value="H" <?php if ("H" == $_smarty_tpl->tpl_vars['arrDados']->value['ck_status']) {?>selected<?php }?>>Habilitado</option>
    		<option value="D" <?php if ("D" == $_smarty_tpl->tpl_vars['arrDados']->value['ck_status']) {?>selected<?php }?>>Desabilitado</option>
    		</select>
    	</div>
  	</div>
  	<?php }?>
  	  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="chave" name="chave" value="<?php echo $_smarty_tpl->tpl_vars['chave']->value;?>
">
    		<input type="hidden" id="id_om" name="id_om" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['id_om'];?>
">
    		<input type="hidden" id="id_ose" name="id_ose" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['id_ose'];?>
">
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlPaginaSimples']->value;?>
';">Retornar</button>
  			<button type="submit" id="btnConfirmar" class="btn btn-primary">Confirmar</button>
    	</div>
  	</div>
</form>

<!-- Modal da tabela de OSES -->
	<div class="modal fade" id="myModalOse" tabindex="-1" role="dialog" aria-labelledby="myModalOseLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalOseLabel">Selecione uma OSE da tabela</h4>
	      </div>
	      <div class="modal-body">
	        
	
			<table id="tbGridOse" class="table table-striped" style="width:100%">
			  	<thead>
			       	<tr>
			            <th >Nome</th>
			            <th >Documento</th>
			        	<th width="50" class="text-center">&nbsp;</th>
			    	</tr>
				</thead>
			</table>
	
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal da tabela de OSES -->

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

   	<?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == '') {?>
   	$( "#dt_inicio" ).datepicker(datepickerBR);
   	$( "#dt_fim" ).datepicker(datepickerBR);
 	$( '#nu_contrato' ).mask('0000000000000000', {clearIfNotMatch: false});
 	$( '#dt_inicio' ).mask('00/00/0000', {clearIfNotMatch: true});
 	$( '#dt_fim' ).mask('00/00/0000', {clearIfNotMatch: true});
   	<?php }?>
   	
   	
   	<?php if ($_smarty_tpl->tpl_vars['arrDados']->value['id_ose'] == '') {?>
 	$( "#texto_ose" ).focus(function() {
 		$('#myModalOse').modal('show');
 	});
 			
 	dataTableLanguageBR['sInfo'] = "_START_ até _END_ de _TOTAL_ registros";
 	dataTableLanguageBR['sInfoEmpty'] = "0 até 0 de 0 registros",
 	    
 	$('#tbGridOse').DataTable( {
 		    	
 		"aoColumns": [ null, { "bSortable": false, "bSearchable": false },  { "bSortable": false, "bSearchable": false } ] ,
 		"iDisplayLength": mostrarRegistros,
 		"aLengthMenu": dataTablePages,
 		"language": dataTableLanguageBR,
 		"lengthChange": false,
 		"pagingType": "simple",
 		    	
 		"processing": true,
 		"serverSide": true,
 		"ajax": {
 			"url": "<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/gridose",
 		    "type": "POST"
 		}
 	
 	} );
 	<?php }?>
   	
});
<?php echo '</script'; ?>
> 


<?php }
}
