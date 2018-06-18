<?php
/* Smarty version 3.1.30, created on 2017-08-02 10:49:39
  from "D:\www\aux_regulacao\views\contrato\pesquisa.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5981d8735a3125_66301596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc2a9401922b5aa287bd97cfc18a320b9d6e985f' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\contrato\\pesquisa.html',
      1 => 1497975800,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5981d8735a3125_66301596 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link href="http://localhost/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.js"></script>

<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Contratos</h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="id_om" class="col-xs-12 col-sm-1 col-md-1 col-lg-1 control-label">OM</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 obrigatorio">
    		<select id="id_om" name="id_om" class="c-select" >
    		<option value="">Todas</option>
    		    		<option value="296">AGABRANCA</option>
    		    		<option value="278">AGBJLAPA</option>
    		    		<option value="348">AGIMPERATRIZ</option>
    		    		<option value="276">AGJUAZEIRO</option>
    		    		<option value="59">CFAT</option>
    		    		<option value="326">CFPA</option>
    		    		<option value="320">CFRP</option>
    		    		<option value="72">CFS</option>
    		    		<option value="65">CFSF</option>
    		    		<option value="99">CFTP</option>
    		    		<option value="195">CMAM</option>
    		    		<option value="85">CN</option>
    		    		<option value="571">CNBE</option>
    		    		<option value="572">CNBW</option>
    		    		<option value="319">COM5ºDN</option>
    		    		<option value="156">COM8ºDN</option>
    		    		<option value="371">COM9ºDN</option>
    		    		<option value="293">CPAL</option>
    		    		<option value="335">CPAP</option>
    		    		<option value="300">CPMA</option>
    		    		<option value="42">CPMM</option>
    		    		<option value="292">CPPB</option>
    		    		<option value="301">CPPI</option>
    		    		<option value="323">CPPR</option>
    		    		<option value="272">CPSE</option>
    		    		<option value="108">CPSP</option>
    		    		<option value="568">CTMSP</option>
    		    		<option value="328">DELGUAIRA</option>
    		    		<option value="273">DELILHEUS</option>
    		    		<option value="165">DELITAJAI</option>
    		    		<option value="64">DELLAGUNA</option>
    		    		<option value="104">DELPEPITACIO</option>
    		    		<option value="62">DELPSEGURO</option>
    		    		<option value="325">DELSFSUL</option>
    		    		<option value="121">DELSSEBASTIAO</option>
    		    		<option value="60">DELURUGUAIANA</option>
    		    		<option value="237">DSM</option>
    		    		<option value="286">EAMCE</option>
    		    		<option value="94">EAMES</option>
    		    		<option value="321">EAMSC</option>
    		    		<option value="80">HCM</option>
    		    		<option value="308">HNBE</option>
    		    		<option value="260">HNBRA</option>
    		    		<option value="250">HNLA</option>
    		    		<option value="70">HNMD</option>
    		    		<option value="295">HNNA</option>
    		    		<option value="299">HNRE</option>
    		    		<option value="274">HNSA</option>
    		    		<option value="82">OCM</option>
    		    		<option value="570">PNCG</option>
    		    		<option value="332">PNMA</option>
    		    		<option value="411">PNN</option>
    		    		<option value="86">PNNSG</option>
    		    		<option value="663">PNRG</option>
    		    		<option value="205">PNSPA</option>
    		    		<option value="84">SNNF</option>
    		    		<option value="353">UISM</option>
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
        $('#id_ose').load('http://localhost/aux_regulacao/contrato/carregacombo/'+$('#id_om').val() );
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
            url: "http://localhost/aux_regulacao/contrato/retornopesquisa",
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
