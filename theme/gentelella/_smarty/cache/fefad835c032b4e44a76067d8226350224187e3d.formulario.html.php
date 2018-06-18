<?php
/* Smarty version 3.1.30, created on 2017-02-08 14:15:55
  from "D:\www\catalogo\views\alocacao-profissionais-saude\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589b443b11ce35_88185008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '485a8feab3c7ea3fd9a2473a2d1d8d7c6bff0c91' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\alocacao-profissionais-saude\\formulario.html',
      1 => 1485880448,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_589b443b11ce35_88185008 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://localhost/catalogo/views/_jquery/jquery.mask.min.js"></script>
<script src="http://localhost/catalogo/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://localhost/catalogo/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link rel="stylesheet" href="http://localhost/catalogo/views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.css">
<script src="http://localhost/catalogo/views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.js"></script>

<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Alocação de Profissionais de Saúde <small><i class="fa fa-angle-double-right"></i> Incluir dados</small></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="texto_nome" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome do Profissional</label>
    	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 obrigatorio">
      		<input type="text" id="texto_nome" name="texto_nome" value="" ReadOnly placeholder="Selecione um profissional da tabela" class="form-control" required>
    	</div>
  	</div>
  	
  	<div class="form-group">
    	<label for="c_categ_ctro_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Categoria</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
    		<select id="c_categ_ctro_atvdd" name="c_categ_ctro_atvdd" class="c-select"  required>
    		<option value="">Selecione</option>
    		    			<option value="1" >Clínica</option>
    		    			<option value="2" >Enfermagem</option>
    		    			<option value="4" >Laboratório</option>
    		    			<option value="5" >Serviço</option>
    		    		</select>
    	</div>
  	</div>
  	
  	<div class="form-group">
    	<label for="c_oms_ctro_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Centro de Atividade</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
    		<select id="c_oms_ctro_atvdd" name="c_oms_ctro_atvdd" class="c-select"  required>
    		<option value="">Selecione</option>
    		    		</select>
    	</div>
  	</div>
	
	<div class="form-group">
    	<label for="c_tpo_mao_obra" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Tipo de Mão-de-Obra</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 obrigatorio">
    		<select id="c_tpo_mao_obra" name="c_tpo_mao_obra" class="c-select"  required>
    		<option value="MOD" >Mão-de-obra Direta</option>
    		<option value="MOI" >Mão-de-obra Indireta</option>
    		<option value="MOA" >Mão-de-obra Administrativa</option>
    		</select>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="d_inic_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Atividades Inicio</label>
    	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 obrigatorio">
      		<input type="text" id="d_inic_atvdd" name="d_inic_atvdd" value=""  placeholder="Data de Inicio" maxlength="10" class="form-control" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="d_fim_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Atividades Fim</label>
    	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
      		<input type="text" id="d_fim_atvdd" name="d_fim_atvdd" value=""  placeholder="Data de fim" maxlength="10" class="form-control">
    	</div>
  	</div>
  	
	<!-- Modal da tabela de procedimentos -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Selecione um profissional</h4>
	      </div>
	      <div class="modal-body modal-lg">
	        
	
			<table id="tbGrid" class="table table-striped" style="width:100%" >
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
	<!-- Modal da tabela de procedimentos -->
	

  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="c_pssoa" name="c_pssoa" value="">
    		<input type="hidden" id="c_aloc_profs_saude" name="c_aloc_profs_saude" value="">
    		
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="location.href='alocacao-profissionais-saude';">Retornar</button>
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
	            url: "http://localhost/catalogo/alocacao-profissionais-saude/confirmarincluir",
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
	
	
		

	    $( "#d_inic_atvdd" ).datepicker(datepickerBR);
	    $( "#d_fim_atvdd" ).datepicker(datepickerBR);
	
	    $( "#d_inic_atvdd" ).mask('00/00/0000', {clearIfNotMatch: true});
	    $( "#d_fim_atvdd" ).mask('00/00/0000', {clearIfNotMatch: true});
	    
	    $('#c_categ_ctro_atvdd').change(function(){
	        $('#c_oms_ctro_atvdd').load('http://localhost/catalogo/alocacao-profissionais-saude/atualizaComboCentros/'+$('#c_categ_ctro_atvdd').val() );
	    });
	
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
		            "url": "http://localhost/catalogo/alocacao-profissionais-saude/gridpessoas",
		            "type": "POST"
		        } 	        	
		    } );
		
});
</script> 

<?php }
}
