<?php
/* Smarty version 3.1.30, created on 2017-09-06 10:15:46
  from "C:\xampp\htdocs\produtividade\views\basico\relatorios\contratos\contratos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aff5020238e9_79859610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc238b7154350248cafb2d40b0a423f01fa05441' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\relatorios\\contratos\\contratos.html',
      1 => 1503947811,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59aff5020238e9_79859610 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://10.4.225.62/produtividade/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Regulação</li>
		  		  <li class="active">Contratos</li>
		  		</ol>
      		
    	</div>
    		</div>
<div class="clearfix"></div>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
<!-- script e css da tela -->
<link href="http://10.4.225.62/produtividade/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<link href="http://10.4.225.62/produtividade/views/_css/bootstrap-select/bootstrap-select.css" rel="stylesheet">




<script src="http://10.4.225.62/produtividade/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>



<div class="x_panel">
	<div class="x_title">
		<h2>
			Gestão de contratos		</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<div class="row">
			<form id="frmCaio">
				<div class='row'>

					<div class="col-md-3">
						<select name="foo" class="form-control" id="om">
<option value="296" class="form-control option" id="om-0">AGABRANCA</option>
<option value="278" class="form-control option" id="om-1">AGBJLAPA</option>
<option value="348" class="form-control option" id="om-2">AGIMPERATRIZ</option>
<option value="276" class="form-control option" id="om-3">AGJUAZEIRO</option>
<option value="59" class="form-control option" id="om-4">CFAT</option>
<option value="326" class="form-control option" id="om-5">CFPA</option>
<option value="320" class="form-control option" id="om-6">CFRP</option>
<option value="72" class="form-control option" id="om-7">CFS</option>
<option value="65" class="form-control option" id="om-8">CFSF</option>
<option value="99" class="form-control option" id="om-9">CFTP</option>
<option value="195" class="form-control option" id="om-10">CMAM</option>
<option value="85" class="form-control option" id="om-11">CN</option>
<option value="571" class="form-control option" id="om-12">CNBE</option>
<option value="572" class="form-control option" id="om-13">CNBW</option>
<option value="319" class="form-control option" id="om-14">COM5ºDN</option>
<option value="156" class="form-control option" id="om-15">COM8ºDN</option>
<option value="371" class="form-control option" id="om-16">COM9ºDN</option>
<option value="293" class="form-control option" id="om-17">CPAL</option>
<option value="335" class="form-control option" id="om-18">CPAP</option>
<option value="300" class="form-control option" id="om-19">CPMA</option>
<option value="42" class="form-control option" id="om-20">CPMM</option>
<option value="292" class="form-control option" id="om-21">CPPB</option>
<option value="301" class="form-control option" id="om-22">CPPI</option>
<option value="323" class="form-control option" id="om-23">CPPR</option>
<option value="272" class="form-control option" id="om-24">CPSE</option>
<option value="108" class="form-control option" id="om-25">CPSP</option>
<option value="568" class="form-control option" id="om-26">CTMSP</option>
<option value="328" class="form-control option" id="om-27">DELGUAIRA</option>
<option value="273" class="form-control option" id="om-28">DELILHEUS</option>
<option value="165" class="form-control option" id="om-29">DELITAJAI</option>
<option value="64" class="form-control option" id="om-30">DELLAGUNA</option>
<option value="104" class="form-control option" id="om-31">DELPEPITACIO</option>
<option value="62" class="form-control option" id="om-32">DELPSEGURO</option>
<option value="325" class="form-control option" id="om-33">DELSFSUL</option>
<option value="121" class="form-control option" id="om-34">DELSSEBASTIAO</option>
<option value="60" class="form-control option" id="om-35">DELURUGUAIANA</option>
<option value="237" class="form-control option" id="om-36">DSM</option>
<option value="286" class="form-control option" id="om-37">EAMCE</option>
<option value="94" class="form-control option" id="om-38">EAMES</option>
<option value="321" class="form-control option" id="om-39">EAMSC</option>
<option value="80" class="form-control option" id="om-40">HCM</option>
<option value="308" class="form-control option" id="om-41">HNBE</option>
<option value="260" class="form-control option" id="om-42">HNBRA</option>
<option value="250" class="form-control option" id="om-43">HNLA</option>
<option value="70" class="form-control option" id="om-44">HNMD</option>
<option value="295" class="form-control option" id="om-45">HNNA</option>
<option value="299" class="form-control option" id="om-46">HNRE</option>
<option value="274" class="form-control option" id="om-47">HNSA</option>
<option value="82" class="form-control option" id="om-48">OCM</option>
<option value="570" class="form-control option" id="om-49">PNCG</option>
<option value="332" class="form-control option" id="om-50">PNMA</option>
<option value="411" class="form-control option" id="om-51">PNN</option>
<option value="86" class="form-control option" id="om-52">PNNSG</option>
<option value="663" class="form-control option" id="om-53">PNRG</option>
<option value="205" class="form-control option" id="om-54">PNSPA</option>
<option value="84" class="form-control option" id="om-55">SNNF</option>
<option value="353" class="form-control option" id="om-56">UISM</option>
</select>
   
					</div>

					<div class="col-md-2">
						<a class="btn btn-success" id="btn-pesq-aut">
							<i class="fa fa-search"></i>
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<hr/>

<div class="row" >
	<div class="col-md-12 col-sm-12 col-xs-12" id="b">
			
	</div>
</div>






<script src="http://10.4.225.62/produtividade/views/_js/bootstrap-select/bootstrap-select.min.js"></script>

<script>
$('document').ready(function(){
	$('#btn-pesq-aut').click(function(){
		
		var idOm = $("#om").val();
		
		$.ajax({
			  method: "POST",
			  url: 'contratos/getTotalContratosEmUso',
			  data: { idOm : idOm},
			  dataType: "html",
			  
			  beforeSend: function(){
	          		$("#b").html(imagemAjax);
	           },
	           success: function(data){
	                //this.append(data);
	                $("#b").html(data);	            
	           }
			  
		});
	});
	
	$('#om').selectpicker({
	      liveSearch: true,
	      maxOptions: 1
	    });
	
	
});
</script>
<?php }
}
