<?php
/* Smarty version 3.1.30, created on 2017-08-01 13:34:20
  from "D:\www\aux_regulacao\views\usuarios\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5980ad8c102320_02429670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b85cb709771104233f01f56e1e872efd9424e109' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\usuarios\\formulario.html',
      1 => 1497966245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5980ad8c102320_02429670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16915980ad8bcd1950_17680343';
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
    	<label for="texto_login" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">NIP</label>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 obrigatorio">
      		<?php if ($_smarty_tpl->tpl_vars['TelaOperacao']->value != "confirmarincluir") {?>
      		<label for="nm_login" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label"><?php echo $_smarty_tpl->tpl_vars['arrDados']->value['nm_login'];?>
</label>
      		<?php } else { ?>
      		<input type="text" id="texto_login" name="texto_login" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['texto_login'];?>
" ReadOnly placeholder="Selecione um usuário na tabela" class="form-control" required>
      		<?php }?>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="texto_om" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">OM</label>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 obrigatorio">
      		<input type="text" id="texto_om" name="texto_om" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['texto_om'];?>
" ReadOnly placeholder="Selecione a OM na tabela" class="form-control" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="ck_bloqueado" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Situação</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
    		<select id="ck_bloqueado" name="ck_bloqueado" class="c-select" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?> required>
    		<option value="">Selecione</option>
    		<option value="A" <?php if ("A" == $_smarty_tpl->tpl_vars['arrDados']->value['ck_bloqueado']) {?>selected<?php }?>>Ativo</option>
    		<option value="I" <?php if ("I" == $_smarty_tpl->tpl_vars['arrDados']->value['ck_bloqueado']) {?>selected<?php }?>>Inativo</option>
    		<option value="B" <?php if ("B" == $_smarty_tpl->tpl_vars['arrDados']->value['ck_bloqueado']) {?>selected<?php }?>>Bloqueado</option>
    		</select>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="perfil" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Perfil</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
    		<select id="perfil" name="perfil" class="c-select" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?> required>
    		<option value="">Selecione</option>
    		<option value="E" <?php if ("E" == $_smarty_tpl->tpl_vars['arrDados']->value['perfil']) {?>selected<?php }?>>Emissor</option>
    		<option value="A" <?php if ("A" == $_smarty_tpl->tpl_vars['arrDados']->value['perfil']) {?>selected<?php }?>>Administrador</option>
    		<option value="D" <?php if ("D" == $_smarty_tpl->tpl_vars['arrDados']->value['perfil']) {?>selected<?php }?>>DSM</option>
    		<option value="T" <?php if ("T" == $_smarty_tpl->tpl_vars['arrDados']->value['perfil']) {?>selected<?php }?>>Tudo</option>
    		</select>
    	</div>
  	</div>
  	

	<!-- Modal da tabela de OM -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Selecione um procedimento da tabela</h4>
	      </div>
	      <div class="modal-body">
	        
	
			<table id="tbGrid" class="table table-striped" style="width:100%">
			  	<thead>
			       	<tr>
			            <th >OM</th>
			            <th >Código</th>
			            <th >Nome</th>
			        	<th width="50" class="text-center">&nbsp;</th>
			    	</tr>
				</thead>
			</table>
	
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal da tabela de OM -->

	<!-- Modal da tabela de USUÁRIOS -->
	<div class="modal fade" id="myModalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLoginLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLoginLabel">Selecione um procedimento da tabela</h4>
	      </div>
	      <div class="modal-body">
	        
	
			<table id="tbGridLogin" class="table table-striped" style="width:100%">
			  	<thead>
			       	<tr>
			            <th >NIP</th>
			            <th >Nome</th>
			            <th >Tipo</th>
			        	<th width="50" class="text-center">&nbsp;</th>
			    	</tr>
				</thead>
			</table>
	
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal da tabela de USUÁRIOS -->

  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="id_om" name="id_om" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['id_om'];?>
" required>
    		<input type="hidden" id="nm_login" name="nm_login" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['nm_login'];?>
" required>
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
	$( "#texto_om" ).focus(function() {
		$('#myModal').modal('show');
	});
		
	$( "#texto_login" ).focus(function() {
		$('#myModalLogin').modal('show');
	});

    dataTableLanguageBR['sInfo'] = "_START_ até _END_ de _TOTAL_ registros";
    dataTableLanguageBR['sInfoEmpty'] = "0 até 0 de 0 registros",
    
	 $('#tbGrid').DataTable( {
	    	
	    	"aoColumns": [ null, null, null,  { "bSortable": false, "bSearchable": false } ] ,
			"iDisplayLength": mostrarRegistros,
			"aLengthMenu": dataTablePages,
		    "language": dataTableLanguageBR,
		    "lengthChange": false,
		    "pagingType": "simple",
	    	
	        "processing": true,
	        "serverSide": true,
	        "ajax": {
	            "url": "<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/gridom",
	            "type": "POST"
	        } 	        	
	    } );
    
	 $('#tbGridLogin').DataTable( {
	    	
	    	"aoColumns": [ null, null, { "bSortable": false, "bSearchable": false } , { "bSortable": false, "bSearchable": false } ] ,
			"iDisplayLength": mostrarRegistros,
			"aLengthMenu": dataTablePages,
		    "language": dataTableLanguageBR,
		    "lengthChange": false,
		    "pagingType": "simple",
	    	
	        "processing": true,
	        "serverSide": true,
	        "ajax": {
	            "url": "<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/gridusuario",
	            "type": "POST"
	        } 	        	
	    } );
	<?php }?>
    
});
<?php echo '</script'; ?>
> 


<?php }
}
