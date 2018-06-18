<?php
/* Smarty version 3.1.30, created on 2017-08-22 09:55:22
  from "C:\xampp\htdocs\produtividade\views\basico\relatorios\contratos\consultas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599c29bad2f860_58852367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aca4f039da25807ea289a9ef72181972b9b74c77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\relatorios\\contratos\\consultas.html',
      1 => 1503406509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599c29bad2f860_58852367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '160344043599c29bacb5a62_80846725';
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
	
	<div class="col-md-8">
		<select id="tipo" class="form-control">
			<option value="1">Total de contratos em uso - com emissão de guias</option>	
			<option value="2">Total de contratos em uso com data de vigência expirada</option>
			<option value="3">Total de contratos em uso com data de vigência a expirar nos próximos três meses</option>
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
		<?php echo $_smarty_tpl->tpl_vars['ContratosEmUso']->value[0]['count'];?>
	
	</div>
</div>



<?php echo '<script'; ?>
>
$('document').ready(function(){
	$('#btn-pesq-aut').click(function(){
		var tipo  = $("#tipo").val();
		var url = "";
		//Verificar qual o tipo de consulta e criar rota
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
