<?php
/* Smarty version 3.1.30, created on 2017-08-18 15:57:36
  from "C:\xampp\htdocs\estatistica_regulacao\views\_includes\breadcrumb.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599738a093c4f1_84216558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8444eccd5a0147f3789ca96ee3d18e816b6012ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_regulacao\\views\\_includes\\breadcrumb.html',
      1 => 1502473352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599738a093c4f1_84216558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '433985719599738a069dfe6_28111634';
?>
<div class="page-title">
	<?php if (count($_smarty_tpl->tpl_vars['SIS_BREADCRUMB_ARRAY']->value) > 0) {?>
   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
"><i class="fa fa-home"></i> Principal</a></li>
		  <?php
$__section_x_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['SIS_BREADCRUMB_ARRAY']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total != 0) {
for ($__section_x_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_0_iteration <= $__section_x_0_total; $__section_x_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
		  <li class="active"><?php echo $_smarty_tpl->tpl_vars['SIS_BREADCRUMB_ARRAY']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['texto'];?>
</li>
		  <?php
}
}
if ($__section_x_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_0_saved;
}
?>
		</ol>
      		
    	</div>
    	<?php }?>
	</div>
<div class="clearfix"></div><?php }
}
