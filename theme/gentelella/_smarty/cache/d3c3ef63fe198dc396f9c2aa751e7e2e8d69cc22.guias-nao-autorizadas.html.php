<?php
/* Smarty version 3.1.30, created on 2017-11-01 10:47:52
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\guias\guias-nao-autorizadas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f9c2789ef0a0_73342761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '864272450106736f298647dcd99aec4f7304001f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\guias\\guias-nao-autorizadas.html',
      1 => 1507731565,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59f9c2789ef0a0_73342761 (Smarty_Internal_Template $_smarty_tpl) {
?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 


<div class="col-md-6 col-sm-6 col-xs-12">
	<div class="alert alert-warning" role="alert">Nenhuma informação encontrada para guias não autorizadas</div>
</div>
	      

<!-- Pie Graph 

<div class="col-md-6 col-sm-6 col-xs-12">
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
							 options: {
								 legend: {
										
									 labels: [  ]
							            
							     }
							 }
						});

					}

				});
</script>
 


--> 
<?php }
}
