<?php
/* Smarty version 3.1.30, created on 2017-08-21 13:59:21
  from "C:\xampp\htdocs\produtividade\views\basico\relatorios\guias-autorizadas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599b11692d3410_46917557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b687bd56b64dba712d661268d623c7098fa9795' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\relatorios\\guias-autorizadas.html',
      1 => 1503332443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599b11692d3410_46917557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1564894017599b1169119d35_15460520';
?>
<div class="x_panel">
	        <div class="x_title">
	          <h2>Guias autorizadas por pessoa</h2>
			<div class="clearfix"></div>
	        </div>
	        <div class="x_content">
	          <table class="table">
	            <thead>
	              <tr>
	                <th>Nome</th>
	                <th>Quantidade</th>
	              </tr>
	            </thead>
	            <tbody>
	          	<?php
$__section_x_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dadosAutorizados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total != 0) {
for ($__section_x_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_0_iteration <= $__section_x_0_total; $__section_x_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
				  <tr>
	                <td><?php echo $_smarty_tpl->tpl_vars['dadosAutorizados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nm_pessoa'];?>
</td>
	                <td><?php echo $_smarty_tpl->tpl_vars['dadosAutorizados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['quantidade'];?>
</td>
	              </tr>
				<?php
}
}
if ($__section_x_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_0_saved;
}
?>
	            </tbody>
	          </table>
	        </div>
	      </div><?php }
}
