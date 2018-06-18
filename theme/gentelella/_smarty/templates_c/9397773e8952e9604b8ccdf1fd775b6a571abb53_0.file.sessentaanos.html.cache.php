<?php
/* Smarty version 3.1.30, created on 2017-11-09 11:57:12
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\demografico\sessentaanos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a045eb84f50e4_20452791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9397773e8952e9604b8ccdf1fd775b6a571abb53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\demografico\\sessentaanos.html',
      1 => 1507569644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a045eb84f50e4_20452791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16739855685a045eb84127a5_91134891';
echo $_smarty_tpl->tpl_vars['htmlBREADCRUMB']->value;?>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <style>
            table{
                height:  400px;
            }
        </style>
	<?php if ($_smarty_tpl->tpl_vars['consulta']->value == '') {?>
	<div class="col-md-12 col-sm-6 col-xs-12">
		<div class="alert alert-warning" role="alert">Nenhuma informação
			encontrada</div>
	</div>
	<?php } else { ?>
	<div class="col-md-12 col-sm-6 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
			
				<span style="float: right; padding: 2px"><a href="#"
					class="export"> Exportar tabela  <i class="fa fa-file-excel-o fa-4"
						aria-hidden="true"></i></a> </span>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<!-- titulares -->
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
				           	  <th colspan="12"> <h4> QUANTITATIVO DE USUÁRIOS DO SSM  ACIMA DE 60 ANOS NA ÁREA DE ABRANGÊNCIA DO HNMD </h4></th>
				            </tr>
							<tr>
                                                                <th>Titulo</th>
								<th>Titulares</th>
								<th>Dependentes diretos</th>
                                                                <th>Dependentes indiretos</th>
                                                                <th>Subtotal</th>
							</tr>
						</thead>
						<tbody>
							<?php
$__section_x_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['consulta']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_1_total = $__section_x_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_1_total != 0) {
for ($__section_x_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_1_iteration <= $__section_x_1_total; $__section_x_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
							<tr>
								
                                                                <td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['classificacao'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['titular'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['direto'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['indireto'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['consulta']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['subtotal'];?>
</td>
							</tr>
							<?php
}
}
if ($__section_x_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_1_saved;
}
?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php }
}
}
