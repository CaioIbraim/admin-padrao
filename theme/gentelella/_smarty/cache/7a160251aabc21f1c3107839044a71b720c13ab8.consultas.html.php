<?php
/* Smarty version 3.1.30, created on 2017-10-27 15:58:49
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\consultas\consultas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f373d9ca62e2_31653458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee5c7344ba8e580717085db5172575a3cc08b82b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\consultas\\consultas.html',
      1 => 1505996819,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59f373d9ca62e2_31653458 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://10.4.225.62/estatistica_ssm/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Gestão</li>
		  		  <li class="active">Consultas</li>
		  		</ol>
      		
    	</div>
    		</div>
<div class="clearfix"></div>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
<!-- script e css da tela -->
<link href="http://10.4.225.62/estatistica_ssm/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.225.62/estatistica_ssm/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>


<div class="x_panel">
	<div class="x_title">
		<h2>Guias emitidas de Consulta por Especialidade</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<div class="row">
		
			



<form id="frmCaio">

<div class='row'>
	<div class="col-md-2">
		<input type="text" class="form-control" id="dt-ini" name="dt-ini" placeholder="Data Inicial"/>
	</div>
	
	<div class="col-md-2">
		<input type="text" class="form-control" id="dt-fim" name="dt-fim" placeholder="Data Final"/>
	</div>
	
	
	
	<div class="col-md-2">
		<select id="idOm" class="form-control">
			<option>DSM</option>	
			<option>HNMD</option>
		</select>
	</div>
	
	
	
	<div class="col-md-3">
		<select id="tipo" class="form-control">
			<option value="0">Autorizadas</option>	
			<option value="1">Não Autorizadas</option>
		</select>
	</div>
	
	<div class="col-md-2 pull-right">
		<a  class="btn btn-default" id="btn-pesq-aut"><i class="fa fa-search"></i></a>
	</div>
</div>


</form>


<hr/>


<div class="row" >
	<div class="col-md-12 col-sm-12 col-xs-12" id="b">
	      
	</div>
</div>







<script>
$('document').ready(function(){
	$('#btn-pesq-aut').click(function(){
		
		
		
		var ini  = $("#dt-ini").val();
		var fim  = $("#dt-fim").val();
		var tipo = $("#tipo").val();
		var idOm = $("#idOm").val();
		var url  = "consulta/consultarGuias";
		
		//alert('xxxxxx');
		
		
		$.post( url, '{ "ini": '+ini+', "fim": '+fim+', "tipo" : '+tipo+', "idOm": '+idOm+' }' )
		.done(function( data ) {
		    $('#b').html(data);
		    
		    
		  });
	});
});
</script>

<?php }
}
