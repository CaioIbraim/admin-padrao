<?php
/* Smarty version 3.1.30, created on 2017-09-04 10:08:51
  from "C:\xampp\htdocs\produtividade\views\basico\relatorios\demografico\sessentaanos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ad50633404a5_28987543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44f1ce462c6aed3267a97a3b64e4f662198d81c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\relatorios\\demografico\\sessentaanos.html',
      1 => 1503929330,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59ad50633404a5_28987543 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://localhost/produtividade/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Demográfico</li>
		  		  <li class="active">Usuários acima de 60 anos</li>
		  		</ol>
      		
    	</div>
    		</div>
<div class="clearfix"></div>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- script e css da tela -->
<link
	href="http://localhost/produtividade/views/_jquery/jquery.dataTables/datatables.min.css"
	rel="stylesheet">
<script
	src="http://localhost/produtividade/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<!-- bootstrap-daterangepicker -->
<link
	href="http://localhost/produtividade/views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css"
	rel="stylesheet">
<!-- bootstrap-datetimepicker -->
<link
	href="http://localhost/produtividade/views/_gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css"
	rel=stylesheet">

<!-- Ion.RangeSlider -->
<link
	href="http://localhost/produtividade/views/_gentelella/vendors/normalize-css/normalize.css"
	rel="stylesheet">
<link
	href="http://localhost/produtividade/views/_gentelella/vendors/ion.rangeSlider/css/ion.rangeSlider.css"
	rel="stylesheet">
<link
	href="http://localhost/produtividade/views/_gentelella/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css"
	rel="stylesheet">

 <!-- PNotify -->
 <link href="http://localhost/produtividade/views/_gentelella/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
 <link href="http://localhost/produtividade/views/_gentelella/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
 <link href="http://localhost/produtividade/views/_gentelella/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">


<div id="msgAjax"></div>

<div class="x_panel">
	<div class="x_title">
		<h2>
			Relação de usuários		</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<div class="row">

			<!-- form input knob -->
			<div class="col-md-5" id="div-knob">
				<p>Selecione o intervalo entre as idades</p>
				<input type="text" id="range2" value="" name="range" />
				<input type="hidden" id="data-knob" value="" />
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
		              <td>Com 1º DN</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
		            
		            <tr>
		              <td>Com 2º DN</td>
		              <td>6.855</td>
		              <td>7.192</td>
		              <td>590</td>
		              <td>14.637</td>
		            </tr>
		            
		            <tr>
		              <td>Com 3º DN</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
		            
		            <tr>
		              <td>Com 4º DN</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
		            
		            
		            <tr>
		              <td>Com 5º DN</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
				  
				  
				  
				  <tr>
		              <td>Com 6º DN</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
		            
		            
		            
		            <tr>
		              <td>Com 7º DN</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
		            
		            
		            <tr>
		              <td>Com 8º DN</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
		              <td>227.006</td>
		            </tr>
		            
		            <tr>
		              <td>Com 9º DN</td>
		              <td>101.248</td>
		              <td>114.187</td>
		              <td>11.571</td>
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
	src="http://localhost/produtividade/views/_gentelella/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>


<!-- jQuery Knob -->
<script
	src="http://localhost/produtividade/views/_gentelella/vendors/jquery-knob/dist/jquery.knob.min.js"></script>



<!-- PNotify -->
<script src="http://localhost/produtividade/views/_gentelella/vendors/pnotify/dist/pnotify.js"></script>
<script src="http://localhost/produtividade/views/_gentelella/vendors/pnotify/dist/pnotify.buttons.js"></script>
<script src="http://localhost/produtividade/views/_gentelella/vendors/pnotify/dist/pnotify.nonblock.js"></script>



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
