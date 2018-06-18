<?php
/* Smarty version 3.1.30, created on 2017-08-21 14:10:29
  from "C:\xampp\htdocs\produtividade\views\basico\relatorios\guias.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599b14056f2d02_95504167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65640aec6005f551bf4f781353632fa06672a661' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\relatorios\\guias.html',
      1 => 1503335071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599b14056f2d02_95504167 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '76547789599b14056a4af5_23830906';
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
		
			



<form>

<div class='row'>
	<div class="col-md-3">
		<input type="text" class="form-control" id="dt-ini" name="dt-ini" placeholder="Data Inicial"/>
	</div>
	
	<div class="col-md-3">
		<input type="text" class="form-control" id="dt-fim" name="dt-fim" placeholder="Data Final"/>
	</div>
	
	<div class="col-md-3">
		<select id="tipo" class="form-control">
			<option value="0">Autorizadas</option>	
			<option value="1">Não Autorizadas</option>
			
		</select>
	</div>
	
	<div class="col-md-3 pull-right">
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
		var ini = $("#dt-ini").val();
		var fim = $("#dt-fim").val();
		var tipo = $("#tipo").val();
		var url = "";
		
		(tipo === '0')?url = "guias/restGuiasAutorizadas" : url =  "guias/restGuiasNaoAutorizadas"
		
		$.post( url, { ini: ini, fim: fim } )
		.done(function( data ) {
		    $('#b').html(data);
		  });
	});
});
<?php echo '</script'; ?>
>

<?php }
}
