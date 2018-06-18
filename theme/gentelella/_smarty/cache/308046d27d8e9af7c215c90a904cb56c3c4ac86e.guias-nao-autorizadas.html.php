<?php
/* Smarty version 3.1.30, created on 2017-09-06 10:16:47
  from "C:\xampp\htdocs\produtividade\views\basico\relatorios\guias\guias-nao-autorizadas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aff53f5bf242_13162954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72762d69aa7a6958d7ce402cb8a41b13430fdde2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\relatorios\\guias\\guias-nao-autorizadas.html',
      1 => 1504198948,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59aff53f5bf242_13162954 (Smarty_Internal_Template $_smarty_tpl) {
?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 






<div class="col-md-6 col-sm-6 col-xs-12">
<div class="x_panel">
      <div class="x_title">
        <h2>Guias não autorizadas por pessoa</h2>
         <span style="float:right; padding:2px"><a href="#" class="export"><i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>
	<div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table class="table" id="tb">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Quantidade</th>
            </tr>
          </thead>
          <tbody>
          	 		<tr>
              <td>GUILHERME GUERTZENSTEIN SCHWARTZ</td>
              <td>77</td>
            </tr>
		  	 		<tr>
              <td>ANA KARINA VIEIRA ERMIDORF</td>
              <td>63</td>
            </tr>
		  	 		<tr>
              <td>JOICE ALVES CABRAL</td>
              <td>60</td>
            </tr>
		  	 		<tr>
              <td>TALITA DOS SANTOS RIBEIRO</td>
              <td>39</td>
            </tr>
		  	 		<tr>
              <td>ROBERTO FURMAM</td>
              <td>9</td>
            </tr>
		  	 		<tr>
              <td>SANDRA POYART DE MENDONCA ROSSETTO</td>
              <td>6</td>
            </tr>
		  		  <tr>
            <td>TOTAL</td>
            <td>254</td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
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
								data : [ 77, 63, 60, 39, 9, 6 ],
								backgroundColor : [ "#455C73", "#9B59B6",
										"#BDC3C7", "#26B99A", "#3498DB" ],
								label : 'My dataset' // for legend
							} ],
							labels : [ "GUILHERME GUERTZENSTEIN SCHWARTZ","ANA KARINA VIEIRA ERMIDORF","JOICE ALVES CABRAL","TALITA DOS SANTOS RIBEIRO","ROBERTO FURMAM","SANDRA POYART DE MENDONCA ROSSETTO" ]
						};

						
						
						var pieChart = new Chart(ctx, {
							data : data,
							type : 'pie',
							 options: {
								 legend: {
										
									 labels: [ "GUILHERME GUERTZENSTEIN SCHWARTZ","ANA KARINA VIEIRA ERMIDORF","JOICE ALVES CABRAL","TALITA DOS SANTOS RIBEIRO","ROBERTO FURMAM","SANDRA POYART DE MENDONCA ROSSETTO" ]
							            
							     }
							 }
						});

					}

				});
</script>
 


--> 
<?php }
}
