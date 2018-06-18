<?php
/* Smarty version 3.1.30, created on 2017-09-06 10:15:56
  from "C:\xampp\htdocs\produtividade\views\basico\relatorios\contratos\contratos-table.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aff50c3ee992_62250356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab5fbcdf485d6af9d4467490a7ce1734df52840d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\relatorios\\contratos\\contratos-table.html',
      1 => 1503407751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59aff50c3ee992_62250356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '99085629859aff50c29ea41_63040645';
?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
<div class="x_panel">
	        <div class="x_title">
	    	<div class="clearfix"></div>
	        </div>
	        <div class="x_content">
	          <table class="table">
	            <thead>
	              <tr>
	                <th>Titulo</th>
	                <th>Quantidade</th>
	              </tr>
	            </thead>
	            <tbody>
	    
				  <tr>
	                <td>Total de contratos em uso - com emissão de guias</td>
	                <td><?php echo $_smarty_tpl->tpl_vars['ContratosEmUso']->value[0]['count'];?>
</td>
	              </tr>
				  <tr>
	                <td>Total de contratos em uso com data de vigência expirarda</td>
	                <td><?php echo $_smarty_tpl->tpl_vars['ContratosEmUsoVigencia']->value[0]['count'];?>
</td>
	              </tr>
				  <tr>
	                <td>Total de contratos em uso com data de vigência a expirar nos próximos três meses</td>
	                <td><?php echo $_smarty_tpl->tpl_vars['Expirar']->value[0]['count'];?>
</td>
	              </tr>	
	            </tbody>
	          </table>
	        </div>
	      </div><?php }
}
