<?php
/* Smarty version 3.1.30, created on 2017-02-08 14:36:02
  from "D:\www\catalogo\views\alocacao-equipes\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589b48f28a2ec3_26989437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ddeec1eae5909160817ea394f3cb6a4a805e966' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\alocacao-equipes\\formulario.html',
      1 => 1486571657,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_589b48f28a2ec3_26989437 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://localhost/catalogo/views/_jquery/jquery.mask.min.js"></script>
<script src="http://localhost/catalogo/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://localhost/catalogo/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link rel="stylesheet" href="http://localhost/catalogo/views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.css">
<script src="http://localhost/catalogo/views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.js"></script>

<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Alocação de Equipes <small><i class="fa fa-angle-double-right"></i> Excluir dados</small></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="texto_nome" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome da Equipe</label>
    	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 obrigatorio">
      		<input type="text" id="texto_nome" name="texto_nome" value="Terapia de grupo" ReadOnly placeholder="Selecione uma equipe da tabela" class="form-control" required>
    	</div>
  	</div>
  	
  	<div class="form-group">
    	<label for="c_categ_ctro_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Categoria</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
    		<select id="c_categ_ctro_atvdd" name="c_categ_ctro_atvdd" class="c-select" disabled required>
    		<option value="">Selecione</option>
    		    			<option value="1" >Clínica</option>
    		    			<option value="2" >Enfermagem</option>
    		    			<option value="4" >Laboratório</option>
    		    			<option value="5" selected>Serviço</option>
    		    		</select>
    	</div>
  	</div>
  	
  	<div class="form-group">
    	<label for="c_oms_ctro_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Centro de Atividade</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
    		<select id="c_oms_ctro_atvdd" name="c_oms_ctro_atvdd" class="c-select" disabled required>
    		<option value="">Selecione</option>
    		    			<option value="241" selected>Serviço Social</option>
    		    		</select>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="d_inic_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Atividades Inicio</label>
    	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 obrigatorio">
      		<input type="text" id="d_inic_atvdd" name="d_inic_atvdd" value="01/02/2017" readonly placeholder="Data de Inicio" maxlength="10" class="form-control" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="d_fim_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Atividades Fim</label>
    	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
      		<input type="text" id="d_fim_atvdd" name="d_fim_atvdd" value="11/02/2017" readonly placeholder="Data de fim" maxlength="10" class="form-control">
    	</div>
  	</div>
  	
	<!-- Modal da tabela de procedimentos -->
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
	<!-- Modal da tabela de procedimentos -->
	

  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="c_equip" name="c_equip" value="2">
    		<input type="hidden" id="c_aloc_equip" name="c_aloc_equip" value="13">
    		
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="location.href='alocacao-equipes';">Retornar</button>
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
	            url: "http://localhost/catalogo/alocacao-equipes/confirmarexcluir",
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
