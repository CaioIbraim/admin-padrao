<?php
/* Smarty version 3.1.30, created on 2017-02-07 13:42:59
  from "D:\www\catalogo\views\profissional-saude\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5899eb03a447b5_25187176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f474c879c501588e2f4db3caf99c80e04d9a634d' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\profissional-saude\\formulario.html',
      1 => 1485780066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5899eb03a447b5_25187176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '107855899eb034e5677_42532510';
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
    	<label for="texto_nome" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome do Profissional</label>
    	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 obrigatorio">
      		<input type="text" id="texto_nome" name="texto_nome" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['texto_nome'];?>
" ReadOnly placeholder="Selecione um profissional da tabela" class="form-control" required>
    	</div>
  	</div>
	
	<div class="form-group">
    	<label for="c_tpo_profs" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Tipo de Profissional</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
    		<select id="c_tpo_profs" name="c_tpo_profs" class="c-select" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?>>
    		<option value="1" <?php if ("1" == $_smarty_tpl->tpl_vars['arrDados']->value['c_tpo_profs']) {?>selected<?php }?>>Militar</option>
    		<option value="2" <?php if ("2" == $_smarty_tpl->tpl_vars['arrDados']->value['c_tpo_profs']) {?>selected<?php }?>>Contratado</option>
    		<option value="3" <?php if ("3" == $_smarty_tpl->tpl_vars['arrDados']->value['c_tpo_profs']) {?>selected<?php }?>>Temporário (RPA)</option>
    		<option value="4" <?php if ("4" == $_smarty_tpl->tpl_vars['arrDados']->value['c_tpo_profs']) {?>selected<?php }?>>Concursado</option>
    		<option value="5" <?php if ("5" == $_smarty_tpl->tpl_vars['arrDados']->value['c_tpo_profs']) {?>selected<?php }?>>Residente</option>
    		<option value="6" <?php if ("6" == $_smarty_tpl->tpl_vars['arrDados']->value['c_tpo_profs']) {?>selected<?php }?>>Outros</option>
    		</select>
    	</div>
  	</div>
	
	<div class="form-group">
    	<label for="c_cbos" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Especialidade (CBO-S)</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    		<select id="c_cbos" name="c_cbos" class="c-select" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?>>
    		<option value="">Selecione</option>
    		<?php
$__section_x_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrCBOS']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total != 0) {
for ($__section_x_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_0_iteration <= $__section_x_0_total; $__section_x_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
    			<option value="<?php echo $_smarty_tpl->tpl_vars['arrCBOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['arrCBOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['arrDados']->value['c_cbos']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['arrCBOS']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['label'];?>
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
  	</div>
			
	<div class="form-group">
    	<label for="n_coslh" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Registro Profissional</label>
  			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
      		<input type="text" id="n_coslh" name="n_coslh" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['n_coslh'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Inscrição no Conselho Profissional" maxlength="20" class="form-control">
    	</div>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    		<select id="c_coslh" name="c_coslh" class="c-select" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?>>
    		<option value="">Selecione</option>
    		<?php
$__section_x_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrConselho']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_1_total = $__section_x_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_1_total != 0) {
for ($__section_x_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_1_iteration <= $__section_x_1_total; $__section_x_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
    			<option value="<?php echo $_smarty_tpl->tpl_vars['arrConselho']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['arrConselho']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['arrDados']->value['c_coslh']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['arrConselho']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['label'];?>
</option>
    		<?php
}
}
if ($__section_x_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_1_saved;
}
?>
    		</select>
    	</div>
    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    		<select id="c_uf_coslh" name="c_uf_coslh" class="c-select" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?>>
    		<option value="">Selecione</option>
    		<?php
$__section_x_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrUF']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_2_total = $__section_x_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_2_total != 0) {
for ($__section_x_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_2_iteration <= $__section_x_2_total; $__section_x_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
    			<option value="<?php echo $_smarty_tpl->tpl_vars['arrUF']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['arrUF']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['arrDados']->value['c_uf_coslh']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['arrUF']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['label'];?>
</option>
    		<?php
}
}
if ($__section_x_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_2_saved;
}
?>
    		</select>
    	</div>
  	</div>
   
  	<?php if ($_smarty_tpl->tpl_vars['TelaOperacao']->value != "confirmarexcluir") {?>
	<div class="form-group">
    	<div class="col-sm-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-10">
      		<div class="checkbox">
        		<label><input type="checkbox" id="b_indcd_chfia" name="b_indcd_chfia" value="TRUE" <?php if ($_smarty_tpl->tpl_vars['arrDados']->value['b_indcd_chfia'] == "t") {?>checked<?php }?>> Função de Chefia</label><br>
        	</div>
    	</div>
  	</div>
  	<?php } else { ?>
  	<div class="form-group">
    	<div class="col-sm-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-10">
      		<div class="checkbox">
        		<label><strong><?php if ($_smarty_tpl->tpl_vars['arrDados']->value['c_ind_atvdd'] == "t") {?>Executa Função de Chefia<?php } else { ?>Não Executa Função de Chefia<?php }?></strong>.</label><br>
        	</div>
    	</div>
  	</div>
  	<?php }?>
    		

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
  	
	<!-- Modal da tabela de procedimentos -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Selecione um profissional</h4>
	      </div>
	      <div class="modal-body">
	        
	
			<table id="tbGrid" class="table table-striped" style="width:100%" >
			  	<thead>
			       	<tr>
			            <th width="">Nome</th>
			            <th width="">CPF</th>
			            <th width="">Nascimento</th>
			        	<th width="50" class="text-center">&nbsp;</th>
			    	</tr>
				</thead>
			</table>
	
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal da tabela de procedimentos -->
	

  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="c_pssoa" name="c_pssoa" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['c_pssoa'];?>
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
	
	
	<?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == '') {?>
		$( "#texto_nome" ).focus(function() {
			$('#myModal').modal('show');
		});

	    dataTableLanguageBR['sInfo'] = "_START_ até _END_ de _TOTAL_ registros";
	    dataTableLanguageBR['sInfoEmpty'] = "0 até 0 de 0 registros",
	    
		 $('#tbGrid').DataTable( {
		    	
		    	"aoColumns": [ null, null, { "bSortable": false, "bSearchable": false }, { "bSortable": false, "bSearchable": false } ] ,
				"iDisplayLength": mostrarRegistros,
				"aLengthMenu": dataTablePages,
			    "language": dataTableLanguageBR,
			    "lengthChange": false,
			    "pagingType": "simple",
		    	
		        "processing": true,
		        "serverSide": true,
		        "ajax": {
		            "url": "<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/gridpessoas",
		            "type": "POST"
		        } 	        	
		    } );
	<?php }?>
	
});
<?php echo '</script'; ?>
> 

<?php }
}
