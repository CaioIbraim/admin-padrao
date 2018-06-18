<?php
/* Smarty version 3.1.30, created on 2017-10-31 15:06:50
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\demografico\sexo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f8adaaa10bc4_82756672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50ed4d9fd4a9b7af1fd5db49f0d1813dd59a4a2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\demografico\\sexo.html',
      1 => 1508349870,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59f8adaaa10bc4_82756672 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://10.4.225.62/estatistica_ssm/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Demográfico</li>
		  		  <li class="active">Busca por Sexo</li>
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


<style>
    .input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group {
        z-index: 2;
        margin-left: -1px;
        font-size: 19.5;
    }
</style>
 


<div id="msgAjax"></div>


<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
	<div class="x_title">
		<h2>
			Relação de usuários		</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<div class="row">

			<hr />

			<!-- form input range -->

			<div class="col-md-3">
                            <p>Selecione a amplitude</p>
                            <input type="text" id="range" value="" name="range" />
                            <input type="hidden" id="range-from" value="" />
                            <input type="hidden" id="range-to" value="" />
			</div>

			<!-- form input knob -->
			<div class="col-md-3" id="div-knob">
                            <p>Selecione o intervalo entre as idades</p>
                            <input type="text" id="range2" value="" name="range" />
                            <input type="hidden" id="data-knob" value="" />
			</div>
			<!-- /form input knob -->
			
			<div class="col-md-4" id="div-knob">
                            <p>&nbsp;</p>
			<br/>
			<!--
                                <div class="col-md-7">
				    <select name="foo" class="form-control" id="om" data-actions-box="true" multiple="multiple">
<option value="CMAM" class="form-control option" id="om-0">CMAM</option>
<option value="CMOPM" class="form-control option" id="om-1">CMOPM</option>
<option value="CPMM" class="form-control option" id="om-2">CPMM</option>
<option value="DSM" class="form-control option" id="om-3">DSM</option>
<option value="HCM" class="form-control option" id="om-4">HCM</option>
<option value="HNMD" class="form-control option" id="om-5">HNMD</option>
<option value="LFM" class="form-control option" id="om-6">LFM</option>
<option value="OCM" class="form-control option" id="om-7">OCM</option>
<option value="PNCG" class="form-control option" id="om-8">PNCG</option>
<option value="PNN" class="form-control option" id="om-9">PNN</option>
<option value="PNNSG" class="form-control option" id="om-10">PNNSG</option>
<option value="SNNF" class="form-control option" id="om-11">SNNF</option>
<option value="UISM" class="form-control option" id="om-12">UISM</option>
</select>
	
				</div>
                        -->
				<div class="col-md-3">
				    <button type="submit" class="btn btn-success" id="btn-pesq"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
			</div>
                        
                        
		</div>
	</div>
    </div>
</div>

 <!-- Carrega conteúdo por ajax -->
        <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" id="b"></div>
        </div>



 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
							var dataKnob       = $("#data-knob").val();
							var dataRangeFrom  = $("#range-from").val();
							var dataRangeTo    = $("#range-to").val();
							var om   	   = $("#om").val();
							
							if(dataKnob === "0"){
								displayNotify("Selecione um intervalo maior que zero!", "error");
								return;
							}
							
                                                        if(om === null){
								displayNotify("Selecione pelo menos uma OM!", "error");
								return;
							}
														
							$.ajax({
								  method: "POST",
								  url: 'sexo/consultarDados',
								  data: {intervalo:dataKnob, from:dataRangeFrom, to:dataRangeTo, om:om},
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
								  max: 50,
								  from: 0,
								  to: 10,
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
								
							
							
							$("#range").ionRangeSlider({
								  hide_min_max: true,
								  keyboard: true,
								  min: 0,
								  max: 100,
								  from: 0,
								  to: 90,
								  type: 'integer',
								  step: 10,
								  prefix: "idade: ",
								  grid: true,
								  onStart: updateInputs,
							      onChange: updateInputs,
							      onFinish: updateInputs
								});
							
						 		
								function updateInputs (data) {
								   $("#range-from").val(data.from);
								   $("#range-to").val(data.to);
								}
							
						}
						
						
						/* KNOB */

						function init_knob() {

							if (typeof ($.fn.knob) === 'undefined') {
								return;
							}
							console.log('init_knob');

							$(".knob")
									.knob(
											{
												change : function(value) {
													//console.log("change : " + value);
												},
												release : function(value) {
													//console.log(this.$.attr('value'));
													console.log("release : "
															+ value);
												},
												cancel : function() {
													console.log("cancel : ",
															this);
												},
												/*format : function (value) {
												 return value + '%';
												 },*/
												draw : function() {

													// "tron" case
													if (this.$.data('skin') == 'tron') {

														this.cursorExt = 0.3;

														var a = this
																.arc(this.cv) // Arc
														, pa // Previous arc
														, r = 1;

														this.g.lineWidth = this.lineWidth;

														if (this.o.displayPrevious) {
															pa = this
																	.arc(this.v);
															this.g.beginPath();
															this.g.strokeStyle = this.pColor;
															this.g
																	.arc(
																			this.xy,
																			this.xy,
																			this.radius
																					- this.lineWidth,
																			pa.s,
																			pa.e,
																			pa.d);
															this.g.stroke();
														}

														this.g.beginPath();
														this.g.strokeStyle = r ? this.o.fgColor
																: this.fgColor;
														this.g
																.arc(
																		this.xy,
																		this.xy,
																		this.radius
																				- this.lineWidth,
																		a.s,
																		a.e,
																		a.d);
														this.g.stroke();

														this.g.lineWidth = 2;
														this.g.beginPath();
														this.g.strokeStyle = this.o.fgColor;
														this.g
																.arc(
																		this.xy,
																		this.xy,
																		this.radius
																				- this.lineWidth
																				+ 1
																				+ this.lineWidth
																				* 2
																				/ 3,
																		0,
																		2 * Math.PI,
																		false);
														this.g.stroke();

														return false;
													}
												}

											});

							// Example of infinite knob, iPod click wheel
							var v, up = 0, down = 0, i = 0, $idir = $("div.idir"), $ival = $("div.ival"), incr = function() {
								i++;
								$idir.show().html("+").fadeOut();
								$ival.html(i);
							}, decr = function() {
								i--;
								$idir.show().html("-").fadeOut();
								$ival.html(i);
							};
							$("input.infinite").knob({
								min : 0,
								max : 20,
								stopper : false,
								change : function() {
									if (v > this.cv) {
										if (up) {
											decr();
											up = 0;
										} else {
											up = 1;
											down = 0;
										}
									} else {
										if (v < this.cv) {
											if (down) {
												incr();
												down = 0;
											} else {
												down = 1;
												up = 0;
											}
										}
									}
									v = this.cv;
								}
							});
						};
						
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
	
	 $('#om').multiselect({
	    	
	    	enableCaseInsensitiveFiltering: true, 
	        enableFiltering: true,
	        includeSelectAllOption: true,
                 selectAllJustVisible: false,
	        maxHeight: 150,
	        buttonWidth: '150px'
	    });
	
	
});
</script>

<?php }
}
