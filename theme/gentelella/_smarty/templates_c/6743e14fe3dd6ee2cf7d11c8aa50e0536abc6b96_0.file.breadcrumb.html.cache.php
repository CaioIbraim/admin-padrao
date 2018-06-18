<?php
/* Smarty version 3.1.30, created on 2017-11-09 11:57:15
  from "C:\xampp\htdocs\estatistica_ssm\views\_includes\breadcrumb.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a045ebb8ddc87_54940201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6743e14fe3dd6ee2cf7d11c8aa50e0536abc6b96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\_includes\\breadcrumb.html',
      1 => 1505996819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a045ebb8ddc87_54940201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16284247285a045ebb5055a8_72411801';
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
