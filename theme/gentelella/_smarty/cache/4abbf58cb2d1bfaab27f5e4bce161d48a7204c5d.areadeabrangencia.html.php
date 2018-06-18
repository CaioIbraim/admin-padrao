<?php
/* Smarty version 3.1.30, created on 2017-09-18 12:40:44
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\demografico\areadeabrangencia.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bfe8fc6a2757_26077614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93d3902aa4d5805c02a2e1fb1767deecfbe72ec1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\demografico\\areadeabrangencia.html',
      1 => 1505413559,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59bfe8fc6a2757_26077614 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://10.4.225.62/estatistica_ssm/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Demográfico</li>
		  		  <li class="active">Busca por área de abrangência</li>
		  		</ol>
      		
    	</div>
    		</div>
<div class="clearfix"></div>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- script e css da tela -->
<link
	href="http://10.4.225.62/estatistica_ssm/views/_jquery/jquery.dataTables/datatables.min.css"
	rel="stylesheet">
<script
	src="http://10.4.225.62/estatistica_ssm/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<!-- bootstrap-daterangepicker -->
<link
	href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css"
	rel="stylesheet">
<!-- bootstrap-datetimepicker -->
<link
	href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css"
	rel=stylesheet">

<!-- Ion.RangeSlider -->
<link
	href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/normalize-css/normalize.css"
	rel="stylesheet">
<link
	href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/ion.rangeSlider/css/ion.rangeSlider.css"
	rel="stylesheet">
<link
	href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css"
	rel="stylesheet">

 <!-- PNotify -->
 <link href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
 <link href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
 <link href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">


<div id="msgAjax"></div>

<div class="x_panel">
	<div class="x_title">
		<h2>
			Relação de usuários por área de abrangência		</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<div class="row">

			<!-- form input knob -->
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

			<!-- /form input knob -->
			
			
			<div class="col-md-1">
				<button type="submit" class="btn btn-success" id="btn-pesq"><i class="fa fa-search" aria-hidden="true"></i>
				</button>
			</div>
			
			

			<!-- Carrega conteúdo por ajax -->

			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12" id="b">
				
				
				
				
				<div class="col-md-12 col-sm-6 col-xs-12">
		
		<div class="x_panel">
		      <div class="x_title">
		       
		         <span style="float:right; padding:2px"><a href="#" class="export"><i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>
		<div class="clearfix"></div>
		      </div>
		      <div class="x_content">
		        <table class="table" id="tb">
		          <thead>
		            <tr>
		              <th>Distrito</th>
		              <th>Titular</th>
		              <th>Dependente Direto</th>
		              <th>Dependente Indireto</th>
		              <th>Subtotal</th>
		            </tr>
		          </thead>
		          <tbody>
		          
			 		<tr>
		              <td>Militar Ativa</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
		            
		            <tr>
		              <td>Inativo Militar</td>
		              <td>6.855</td>
		              <td>7.192</td>
		              <td>590</td>
		              <td>14.637</td>
		            </tr>
		            
		            <tr>
		              <td>Pensionista Militar</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
		            
		            <tr>
		              <td>Ex-Combatente</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
		            
		            
		            <tr>
		              <td>Pensionista Ex-Combatente</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
				  
				  
				  
				  <tr>
		              <td>Anistiado</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
		            
		            
		            
		            <tr>
		              <td>Pensionista de Anistiado</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
		            
		            
		            <tr>
		              <td>Servidor Civil</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
		            
		            
		            <tr>
		              <td>Pensionista Servidor Civil</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
		            
		            
		            <tr>
		              <td>Autorizado</td>
		              <td>101.248</td>
		              <td></td>
		              <td></td>
		              <td>227.006</td>
		            </tr>
				  
				  
				  <tr>
		              <td>Total</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
				  
				  
				  
		          </tbody>
		        </table>
		      </div>
		    </div>
		</div>      
	      
	      
				
				
				
				
				
				
				
				
				
				</div>
			</div>




		</div>
	</div>

</div>


<!-- scripts -->

<!-- Ion.RangeSlider -->
<script
	src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>


<!-- jQuery Knob -->
<script
	src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/jquery-knob/dist/jquery.knob.min.js"></script>



<!-- PNotify -->
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.js"></script>
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.buttons.js"></script>
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.nonblock.js"></script>



<script>
	$('document')
			.ready(
					function() {
						
						
						
						/*CHAMAR OS DADOS*/

						$("#btn-pesq").click(function() {
							var dataKnob      = $("#data-knob").val();
							
							if(dataKnob === "0"){
								displayNotify("Selecione um intervalo maior que zero!", "error");
								return;
							}
							
							
							
							$.ajax({
								  method: "POST",
								  url: 'sexo/consultarDados',
								  data: {intervalo:dataKnob, from:dataRangeFrom, to:dataRangeTo},
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
						
						

						
						function init_RangeSlider() {
							if( typeof ($.fn.ionRangeSlider) === 'undefined'){ return; }
							console.log('init_IonRangeSlider');
							
							
							
							$("#range2").ionRangeSlider({
								  hide_min_max: true,
								  keyboard: true,
								  min: 0,
								  max: 120,
								  from: 0,
								  to: 60,
								  from_fixed: true,
								  type: 'integer',
								  step: 5,
								  //prefix: "intervalo: ",
								  grid: true,
								  onStart: updateInputs2,
							      onChange: updateInputs2,
							      onFinish: updateInputs2
								});
							
								
								function updateInputs2(data){
									$("#data-knob").val(data.to);
								}
							
						}
						
						
				
						
/*INICIA OS PLUGINS*/
init_knob();
init_RangeSlider();

/* PNotify*/
//msg:: A mensagem que será passada, type:: o estilo da mensagem que será passada ex:error, succes, info...
	function displayNotify(msg, type){
		new PNotify({
			title: 'Atenção',
			text: msg,
			type: type,
			styling: 'bootstrap3'
		});
	}
});
</script>



<?php }
}
