<?php
/* Smarty version 3.1.30, created on 2017-11-09 11:57:03
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\demografico\distrito.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a045eaf9e4bd1_16604155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6b07afed5c3cda3c0179194bd03141609aca5dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\demografico\\distrito.html',
      1 => 1507569581,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5a045eaf9e4bd1_16604155 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://10.4.225.62/estatistica_ssm/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Demográfico</li>
		  		  <li class="active">Busca por Distrito</li>
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
            <!-- form input range -->
		
		<div class="col-md-12 col-sm-6 col-xs-12">
		
		<div class="x_panel">
		      <div class="x_title">
		       
		         <span style="float:right; padding:2px"><a href="#" class="export">Exportar Tabela <i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>
		<div class="clearfix"></div>
		      </div>
		      <div class="x_content">
		        <table class="table" id="tb">
		          <thead>
		          <tr>
			           	  <th colspan="5"><h2>Relação de usuários por distrito.</h2></th>
			            </tr>
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
		              <td> Com. 1º DN </td>
		              <td>101147</td>
		              <td>114151</td>
		              <td>11862</td>
		              <td>227160</td>
		            </tr>
		          			 		<tr>
		              <td> Com. 2º DN </td>
		              <td>6775</td>
		              <td>7162</td>
		              <td>721</td>
		              <td>14658</td>
		            </tr>
		          			 		<tr>
		              <td> Com. 3º DN </td>
		              <td>15465</td>
		              <td>16949</td>
		              <td>1315</td>
		              <td>33729</td>
		            </tr>
		          			 		<tr>
		              <td> Com. 4º DN </td>
		              <td>6984</td>
		              <td>8104</td>
		              <td>823</td>
		              <td>15911</td>
		            </tr>
		          			 		<tr>
		              <td> Com. 5º DN </td>
		              <td>5724</td>
		              <td>6033</td>
		              <td>443</td>
		              <td>12200</td>
		            </tr>
		          			 		<tr>
		              <td> Com. 6º DN </td>
		              <td>3622</td>
		              <td>5498</td>
		              <td>574</td>
		              <td>9694</td>
		            </tr>
		          			 		<tr>
		              <td> Com. 7º DN </td>
		              <td>6037</td>
		              <td>8488</td>
		              <td>679</td>
		              <td>15204</td>
		            </tr>
		          			 		<tr>
		              <td> Com. 8º DN </td>
		              <td>4479</td>
		              <td>4149</td>
		              <td>267</td>
		              <td>8895</td>
		            </tr>
		          			 		<tr>
		              <td> Com. 9º DN </td>
		              <td>3545</td>
		              <td>5033</td>
		              <td>395</td>
		              <td>8973</td>
		            </tr>
		          		            
		            
		         </tbody>
		        </table>
		      </div>
		    </div>
		</div>      
	      
	      

	<?php }
}
