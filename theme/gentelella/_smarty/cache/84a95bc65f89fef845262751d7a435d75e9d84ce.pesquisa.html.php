<?php
/* Smarty version 3.1.30, created on 2017-06-22 09:32:38
  from "D:\www\aux_regulacao\views\guia\pesquisa.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594bb8e6b58913_83212257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af9c56ce6af86ca3a0c17b284e3d23f0722eb82b' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\guia\\pesquisa.html',
      1 => 1497980798,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_594bb8e6b58913_83212257 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link href="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.js"></script>

<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Imprimir Guia</h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="" onsubmit="$('#btnConfirmar').click(); return false;">
	
	<div class="form-group">
    	<label for="numero_guia" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Número da Guia</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    		<input type="text" id="numero_guia" name="numero_guia" value="" placeholder="Informe o número da GAU" class="form-control" required>
    	</div>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
    		<button type="button" id="btnConfirmar" class="btn btn-primary"><span class="fa fa-print"></span> Imprimir</button>
    	</div>
  	</div>
  	
</form>
<form method="post" id="frmFormularioAux" action=""><input type="hidden" name="numero_guia" id="numero_guia2" value=""></form>

<!-- Scripts of page -->


<script>
$(document).ready(function(){
	
	$('#btnConfirmar').click(function(){

		if ($('#numero_guia').val() == "") {
			return false;
		}
		
		$.ajax({
            url: "http://10.4.224.74/aux_regulacao/guia-imprimir/pesquisa",
            data: $("#frmFormulario").serialize(),
            type: 'POST',
            context: $('#msgAjax'),
            beforeSend: function(){
            	$("#msgAjax").html(imagemAjax);
            	$("#btnConfirmar").attr("disabled","disabled");
            	rolarScroll();
            },
            success: function(data){
                //this.append(data);
                $("#msgAjax").html(data);	            	
                $("#btnConfirmar").removeAttr("disabled");
                
            }
		});
		
	});
    
});
</script> 


<?php }
}
