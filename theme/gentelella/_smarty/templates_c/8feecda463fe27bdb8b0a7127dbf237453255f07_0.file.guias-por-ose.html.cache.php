<?php
/* Smarty version 3.1.30, created on 2017-09-19 15:52:35
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\guias\guias-por-ose.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c167737b4611_46697693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8feecda463fe27bdb8b0a7127dbf237453255f07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\guias\\guias-por-ose.html',
      1 => 1505484312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c167737b4611_46697693 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\estatistica_ssm\\classes\\smarty\\plugins\\function.html_options.php';
$_smarty_tpl->compiled->nocache_hash = '111133135959c1677373a815_57215162';
echo $_smarty_tpl->tpl_vars['htmlBREADCRUMB']->value;?>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!-- script e css da tela -->
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.dataTables/datatables.min.js"><?php echo '</script'; ?>
>
<!-- script e css da tela -->
<!-- bootstrap-daterangepicker -->
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<!-- bootstrap-datetimepicker -->
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<!-- bootstrap-select -->



<div class="row">
	<div class="col-md-12">
		<form>
			<div class='row'>
				
				<div class="col-md-3 col-sm-3 col-xs-12">
					<?php echo smarty_function_html_options(array('id'=>$_smarty_tpl->tpl_vars['idAno']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'name'=>'foo','options'=>$_smarty_tpl->tpl_vars['anos']->value,'selected'=>$_smarty_tpl->tpl_vars['anoSelect']->value),$_smarty_tpl);?>

				</div>
				
				<div class="col-md-3">
					<?php echo smarty_function_html_options(array('id'=>$_smarty_tpl->tpl_vars['idOm']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'name'=>'foo','options'=>$_smarty_tpl->tpl_vars['om']->value,'selected'=>$_smarty_tpl->tpl_vars['omSelect']->value),$_smarty_tpl);?>
   
				</div>
				
				
				
				<div class="col-md-3">
					<?php echo smarty_function_html_options(array('data-actions-box'=>$_smarty_tpl->tpl_vars['dataBox']->value,'multiple'=>$_smarty_tpl->tpl_vars['multiple']->value,'id'=>$_smarty_tpl->tpl_vars['idCbos']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'name'=>'foo','options'=>$_smarty_tpl->tpl_vars['cbos']->value,'selected'=>$_smarty_tpl->tpl_vars['cbosSelect']->value),$_smarty_tpl);?>
   
				</div>
				
				
				
				<div class="col-md-3 col-sm-3 col-xs-12 pull-right">
					<a class="btn btn-success" id="btn-pesq-aut"><i class="fa fa-search"></i></a>
				</div>
				
			</div>
		</form>
	</div>
</div>
<hr>

<div class="row">
<div id="b"></div>
</div>

<!-- bootstrap-daterangepicker -->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/moment/min/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$('document').ready(function(){
	
	//$("#b").html();
	$("#btn-pesq-aut").click(function(){
		 $("#b").html('');
		var ano  = $("#ano").val();
		var cbos = $("#cbos").val();
		var om   = $("#om").val();
		
		getData(ano, cbos, om);
	});
	
	function getData(ano, cbos, om){
		
		$.ajax({
			  method: "POST",
			  url: "guias/restConsultaGuiasPorOse",
			  data: {ano : ano, cbos : cbos, om : om},
			  dataType: "html",
			  beforeSend: function(){
	          		$("#b").html(imagemAjax);
	           },
	           success: function(data){
	                //this.append(data);
	                $("#b").html(data);	            
	           }
		});
	}
	
	$('#ano').selectpicker({
	   liveSearch: true,
	   maxOptions: 1,
	   size: 4
	});

	$('#om').selectpicker({
	   liveSearch: true,
	   maxOptions: 1,
	   size: 14
	});

    $('#cbos').multiselect({
    	
    	enableCaseInsensitiveFiltering: true, 
        enableFiltering: true,
        includeSelectAllOption: true,
        maxHeight: 200,
        buttonWidth: '200px'
    });
	
});
<?php echo '</script'; ?>
>
<?php }
}
