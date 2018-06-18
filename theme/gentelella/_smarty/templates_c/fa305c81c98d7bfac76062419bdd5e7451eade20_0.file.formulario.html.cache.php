<?php
/* Smarty version 3.1.30, created on 2017-02-16 14:23:11
  from "D:\www\catalogo\views\alocacao-profissionais-equipes\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a5d1ef9e0135_60504208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa305c81c98d7bfac76062419bdd5e7451eade20' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\alocacao-profissionais-equipes\\formulario.html',
      1 => 1487260892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a5d1ef9e0135_60504208 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2299558a5d1ef56b624_98270933';
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
    	<label for="texto_equipe" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome da Equipe</label>
    	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 obrigatorio">
      		<input type="text" id="texto_equipe" name="texto_equipe" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['texto_equipe'];?>
" ReadOnly placeholder="Selecione uma equipe da tabela" class="form-control" required>
    	</div>
  	</div>
	
	<div class="form-group">
    	<label for="texto_nome" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome do profissional</label>
    	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 obrigatorio">
      		<input type="text" id="texto_nome" name="texto_nome" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['texto_nome'];?>
" ReadOnly placeholder="Selecione um profissional da tabela" class="form-control" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="d_inic_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Atividades Inicio</label>
    	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 obrigatorio">
      		<input type="text" id="d_inic_atvdd" name="d_inic_atvdd" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['d_inic_atvdd'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Data de Inicio" maxlength="10" class="form-control" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="d_fim_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Atividades Fim</label>
    	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
      		<input type="text" id="d_fim_atvdd" name="d_fim_atvdd" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['d_fim_atvdd'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Data de fim" maxlength="10" class="form-control">
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
  	
	<!-- Modal da tabela de equipes -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Selecione uma Equipe</h4>
	      </div>
	      <div class="modal-body">
	        
	
			<table id="tbGrid" class="table table-striped" style="width:100%" >
			  	<thead>
			       	<tr>
			            <th width="">Nome</th>
			            <th width="50">Ativo</th>
			        	<th width="50" class="text-center">&nbsp;</th>
			    	</tr>
				</thead>
			</table>
	
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal da tabela de equipes -->
	
	<!-- Modal da tabela de profissionais -->
	<div class="modal fade" id="myModalProfissionais" tabindex="-1" role="dialog" aria-labelledby="myModalProfissionaisLabel">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalProfissionaisLabel">Selecione um profissional</h4>
	      </div>
	      <div class="modal-body modal-lg">
	        
	
			<table id="tbGridProfissionais" class="table table-striped" style="width:100%" >
			  	<thead>
			       	<tr>
			            <th width="">Nome</th>
			            <th width="">Nº Registro</th>
			            <th width="">Especialidade</th>
			        	<th width="50" class="text-center">&nbsp;</th>
			    	</tr>
				</thead>
			</table>
	
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal da tabela de profissionais -->
	

  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="c_aloc_equip" name="c_aloc_equip" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['c_aloc_equip'];?>
">
    		<input type="hidden" id="c_pssoa" name="c_pssoa" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['c_pssoa'];?>
">
    		<input type="hidden" id="c_equip_profs" name="c_equip_profs" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['c_equip_profs'];?>
">
    		
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
	

	    $( "#d_inic_atvdd" ).datepicker(datepickerBR);
	    $( "#d_fim_atvdd" ).datepicker(datepickerBR);
	
	    $( "#d_inic_atvdd" ).mask('00/00/0000', {clearIfNotMatch: true});
	    $( "#d_fim_atvdd" ).mask('00/00/0000', {clearIfNotMatch: true});
	    
	    $('#c_categ_ctro_atvdd').change(function(){
	        $('#c_oms_ctro_atvdd').load('<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/atualizaComboCentros/'+$('#c_categ_ctro_atvdd').val() );
	    });
	
		$( "#texto_equipe" ).focus(function() {
			$('#myModal').modal('show');
		});
		
		$( "#texto_nome" ).focus(function() {
			$('#myModalProfissionais').modal('show');
		});

	    dataTableLanguageBR['sInfo'] = "_START_ até _END_ de _TOTAL_ registros";
	    dataTableLanguageBR['sInfoEmpty'] = "0 até 0 de 0 registros",
	    
		 $('#tbGrid').DataTable( {
		    	
		    	"aoColumns": [ null, { "bSortable": false, "bSearchable": false }, { "bSortable": false, "bSearchable": false } ] ,
				"iDisplayLength": mostrarRegistros,
				"aLengthMenu": dataTablePages,
			    "language": dataTableLanguageBR,
			    "lengthChange": false,
			    "pagingType": "simple",
		    	
		        "processing": true,
		        "serverSide": true,
		        "ajax": {
		            "url": "<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/gridequipes",
		            "type": "POST"
		        } 	        	
		    } );
	    
		 $('#tbGridProfissionais').DataTable( {
		    	
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
