<?php
/* Smarty version 3.1.30, created on 2017-09-06 09:56:26
  from "C:\xampp\htdocs\produtividade\views\basico\relatorios\demografico\sexo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aff07a94dfd6_44520402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4117c66818bc772acd06a571b15504b1c75c77bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\relatorios\\demografico\\sexo.html',
      1 => 1503926009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59aff07a94dfd6_44520402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '109762254459aff07a8ffdb5_32116741';
echo $_smarty_tpl->tpl_vars['htmlBREADCRUMB']->value;?>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- script e css da tela -->
<link
	href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.dataTables/datatables.min.css"
	rel="stylesheet">
<?php echo '<script'; ?>

	src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.dataTables/datatables.min.js"><?php echo '</script'; ?>
>
<!-- script e css da tela -->

<!-- bootstrap-daterangepicker -->
<link
	href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css"
	rel="stylesheet">
<!-- bootstrap-datetimepicker -->
<link
	href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css"
	rel=stylesheet">

<!-- Ion.RangeSlider -->
<link
	href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/normalize-css/normalize.css"
	rel="stylesheet">
<link
	href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/ion.rangeSlider/css/ion.rangeSlider.css"
	rel="stylesheet">
<link
	href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css"
	rel="stylesheet">

 <!-- PNotify -->
 <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
 <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
 <link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">


<div id="msgAjax"><?php echo $_smarty_tpl->tpl_vars['msgErro']->value;?>
</div>

<div class="x_panel">
	<div class="x_title">
		<h2>
			<?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;
if ($_smarty_tpl->tpl_vars['subTituloPagina']->value != '') {?> <small><i
				class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['subTituloPagina']->value;?>
</small><?php }?>
		</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<div class="row">

			<hr />

			<!-- form input range -->

			<div class="col-md-6 col-sm-6 col-xs-12">
				<p>Selecione a amplitude</p>
				<input type="text" id="range" value="" name="range" />
				<input type="hidden" id="range-from" value="" />
				<input type="hidden" id="range-to" value="" />
			</div>

			<!-- form input knob -->
			<div class="col-md-5" id="div-knob">
				<p>Selecione o intervalo entre as idades</p>
				<!-- 
				<input class="knob" id="data-knob" data-width="85"
					data-height="85" data-angleOffset="-125" data-angleArc="250"
					data-fgColor="#34495E" data-step="10" data-rotation="anticlockwise"
					value="10">
				-->	
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
				<div class="col-md-12 col-sm-12 col-xs-12" id="b"></div>
			</div>


		</div>
	</div>

</div>

<!-- scripts -->

<!-- Ion.RangeSlider -->
<?php echo '<script'; ?>

	src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"><?php echo '</script'; ?>
>


<!-- jQuery Knob -->
<?php echo '<script'; ?>

	src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/jquery-knob/dist/jquery.knob.min.js"><?php echo '</script'; ?>
>



<!-- PNotify -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/pnotify/dist/pnotify.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/pnotify/dist/pnotify.buttons.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/pnotify/dist/pnotify.nonblock.js"><?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>
	$('document')
			.ready(
					function() {
						
						
						
						/*CHAMAR OS DADOS*/

						$("#btn-pesq").click(function() {
							var dataKnob      = $("#data-knob").val();
							var dataRangeFrom = $("#range-from").val()
							var dataRangeTo   = $("#range-to").val()
							
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
								  step: 5,
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
});
<?php echo '</script'; ?>
>

<?php }
}
