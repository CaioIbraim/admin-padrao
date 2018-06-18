<?php
/* Smarty version 3.1.30, created on 2017-11-09 11:57:03
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\demografico\distrito.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a045eaf97f2c5_28997034',
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
  'includes' => 
  array (
  ),
),false)) {
function content_5a045eaf97f2c5_28997034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16436581875a045eaf7ecce0_68114241';
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
		          
		          
		          <?php
$__section_x_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dados']->value["titular"]) ? count($_loop) : max(0, (int) $_loop));
$__section_x_1_total = $__section_x_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_1_total != 0) {
for ($__section_x_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_1_iteration <= $__section_x_1_total; $__section_x_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
			 		<tr>
		              <td><?php if ($_smarty_tpl->tpl_vars['dados']->value["titular"][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]["dist"]) {?> Com. <?php echo $_smarty_tpl->tpl_vars['dados']->value["titular"][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]["dist"];?>
º DN <?php } else { ?>Sem DN<?php }?></td>
		              <td><?php echo $_smarty_tpl->tpl_vars['dados']->value["titular"][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]["count"];?>
</td>
		              <td><?php echo $_smarty_tpl->tpl_vars['dados']->value["dd"][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]["count"];?>
</td>
		              <td><?php echo $_smarty_tpl->tpl_vars['dados']->value["di"][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]["count"];?>
</td>
		              <td><?php echo $_smarty_tpl->tpl_vars['dados']->value["total"][(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]["count"];?>
</td>
		            </tr>
		          <?php
}
}
if ($__section_x_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_1_saved;
}
?>
		            
		            
		         </tbody>
		        </table>
		      </div>
		    </div>
		</div>      
	      
	      

	<?php }
}
