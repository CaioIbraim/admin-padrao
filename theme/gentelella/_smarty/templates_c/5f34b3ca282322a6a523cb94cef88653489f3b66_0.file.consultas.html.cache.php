<?php
/* Smarty version 3.1.30, created on 2017-08-22 08:52:59
  from "C:\xampp\htdocs\produtividade\views\basico\relatorios\consultas\consultas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599c1b1b50db27_66505618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f34b3ca282322a6a523cb94cef88653489f3b66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\relatorios\\consultas\\consultas.html',
      1 => 1503401125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599c1b1b50db27_66505618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '330638646599c1b1b493d25_52644833';
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
		
			



<form id="frmCaio">

<div class='row'>
	<div class="col-md-2">
		<input type="text" class="form-control" id="dt-ini" name="dt-ini" placeholder="Data Inicial"/>
	</div>
	
	<div class="col-md-2">
		<input type="text" class="form-control" id="dt-fim" name="dt-fim" placeholder="Data Final"/>
	</div>
	
	
	
	<div class="col-md-2">
		<select id="idOm" class="form-control">
			<option>DSM</option>	
			<option>HNMD</option>
		</select>
	</div>
	
	
	
	<div class="col-md-3">
		<select id="tipo" class="form-control">
			<option value="0">Autorizadas</option>	
			<option value="1">Não Autorizadas</option>
		</select>
	</div>
	
	<div class="col-md-2 pull-right">
		<a  class="btn btn-default" id="btn-pesq-aut"><i class="fa fa-search"></i></a>
	</div>
</div>


</form>


<hr/>


<div class="row" >
	<div class="col-md-12 col-sm-12 col-xs-12" id="b">
	      
	</div>
</div>







<?php echo '<script'; ?>
>
$('document').ready(function(){
	$('#btn-pesq-aut').click(function(){
		
		
		
		var ini  = $("#dt-ini").val();
		var fim  = $("#dt-fim").val();
		var tipo = $("#tipo").val();
		var idOm = $("#idOm").val();
		var url  = "consulta/consultarGuias";
		
		//alert('xxxxxx');
		
		
		$.post( url, '{ "ini": '+ini+', "fim": '+fim+', "tipo" : '+tipo+', "idOm": '+idOm+' }' )
		.done(function( data ) {
		    $('#b').html(data);
		    
		    
		  });
	});
});
<?php echo '</script'; ?>
>

<?php }
}
