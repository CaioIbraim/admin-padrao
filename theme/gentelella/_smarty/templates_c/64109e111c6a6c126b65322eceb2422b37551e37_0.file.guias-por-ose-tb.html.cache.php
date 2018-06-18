<?php
/* Smarty version 3.1.30, created on 2017-09-19 15:52:58
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\guias\guias-por-ose-tb.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c1678ad552a8_33538062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64109e111c6a6c126b65322eceb2422b37551e37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\guias\\guias-por-ose-tb.html',
      1 => 1505395132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c1678ad552a8_33538062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '43753939959c1678abaa9a1_71759763';
?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	
	
	<?php if ($_smarty_tpl->tpl_vars['consulta']->value[0][0] == '') {?>
	<div class="col-md-12 col-sm-6 col-xs-12">
		<div class="alert alert-warning" role="alert">Nenhuma informação
			encontrada para o ano <?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
</div>
	</div>
	<?php } else { ?>

	<div class="col-md-12 col-sm-6 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				
				<span style="float: right; padding: 2px"><a href="#"
					class="export"><i class="fa fa-file-excel-o fa-4"
						aria-hidden="true"></i></a> </span>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table class="table" id="tb">
					<thead>
						<tr>
			           	  <th colspan="12"><h2>Guias geradas por OSE para o ano de <?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
</h2></th>
			            </tr>
						<tr>
							<th>Nome</th>
							 
							<th>Clinica</th>
							
							<th>Janeiro</th>
							<th>Fevereiro</th>
							<th>Março</th>
							<th>Abril</th>
							<th>Maio</th>
							<th>Junho</th>
							<th>Julho</th>
							<th>Agosto</th>
							<th>Setembro</th>
							<th>Outubro</th>
							<th>Nobembro</th>
							<th>Dezembro</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
$__section_x_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['consulta']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total != 0) {
for ($__section_x_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_0_iteration <= $__section_x_0_total; $__section_x_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nome'];?>
</td>
							  
							<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cbos'];?>
</td>
							
							<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['jan'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fev'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['mar'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['abr'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['mai'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['jun'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['jul'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['ago'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['set'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['out'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nov'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['dez'];?>
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
		</div>
	</div>
	<?php }
}
}
