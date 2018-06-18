<?php
/* Smarty version 3.1.30, created on 2017-09-04 10:08:49
  from "C:\xampp\htdocs\produtividade\views\basico\relatorios\demografico\distrito.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ad5061a33f79_60541223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65fccfe8d13b3a9079a9335c68a982f53ed9dad3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\relatorios\\demografico\\distrito.html',
      1 => 1503929348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ad5061a33f79_60541223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '136466521559ad50619f7076_49220910';
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

			

			<!-- form input range -->
			
		
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
<?php }
}
