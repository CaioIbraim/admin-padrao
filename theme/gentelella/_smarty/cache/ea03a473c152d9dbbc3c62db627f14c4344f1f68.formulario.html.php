<?php
/* Smarty version 3.1.30, created on 2017-02-06 13:21:58
  from "D:\www\catalogo\views\alocacao-equipamentos\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5898949617b293_65742493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '358069b73642a740b7191408056b5d3ecbe1097c' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\alocacao-equipamentos\\formulario.html',
      1 => 1486056962,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5898949617b293_65742493 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://localhost/catalogo/views/_jquery/jquery.mask.min.js"></script>
<script src="http://localhost/catalogo/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://localhost/catalogo/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link rel="stylesheet" href="http://localhost/catalogo/views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.css">
<script src="http://localhost/catalogo/views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.js"></script>

<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Alocação de Equipamentos de Saúde <small><i class="fa fa-angle-double-right"></i> Incluir dados</small></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="texto_equipamento" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Estruturas/Equipamentos de Saúde</label>
    	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 obrigatorio">
      		<input type="text" id="texto_equipamento" name="texto_equipamento" value="" ReadOnly placeholder="Selecione uma Estruturas/Equipamentos de Saúde" class="form-control" required>
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
    	<div class="col-sm-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-10">
      		<div class="checkbox">
        		<label><input type="checkbox" id="c_ind_atvdd" name="c_ind_atvdd" value="A" > Ativo</label><br>
        	</div>
    	</div>
  	</div>
  	  	
  	
  	
  	
	<!-- Modal da tabela de procedimentos -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Selecione uma Estruturas/Equipamentos de Saúde</h4>
	      </div>
	      <div class="modal-body modal-lg">
	        
	
			<table id="tbGrid" class="table table-striped" style="width:100%" >
			  	<thead>
			       	<tr>
			            <th width="">Estruturas/Equipamentos de Saúde</th>
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
    		<input type="hidden" id="c_eqpmt" name="c_eqpmt" value="">
    		<input type="hidden" id="ID" name="ID" value="" required>
    		
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="location.href='http://localhost/catalogo/alocacao-equipamentos';">Retornar</button>
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
	            url: "http://localhost/catalogo/alocacao-equipamentos/confirmarincluir",
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
	        $('#c_oms_ctro_atvdd').load('http://localhost/catalogo/alocacao-equipamentos/atualizaComboCentros/'+$('#c_categ_ctro_atvdd').val() );
	    });
	
		$( "#texto_equipamento" ).focus(function() {
			$('#myModal').modal('show');
		});

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
		            "url": "http://localhost/catalogo/alocacao-equipamentos/gridequipamentos",
		            "type": "POST"
		        } 	        	
		    } );
		
});
</script> 

<?php }
}
