<?php
/* Smarty version 3.1.30, created on 2017-09-06 10:16:44
  from "C:\xampp\htdocs\produtividade\views\basico\relatorios\guias\guias.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aff53cb50568_04442464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3053a84b857e802d3df0cccd75ced8bb2d97b538' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\relatorios\\guias\\guias.html',
      1 => 1503947805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59aff53cb50568_04442464 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\produtividade\\classes\\smarty\\plugins\\function.html_options.php';
$_smarty_tpl->compiled->nocache_hash = '61316939559aff53cac3b48_08040983';
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
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_css/bootstrap-select/bootstrap-select.css" rel="stylesheet">





<div id="msgAjax"><?php echo $_smarty_tpl->tpl_vars['msgErro']->value;?>
</div>


<div class="x_panel">
	<div class="x_title">
		<h2><?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;
if ($_smarty_tpl->tpl_vars['subTituloPagina']->value != '') {?> <small><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['subTituloPagina']->value;?>
</small><?php }?></h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
<div class="row">

<form>

<!-- 
<div class="well" style="overflow: auto">
   <div class="col-md-4">
     <div id="ssssssssss" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
       <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
       <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
     </div>
   </div>
</div>
 -->
 

<div class='row'>
	<div class="col-md-3">
		<?php echo smarty_function_html_options(array('id'=>$_smarty_tpl->tpl_vars['idMes']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'name'=>'foo','options'=>$_smarty_tpl->tpl_vars['meses']->value,'selected'=>$_smarty_tpl->tpl_vars['mesSelect']->value),$_smarty_tpl);?>
   
	</div>
	
	<div class="col-md-3">
		<?php echo smarty_function_html_options(array('id'=>$_smarty_tpl->tpl_vars['idAno']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'name'=>'foo','options'=>$_smarty_tpl->tpl_vars['anos']->value,'selected'=>$_smarty_tpl->tpl_vars['anoSelect']->value),$_smarty_tpl);?>
  
	</div>
	
	
	
	<!-- 
	<div class="col-md-3">
		<select id="tipo" class="form-control">
			<option value="0">Autorizadas</option>	
			<option value="1">Não Autorizadas</option>
			
		</select>
	</div>
	 -->
	
	
	<div class="col-md-3">
		<a  class="btn btn-success" id="btn-pesq-aut"><i class="fa fa-search"></i></a>
	</div>
	
	
</div>

</form>

<hr/>

<div class="row" >
	<div class="col-md-12 col-sm-12 col-xs-12" id="b">
	      
	</div>
</div>

<!-- bootstrap-daterangepicker -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_js/bootstrap-select/bootstrap-select.min.js"><?php echo '</script'; ?>
>
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
	
	//Pesquisa os dados 
	$('#btn-pesq-aut').click(function(){
		var mes = $("#mes").val();
		var ano = $("#ano").val();
		getData(mes, ano);
	});
	
	function getData(ini, fim){
		
		$.ajax({
			  method: "POST",
			  url: "guias/restGuias",
			  data: { ini: ini, fim: fim },
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
	
	$('#mes').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
	
	$('#ano').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
	
	
	
	});
<?php echo '</script'; ?>
>

<?php }
}
