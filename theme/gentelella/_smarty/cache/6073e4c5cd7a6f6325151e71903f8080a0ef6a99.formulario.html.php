<?php
/* Smarty version 3.1.30, created on 2017-02-16 14:23:11
  from "D:\www\catalogo\views\alocacao-profissionais-equipes\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a5d1efa36042_97202319',
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
  'cache_lifetime' => 3600,
),true)) {
function content_58a5d1efa36042_97202319 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://localhost/catalogo/views/_jquery/jquery.mask.min.js"></script>
<script src="http://localhost/catalogo/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://localhost/catalogo/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link rel="stylesheet" href="http://localhost/catalogo/views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.css">
<script src="http://localhost/catalogo/views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.js"></script>

<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Alocação de Profissionais a Equipes <small><i class="fa fa-angle-double-right"></i> Excluir dados</small></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="texto_equipe" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome da Equipe</label>
    	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 obrigatorio">
      		<input type="text" id="texto_equipe" name="texto_equipe" value="Terapia de grupo" ReadOnly placeholder="Selecione uma equipe da tabela" class="form-control" required>
    	</div>
  	</div>
	
	<div class="form-group">
    	<label for="texto_nome" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome do profissional</label>
    	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 obrigatorio">
      		<input type="text" id="texto_nome" name="texto_nome" value="AANA PRISCILA COSTA DA SILVA NOVAES" ReadOnly placeholder="Selecione um profissional da tabela" class="form-control" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="d_inic_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Atividades Inicio</label>
    	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 obrigatorio">
      		<input type="text" id="d_inic_atvdd" name="d_inic_atvdd" value="16/02/2017" readonly placeholder="Data de Inicio" maxlength="10" class="form-control" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="d_fim_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Atividades Fim</label>
    	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
      		<input type="text" id="d_fim_atvdd" name="d_fim_atvdd" value="17/02/2017" readonly placeholder="Data de fim" maxlength="10" class="form-control">
    	</div>
  	</div>

  	  	<div class="form-group">
    	<div class="col-sm-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-10">
      		<div class="checkbox">
        		<label><strong>Ativo</strong>.</label><br>
        	</div>
    	</div>
  	</div>
  	  	
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
    		<input type="hidden" id="c_aloc_equip" name="c_aloc_equip" value="2">
    		<input type="hidden" id="c_pssoa" name="c_pssoa" value="223247">
    		<input type="hidden" id="c_equip_profs" name="c_equip_profs" value="136">
    		
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="location.href='alocacao-profissionais-equipes';">Retornar</button>
  			<button type="submit" id="btnConfirmar" class="btn btn-primary">Confirmar</button>
    	</div>
  	</div>
</form>

<!-- Scripts of page -->


<script>
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
	            url: "http://localhost/catalogo/alocacao-profissionais-equipes/confirmarexcluir",
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
