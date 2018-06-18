<?php
/* Smarty version 3.1.30, created on 2017-02-08 13:10:52
  from "D:\www\catalogo\views\procedimentos-saude\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589b34fc437c96_70684188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1e30f03daf8e04e1d848b1cc99d5099ccc084e5' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\procedimentos-saude\\formulario.html',
      1 => 1484845161,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_589b34fc437c96_70684188 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.mask.min.js"></script>
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link rel="stylesheet" href="http://10.4.224.74/catalogo/views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.css">
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.js"></script>


<link href="http://10.4.224.74/catalogo/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.dataTables/datatables.min.js"></script>

<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Procedimentos de Saúde da OM <small><i class="fa fa-angle-double-right"></i> Incluir dados</small></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="texto_procedimento" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Procedimento</label>
    	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 obrigatorio">
      		<input type="text" id="texto_procedimento" name="texto_procedimento" value="" ReadOnly placeholder="Selecione um procedimento da tabela" class="form-control" required>
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
    	<label for="d_inic_vgcia" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Vigência Inicio</label>
    	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 obrigatorio">
      		<input type="text" id="d_inic_vgcia" name="d_inic_vgcia" value=""  placeholder="01/01/2017" maxlength="10" class="form-control" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="d_fim_vgcia" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Vigência Fim</label>
    	<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
      		<input type="text" id="d_fim_vgcia" name="d_fim_vgcia" value=""  placeholder="01/01/2017" maxlength="10" class="form-control">
    	</div>
  	</div>
  	

	<!-- Modal da tabela de procedimentos -->
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
			            <th width="250">Procedimentos</th>
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
    		<input type="hidden" id="c_tusm" name="c_tusm" value="" required>
    		<input type="hidden" id="chave" name="chave" value="" required>
    		
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="location.href='procedimentos-saude';">Retornar</button>
  			<button type="submit" id="btnConfirmar" class="btn btn-primary">Confirmar</button>
    	</div>
  	</div>
</form>

<!-- Scripts of page -->


<script>
$(document).ready(function(){
	
	$.datepicker.initialized = false;
	
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
	            url: "http://10.4.224.74/catalogo/procedimentos-saude/confirmarincluir",
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
	                $.datepicker.initialized = true;
	                
	            }
			});
		},
		invalidHandler: function (form) {
					
		}	    		
    });

	
		$( "#texto_procedimento" ).focus(function() {
		$('#myModal').modal('show');
	});

   	$('#c_categ_ctro_atvdd').change(function(){
        $('#c_oms_ctro_atvdd').load('http://10.4.224.74/catalogo/procedimentos-saude/atualizaComboCentros/'+$('#c_categ_ctro_atvdd').val() );
    });

    $( "#d_inic_vgcia" ).datepicker(datepickerBR);
    $( "#d_fim_vgcia" ).datepicker(datepickerBR);

    dataTableLanguageBR['sInfo'] = "_START_ até _END_ de _TOTAL_ registros";
    dataTableLanguageBR['sInfoEmpty'] = "0 até 0 de 0 registros",
    
	 $('#tbGrid').DataTable( {
	    	
	    	"aoColumns": [ null,  { "bSortable": false, "bSearchable": false } ] ,
			"iDisplayLength": mostrarRegistros,
			"aLengthMenu": dataTablePages,
		    "language": dataTableLanguageBR,
		    "lengthChange": false,
		    "pagingType": "simple",
	    	
	        "processing": true,
	        "serverSide": true,
	        "ajax": {
	            "url": "http://10.4.224.74/catalogo/procedimentos-saude/gridtusm",
	            "type": "POST"
	        } 	        	
	    } );
	    
});
</script> 


<?php }
}
