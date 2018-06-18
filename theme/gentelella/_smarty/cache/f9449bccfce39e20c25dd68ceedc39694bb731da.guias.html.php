<?php
/* Smarty version 3.1.30, created on 2017-10-31 15:06:31
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\guias\guias.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f8ad9713ec98_54574048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e29fec0a42e47622e66ea23f5976f71655182a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\guias\\guias.html',
      1 => 1509467384,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59f8ad9713ec98_54574048 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://10.4.225.62/estatistica_ssm/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Regulação</li>
		  		  <li class="active">Estatísticas de Produtividade DSM</li>
		  		</ol>
      		
    	</div>
    		</div>
<div class="clearfix"></div>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
<!-- script e css da tela -->
<link href="http://10.4.225.62/estatistica_ssm/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.225.62/estatistica_ssm/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->
<!-- bootstrap-daterangepicker -->
<link href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<!-- bootstrap-datetimepicker -->
<link href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<!-- bootstrap-select -->
<link href="http://10.4.225.62/estatistica_ssm/views/_css/bootstrap-select/bootstrap-select.css" rel="stylesheet">





<div id="msgAjax"></div>


<div class="x_panel">
	<div class="x_title">
		<h2>Estatísticas Mensais</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
<div class="row">

<form>

<!-- 
<div class="well" style="overflow: auto">
   <div class="col-md-4">
     <div id="ssssssssss" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
       <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
       <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
     </div>
   </div>
</div>
 -->
 

<div class='row'>
	<div class="col-md-3">
		<select name="foo" class="form-control" id="mes">
<option value="01" class="form-control option" id="mes-0">Janeiro</option>
<option value="02" class="form-control option" id="mes-1">Fevereiro</option>
<option value="03" class="form-control option" id="mes-2">Março</option>
<option value="04" class="form-control option" id="mes-3">Abril</option>
<option value="05" class="form-control option" id="mes-4">Maio</option>
<option value="06" class="form-control option" id="mes-5">Junho</option>
<option value="07" class="form-control option" id="mes-6">Julho</option>
<option value="08" class="form-control option" id="mes-7">Agosto</option>
<option value="09" class="form-control option" id="mes-8">Setembro</option>
<option value="10" selected="selected" class="form-control option" id="mes-9">Outubro</option>
<option value="11" class="form-control option" id="mes-10">Novembro</option>
<option value="12" class="form-control option" id="mes-11">Dezembro</option>
</select>
   
	</div>
	
	<div class="col-md-3">
		<select name="foo" class="form-control" id="ano">
<option value="2017" selected="selected" class="form-control option" id="ano-0">2017</option>
<option value="2016" class="form-control option" id="ano-1">2016</option>
<option value="2015" class="form-control option" id="ano-2">2015</option>
<option value="2014" class="form-control option" id="ano-3">2014</option>
</select>
  
	</div>
	
	<div class="col-md-3">
		<a  class="btn btn-success" id="btn-pesq-aut"><i class="fa fa-search"></i></a>
	</div>
</div>

</form>

<hr/>

<div class="row" >
	<div class="col-md-12 col-sm-12 col-xs-12" id="b">
	      
	</div>
</div>

<!-- bootstrap-daterangepicker -->
<script src="http://10.4.225.62/estatistica_ssm/views/_js/bootstrap-select/bootstrap-select.min.js"></script>
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/moment/min/moment.min.js"></script>
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<script>
$('document').ready(function(){
	
	//Pesquisa os dados 
	$('#btn-pesq-aut').click(function(){
		var mes = $("#mes").val();
		var ano = $("#ano").val();
		getData(mes, ano);
	});
	
	function getData(ini, fim){
		
		$.ajax({
			  method: "POST",
			  url: "guias/restGuias",
			  data: { ini: ini, fim: fim },
			  dataType: "html",
			  
			  beforeSend: function(){
	          		$("#b").html(imagemAjax);
	           },
	           success: function(data){
	                //this.append(data);
	                $("#b").html(data);	            
	           }
		});
	}
	
	$('#mes').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
	
	$('#ano').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
	
	
	
	});
</script>

<?php }
}
