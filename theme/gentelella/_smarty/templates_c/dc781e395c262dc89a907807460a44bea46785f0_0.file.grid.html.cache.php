<?php
/* Smarty version 3.1.30, created on 2017-02-02 14:16:55
  from "D:\www\catalogo\views\equipamentos\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58935b77af6ed9_97435491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc781e395c262dc89a907807460a44bea46785f0' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\equipamentos\\grid.html',
      1 => 1486050045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58935b77af6ed9_97435491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1941858935b777264f7_11875703';
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
            <th>Descrição</th>
            <th>Status</th>
        	<th width="50" class="text-center"><a href="#" title="Incluir um novo registro."  class="blue" onclick="carregarTelaAjax('<?php echo $_smarty_tpl->tpl_vars['urlPaginaSimples']->value;?>
/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<?php echo '<script'; ?>
>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null, { "bSortable": false, "bSearchable": false } , { "bSortable": false, "bSearchable": false } ] ,
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
