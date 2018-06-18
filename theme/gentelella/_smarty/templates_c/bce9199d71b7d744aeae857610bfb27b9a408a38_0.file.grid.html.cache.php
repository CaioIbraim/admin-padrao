<?php
/* Smarty version 3.1.30, created on 2017-07-31 13:52:25
  from "D:\www\aux_regulacao\views\guia\pesquisa\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597f60493e6b95_78167100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bce9199d71b7d744aeae857610bfb27b9a408a38' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\guia\\pesquisa\\grid.html',
      1 => 1498159940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597f60493e6b95_78167100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '30656597f60490ce880_63780398';
?>
<!-- script e css da tela -->
<table id="tbGrid" class="table table-striped">
  	<thead>
    	<tr>
            <th>Número</th>
            <th>Nome</th>
            <th>OM</th>
            <th>OSE</th>
            <th>Tipo</th>
            <th>Status</th>
            <th>Emissão</th>
            <th>&nbsp;</th>
    	</tr>
	</thead>
</table>


<?php echo '<script'; ?>
>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,null,null,null,null,{ "bSortable": true, "bSearchable": false },{ "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/gridpesquisa",
            "type": "POST",
            "data": <?php echo $_smarty_tpl->tpl_vars['jsonGridAux']->value;?>

        }
    	
    	,"drawCallback": function(settings, json) {
        	$('[data-toggle="tooltip"]').tooltip();
        }
        	
    } );
    
});
<?php echo '</script'; ?>
>

<?php }
}
