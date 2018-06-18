<?php
/* Smarty version 3.1.30, created on 2017-02-17 10:15:55
  from "D:\www\catalogo\views\pessoas\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a6e97b67ca47_28740626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ac2de50773f18c57ca11ec53c79364f69fb704' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\pessoas\\grid.html',
      1 => 1485260832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a6e97b67ca47_28740626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '109958a6e97b288dd9_49664833';
?>
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
<div class="page-header sigsaude"><h2><?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;
if ($_smarty_tpl->tpl_vars['subTituloPagina']->value != '') {?> <small><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['subTituloPagina']->value;?>
</small><?php }?></h2></div>

<table id="tbGrid" class="table table-striped">
  	<thead>
       	<tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Sexo</th>
        	<th width="50" class="text-center"><a href="#" title="Incluir um novo registro."  class="blue" onclick="carregarTelaAjax('<?php echo $_smarty_tpl->tpl_vars['urlPaginaSimples']->value;?>
/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<?php echo '<script'; ?>
>	
$(document).ready(function() {

	dataTablePages = [[10, 25], [10, 25]];
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null, { "bSortable": false, "bSearchable": false } , { "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/dadosgrid",
            "type": "POST"
        } 
        	
    } );
 
    
});
<?php echo '</script'; ?>
>

<?php }
}
