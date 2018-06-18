<?php
/* Smarty version 3.1.30, created on 2017-08-08 16:22:05
  from "D:\www\sigsaude\views\contrato\pesquisa.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598a0f5de95e46_38718454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8e6a7c97d14430ed1c4384978228ab57ac4a03d' => 
    array (
      0 => 'D:\\www\\sigsaude\\views\\contrato\\pesquisa.html',
      1 => 1497975800,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_598a0f5de95e46_38718454 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://10.4.224.74/sigsaude/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://10.4.224.74/sigsaude/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link href="http://10.4.224.74/sigsaude/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.224.74/sigsaude/views/_jquery/jquery.dataTables/datatables.min.js"></script>

<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Contratos</h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="id_om" class="col-xs-12 col-sm-1 col-md-1 col-lg-1 control-label">OM</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 obrigatorio">
    		<select id="id_om" name="id_om" class="c-select" >
    		<option value="">Todas</option>
    		    		<option value="70">HNMD</option>
    		    		</select>
    	</div>
  		<label for="id_ose" class="col-xs-12 col-sm-1 col-md-1 col-lg-1 control-label">OSE</label>
    	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 obrigatorio">
    		<select id="id_ose" name="id_ose" class="c-select">
	    		<option value="">Todas</option>
    		</select>
    	</div>
  	</div>
  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
  			<button type="button" id="btnConfirmar" class="btn btn-primary"><span class="fa fa-search"></span> Listar Contratos</button>
  			<button type="button" id="btnNovoContrato" class="btn btn-primary" ><span class="fa fa-plus"></span> Novo Contrato</button>
    	</div>
  	</div>
</form>
<br><br>
<div id="divPesquisa"></div>

<!-- Scripts of page -->


<script>
$(document).ready(function(){
	
	$('#id_om').change(function(){
        $('#id_ose').load('http://10.4.224.74/sigsaude/contrato/carregacombo/'+$('#id_om').val() );
        //$('#divPesquisa').html('');
        if ($("#id_ose").val() != "") {
        	//$("#id_ose option:first").attr('selected','selected');
        	
        	  $("#id_ose option").each(function(i){
        	      $(this).removeAttr("selected");
        	      if (i == 0) this.selected = true; // onde o "i" é o index desse select, começando em zero
        	    });
        	
        	
        }
    	pesquisarAjax();
    });
	
	$('#id_ose').change(function(){
        //$('#divPesquisa').html('');
        pesquisarAjax();
    });
	
	$('#btnConfirmar').click(function(){
		pesquisarAjax();
	});
	
	$('#btnNovoContrato').click(function(){

		id_om = $("#id_om").val();
		//id_ose = $("#id_ose").val();
		
		if (id_om == "") {
			alert('Informe pelo menos a OM para cadastrar do novo contrato.');
			$("#id_om").focus();
			return false;
		}
	
		carregarTelaAjax('contrato/incluir',$("#frmFormulario").serialize());
	});
	
	
	
	pesquisarAjax = function(){
		$.ajax({
            url: "http://10.4.224.74/sigsaude/contrato/retornopesquisa",
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
