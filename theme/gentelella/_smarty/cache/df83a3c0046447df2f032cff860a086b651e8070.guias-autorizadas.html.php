<?php
/* Smarty version 3.1.30, created on 2017-11-01 10:47:52
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\guias\guias-autorizadas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f9c2789383a0_55313000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2010781ddc5f92dd4570d1cc91738efc192f5d50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\guias\\guias-autorizadas.html',
      1 => 1507731570,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59f9c2789383a0_55313000 (Smarty_Internal_Template $_smarty_tpl) {
?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

<div class="col-md-6 col-sm-6 col-xs-12">
	<div class="alert alert-warning" role="alert">Nenhuma informação encontrada para guias autorizadas</div>
</div>
	
<!-- Pie Graph 

<div class="col-md-5 col-sm-6 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2>
				Representação gráfica
			</h2>
			 
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<iframe
				style="width: 100%; display: block; border: 0px none; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"
				class="chartjs-hidden-iframe"></iframe>
			<canvas height="188" width="377" style="width: 377px; height: 188px;"
				id="pieChart"></canvas>
		</div>
	</div>
</div>




<script>
$('document')
		.ready(
				function() {
					
					
					
					
					// Pie chart
					if ($('#pieChart').length) {

						var ctx = document.getElementById("pieChart");
						var data = {
							datasets : [ {
								data : [  ],
								backgroundColor : [ "#455C73", "#9B59B6",
										"#BDC3C7", "#26B99A", "#3498DB" ],
								label : 'My dataset' // for legend
							} ],
							labels : [  ]
						};

						var pieChart = new Chart(ctx, {
							data : data,
							type : 'pie',
							otpions : {
								legend : false
							}
						});

					}

				});
</script>
 

--> <?php }
}
