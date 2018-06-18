<?php
/* Smarty version 3.1.30, created on 2017-08-21 14:10:29
  from "C:\xampp\htdocs\produtividade\views\basico\relatorios\guias.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599b14056fe883_97181612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65640aec6005f551bf4f781353632fa06672a661' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\relatorios\\guias.html',
      1 => 1503335071,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_599b14056fe883_97181612 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://localhost/produtividade/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Relatórios</li>
		  		  <li class="active">Consultas</li>
		  		</ol>
      		
    	</div>
    		</div>
<div class="clearfix"></div>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
<!-- script e css da tela -->
<link href="http://localhost/produtividade/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://localhost/produtividade/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>


<div class="x_panel">
	<div class="x_title">
		<h2>Quantidade de guias autorizadas e não autorizadas, por mês/usuário</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<div class="row">
		
			



<form>

<div class='row'>
	<div class="col-md-3">
		<input type="text" class="form-control" id="dt-ini" name="dt-ini" placeholder="Data Inicial"/>
	</div>
	
	<div class="col-md-3">
		<input type="text" class="form-control" id="dt-fim" name="dt-fim" placeholder="Data Final"/>
	</div>
	
	<div class="col-md-3">
		<select id="tipo" class="form-control">
			<option value="0">Autorizadas</option>	
			<option value="1">Não Autorizadas</option>
			
		</select>
	</div>
	
	<div class="col-md-3 pull-right">
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
		var ini = $("#dt-ini").val();
		var fim = $("#dt-fim").val();
		var tipo = $("#tipo").val();
		var url = "";
		
		(tipo === '0')?url = "guias/restGuiasAutorizadas" : url =  "guias/restGuiasNaoAutorizadas"
		
		$.post( url, { ini: ini, fim: fim } )
		.done(function( data ) {
		    $('#b').html(data);
		  });
	});
});
</script>

<?php }
}
