<?php
/* Smarty version 3.1.30, created on 2017-08-15 13:28:52
  from "D:\www\altacomplexidade\views\basico\tipo-arquivo\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59932144af5479_13797529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3f5024f482da64f926548181c6a2f62edd62c9e' => 
    array (
      0 => 'D:\\www\\altacomplexidade\\views\\basico\\tipo-arquivo\\formulario.html',
      1 => 1502477316,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59932144af5479_13797529 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://10.4.224.74/altacomplexidade/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Básico</li>
		  		  <li class="active">Tipo de Arquivo2</li>
		  		</ol>
      		
    	</div>
    		</div>
<div class="clearfix"></div>

<!-- script e css da tela -->
<script src="http://10.4.224.74/altacomplexidade/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://10.4.224.74/altacomplexidade/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link href="http://10.4.224.74/altacomplexidade/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.224.74/altacomplexidade/views/_jquery/jquery.dataTables/datatables.min.js"></script>

<!-- script e css da tela -->
<div id="msgAjax"></div>

<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2>Tipos de Arquivo2 <small><i class="fa fa-angle-double-right"></i> Alterar dados</small></h2>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<br>
			<form method="post" id="frmFormulario" class="form-horizontal form-label-left">
				<div class="form-group">
                	<label for="label" class="control-label col-md-3 col-sm-3 col-xs-12">Código <span class="required">*</span></label>
                   	<div class="col-md-6 col-sm-6 col-xs-12">
                    	<input type="text" class="form-control col-md-7 col-xs-12" required="required" id="label" name="label" value="Exame de Imagem" >
                   	</div>
             	</div>
                <div class="form-group">
                	<label for="descricao" class="control-label col-md-3 col-sm-3 col-xs-12">Descrição <span class="required">*</span></label>
					<div class="col-md-6 col-sm-6 col-xs-12">
                    	<input type="text" class="form-control col-md-7 col-xs-12" required="required" name="descricao" id="descricao" value="Exame de Imagem" >
                   	</div>
              	</div>
              	<div class="ln_solid"></div>
               	<div class="form-group">
                   	<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
			    		<input type="hidden" id="chave" name="chave" value="2" required>
                       	<button id="btnCancelar"  type="button" class="btn btn-primary">Retornar</button>
                       	<button id="btnConfirmar" type="submit" class="btn btn-success">Confirmar</button>
					</div>
               	</div>
			</form>

	</div>
</div>
<!-- Scripts of page -->


<script>
$(document).ready(function(){
	
	$("#btnCancelar").click(function(){
		carregarTelaAjax('basico-tipoarquivoo','');		
	});
	
	// Validação do formulário
   	$("#frmFormulario").validate({
   		errorElement: 'div',
		errorClass: 'has-error help-block',
		focusInvalid: false,
		
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
	            url: "http://10.4.224.74/altacomplexidade/basico-tipoarquivoo/confirmaralterar",
	            data: $("#frmFormulario").serialize(),
	            type: 'POST',
	            context: $('#divAjax'),
	            beforeSend: function(){
	            	$("#msgAjax").html(imagemAjax);
	            	$("#btnConfirmar").attr("disabled","disabled");
	            	$('html, body').animate({scrollTop:0}, 'slow');
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
