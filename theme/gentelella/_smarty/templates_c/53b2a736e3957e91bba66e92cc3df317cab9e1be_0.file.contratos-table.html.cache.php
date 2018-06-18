<?php
/* Smarty version 3.1.30, created on 2017-10-23 09:28:19
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\contratos\contratos-table.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59edd253cc78d8_88778988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53b2a736e3957e91bba66e92cc3df317cab9e1be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\contratos\\contratos-table.html',
      1 => 1505996819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59edd253cc78d8_88778988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '173261376959edd253a894d2_00974180';
?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

<div class="x_panel">
	        <div class="x_title">
	            <span style="float:right; padding:2px"><a href="#" class="export"><i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>
		    <div class="clearfix"></div>
	        </div>
	        <div class="x_content">
	           <table class="table">
	            <thead>
                        <tr>
                             <th colspan="2"> <h2>Contratos</h2></th>
                        </tr>
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
	    </div>
      <?php }
}
