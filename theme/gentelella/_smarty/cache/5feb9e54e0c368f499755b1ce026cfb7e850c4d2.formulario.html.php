<?php
/* Smarty version 3.1.30, created on 2017-07-14 15:34:39
  from "D:\www\aux_regulacao\views\contrato\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59690ebfa9a035_73545590',
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
  'cache_lifetime' => 3600,
),true)) {
function content_59690ebfa9a035_73545590 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.mask.min.js"></script>
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link href="http://localhost/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.js"></script>

<link rel="stylesheet" href="http://localhost/aux_regulacao/views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.css">
<script src="http://localhost/aux_regulacao/views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Contratos <small><i class="fa fa-angle-double-right"></i> Incluir novo contrato</small></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="texto_om" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">OM</label>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 obrigatorio">
      		<input type="text" id="texto_om" name="texto_om" value="AGBJLAPA" disabled class="form-control">
    	</div>
  	</div>
	<div class="form-group">
    	<label for="texto_ose" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">OSE</label>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6  obrigatorio">
      		<input type="text" id="texto_ose" name="texto_ose" value="" readonly placeholder="Selecione uma OSE"  class="form-control">
    	</div>
  	</div>
	<div class="form-group">
    	<label for="dt_inicio" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Vigência - Inicio</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 obrigatorio">
      		<input type="text" id="dt_inicio" name="dt_inicio" value=""  class="form-control" maxlength="10" required>
    	</div>
  	</div>
	<div class="form-group">
    	<label for="dt_fim" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Vigência - Fim</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 obrigatorio">
      		<input type="text" id="dt_fim" name="dt_fim" value=""  class="form-control" maxlength="10" required>
    	</div>
  	</div>
	<div class="form-group">
    	<label for="nu_contrato" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Número do Contrato</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 obrigatorio">
      		<input type="text" id="nu_contrato" name="nu_contrato" value=""  class="form-control" maxlength="15" required>
    	</div>
  	</div>
  	
  	  	  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="chave" name="chave" value="">
    		<input type="hidden" id="id_om" name="id_om" value="278">
    		<input type="hidden" id="id_ose" name="id_ose" value="">
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="location.href='contrato';">Retornar</button>
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
	            url: "http://localhost/aux_regulacao/contrato/confirmarincluir",
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

   	   	$( "#dt_inicio" ).datepicker(datepickerBR);
   	$( "#dt_fim" ).datepicker(datepickerBR);
 	$( '#nu_contrato' ).mask('0000000000000000', {clearIfNotMatch: false});
 	$( '#dt_inicio' ).mask('00/00/0000', {clearIfNotMatch: true});
 	$( '#dt_fim' ).mask('00/00/0000', {clearIfNotMatch: true});
   	   	
   	
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
 			"url": "http://localhost/aux_regulacao/contrato/gridose",
 		    "type": "POST"
 		}
 	
 	} );
 	   	
});
</script> 


<?php }
}
