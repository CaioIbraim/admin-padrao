<?php
/* Smarty version 3.1.30, created on 2017-07-31 13:52:46
  from "D:\www\aux_regulacao\views\guia\pesquisa\pesquisa.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597f605e2acce1_63562091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4fdd111ad9624cc5c0fb13e7750e3eb0c437717' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\guia\\pesquisa\\pesquisa.html',
      1 => 1498146874,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_597f605e2acce1_63562091 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.mask.min.js"></script>
<script src="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link href="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.js"></script>

<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Pesquisa de Guias</h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="pesquisa_numero" class="col-xs-12 col-sm-1 col-md-1 col-lg-1 control-label">Número</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
    		<input type="text" id="pesquisa_numero" name="pesquisa_numero" value="" placeholder="Número da GAU" class="form-control" onkeypress="limparDiv();">
    	</div>
    	<label for="pesquisa_nip" class="col-xs-12 col-sm-1 col-md-1 col-lg-1 control-label">NIP</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
    		<input type="text" id="pesquisa_nip" name="pesquisa_nip" value="" placeholder="NIP" class="form-control" onkeypress="limparDiv();">
    	</div>
    	<label for="pesquisa_status" class="col-xs-12 col-sm-1 col-md-1 col-lg-1 control-label">Status</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
    		<select id="pesquisa_status" name="pesquisa_status" class="c-select" onchange="limparDiv();">
    		<option value="">Todas</option>
    		<option value="1">Aberta</option>
    		<option value="4">Cancelada</option>
    		<option value="5">Fechada</option>
    		<option value="2">Em Andamento</option>
    		<option value="6">Autorizada</option>
    		<option value="7">Não Autorizada</option>
    		<option value="8">Em Análise</option>
    		</select>
    	</div>
  	</div>
	<div class="form-group">
    	<label for="pesquisa_om" class="col-xs-12 col-sm-1 col-md-1 col-lg-1 control-label">OM</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
    		<select id="pesquisa_om" name="pesquisa_om" class="c-select" >
    		<option value="">Todas</option>
    		    		<option value="371">COM9ºDN</option>
    		    		<option value="332">PNMA</option>
    		    		</select>
    	</div>
  		<label for="pesquisa_ose" class="col-xs-12 col-sm-1 col-md-1 col-lg-1 control-label">OSE</label>
    	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
    		<select id="pesquisa_ose" name="pesquisa_ose" class="c-select" onchange="limparDiv();">
	    		<option value="">Todas</option>
    		</select>
    	</div>
  	</div>
  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
  			<button type="button" id="btnLimpar" class="btn btn-primary"><span class="fa fa-refresh"></span> Limpar Pesquisa</button>
  			<button type="button" id="btnConfirmar" class="btn btn-primary"><span class="fa fa-search"></span> Listar Guias</button>
    	</div>
  	</div>
</form>
<br><br>
<div id="divPesquisa"></div>
<form method="post" id="frmFormularioAux" action=""><input type="hidden" name="numero_guia" id="numero_guia" value=""></form>

<!-- Scripts of page -->


<script>
$(document).ready(function(){
	
	$('#pesquisa_guia').mask('00000000', {clearIfNotMatch: true});
	
	$('#pesquisa_om').change(function(){
        $('#pesquisa_ose').load('http://10.4.224.74/aux_regulacao/guia-pesquisa/carregacombo/'+$('#pesquisa_om').val() );
        //$('#divPesquisa').html('');
        if ($("#pesquisa_ose").val() != "") {
        	//$("#id_ose option:first").attr('selected','selected');
        	
        	$("#pesquisa_ose option").each(function(i){
        		$(this).removeAttr("selected");
        	    if (i == 0) this.selected = true; // onde o "i" é o index desse select, começando em zero
			});
		}
        limparDiv();
    });
		
	$('#btnLimpar').click(function(){
		document.getElementById('frmFormulario').reset();
		limparDiv();
	});
	
	limparDiv = function(){
		$("#divPesquisa").html('');
	}
	
	$('#btnConfirmar').click(function(){
		pesquisarAjax();
	});
	
	imprimirGuia = function(numero){
		
		$('#frmFormularioAux').attr('action','http://10.4.224.74/aux_regulacao/guia-imprimir/pdf');
		$('#frmFormularioAux').attr('target','_blank');
		$('#numero_guia').val(numero);
		$('#frmFormularioAux').submit();
		$('#numero_guia').val('');
		
	}
	
	pesquisarAjax = function(){
		$.ajax({
            url: "http://10.4.224.74/aux_regulacao/guia-pesquisa/retornopesquisa",
            data: $("#frmFormulario").serialize(),
            type: 'POST',
            context: $('#divPesquisa'),
            beforeSend: function(){
            	$("#divPesquisa").html(imagemAjax);
            	$("#btnConfirmar").attr("disabled","disabled");
            	rolarScroll();
            },
            success: function(data){
                //this.append(data);
                $("#divPesquisa").html(data);	            	
                $("#btnConfirmar").removeAttr("disabled");
                
            }
		});
	}
    
});
</script> 


<?php }
}
