<?php
/* Smarty version 3.1.30, created on 2017-08-01 13:34:20
  from "D:\www\aux_regulacao\views\usuarios\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5980ad8c158237_04481196',
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
  'cache_lifetime' => 3600,
),true)) {
function content_5980ad8c158237_04481196 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link href="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.js"></script>

<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Usuários do Regulação <small><i class="fa fa-angle-double-right"></i> Incluir dados</small></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
  	<div class="form-group">
    	<label for="texto_login" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">NIP</label>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 obrigatorio">
      		      		<input type="text" id="texto_login" name="texto_login" value="" ReadOnly placeholder="Selecione um usuário na tabela" class="form-control" required>
      		    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="texto_om" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">OM</label>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 obrigatorio">
      		<input type="text" id="texto_om" name="texto_om" value="" ReadOnly placeholder="Selecione a OM na tabela" class="form-control" required>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="ck_bloqueado" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Situação</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
    		<select id="ck_bloqueado" name="ck_bloqueado" class="c-select"  required>
    		<option value="">Selecione</option>
    		<option value="A" >Ativo</option>
    		<option value="I" >Inativo</option>
    		<option value="B" >Bloqueado</option>
    		</select>
    	</div>
  	</div>
  	
	<div class="form-group">
    	<label for="perfil" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Perfil</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
    		<select id="perfil" name="perfil" class="c-select"  required>
    		<option value="">Selecione</option>
    		<option value="E" >Emissor</option>
    		<option value="A" >Administrador</option>
    		<option value="D" >DSM</option>
    		<option value="T" >Tudo</option>
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
    		<input type="hidden" id="id_om" name="id_om" value="" required>
    		<input type="hidden" id="nm_login" name="nm_login" value="" required>
    		<input type="hidden" id="chave" name="chave" value="" required>
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="location.href='usuarios';">Retornar</button>
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
	            url: "http://10.4.224.74/aux_regulacao/usuarios/confirmarincluir",
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
	            "url": "http://10.4.224.74/aux_regulacao/usuarios/gridom",
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
	            "url": "http://10.4.224.74/aux_regulacao/usuarios/gridusuario",
	            "type": "POST"
	        } 	        	
	    } );
	    
});
</script> 


<?php }
}
