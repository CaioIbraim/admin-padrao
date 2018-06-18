<?php
/* Smarty version 3.1.30, created on 2017-06-06 12:53:14
  from "D:\www\aux_regulacao\views\usuariossmjustica\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5936cfeaa07dd6_27827477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '556d672cfa38de166ddf205a6cf9ed8f70bfc04f' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\usuariossmjustica\\grid.html',
      1 => 1492623890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5936cfeaa07dd6_27827477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '262385936cfea5befd3_66269511';
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
            <th>NIP TIT</th>
            <th>NIP VINC</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Cadastro</th>
        	<th width="50" class="text-center"><a href="#" title="Incluir um novo registro."  class="blue" onclick="carregarTelaAjax('<?php echo $_smarty_tpl->tpl_vars['urlPaginaSimples']->value;?>
/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<?php echo '<script'; ?>
>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,null,{ "bSortable": true, "bSearchable": false },{ "bSortable": true, "bSearchable": false },{ "bSortable": false, "bSearchable": false } ] ,
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
