<?php
/* Smarty version 3.1.30, created on 2017-08-02 10:49:07
  from "D:\www\aux_regulacao\views\ose\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5981d85307f404_79983524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '736ac08e74ef874531de8b4fb96a01f716aecc1d' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\ose\\grid.html',
      1 => 1498062113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5981d85307f404_79983524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '118125981d852c71cc3_60487886';
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
            <th>Documento</th>
        	<th width="50" class="text-center"><a href="#" data-toggle="tooltip" data-placement="top" title="Incluir um novo registro."  class="blue" onclick="carregarTelaAjax('<?php echo $_smarty_tpl->tpl_vars['urlPaginaSimples']->value;?>
/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<?php echo '<script'; ?>
>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,{ "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/dadosgrid",
            "type": "POST"
        },
        
        "drawCallback": function(settings, json) {
        	$('[data-toggle="tooltip"]').tooltip();
        }
        	
    } );
 
    
});



<?php echo '</script'; ?>
>

<?php }
}
