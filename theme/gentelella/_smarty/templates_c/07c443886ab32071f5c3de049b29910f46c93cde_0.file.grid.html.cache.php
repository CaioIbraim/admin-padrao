<?php
/* Smarty version 3.1.30, created on 2017-08-09 10:38:28
  from "D:\www\sigsaude\views\usuarios\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598b1054db54d0_47815162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07c443886ab32071f5c3de049b29910f46c93cde' => 
    array (
      0 => 'D:\\www\\sigsaude\\views\\usuarios\\grid.html',
      1 => 1502199565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598b1054db54d0_47815162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '29114598b1054bcdcd8_07229418';
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

<div class="x_panel">
	<div class="x_title">
		<h2><?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;
if ($_smarty_tpl->tpl_vars['subTituloPagina']->value != '') {?> <small><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['subTituloPagina']->value;?>
</small><?php }?></h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
	
		<table id="tbGrid" class="table table-striped">
		  	<thead>
		       	<tr>
		            <th>OM</th>
		            <th>Login</th>
		            <th>Nome</th>
		            <th>Bloqueado</th>
		            <th>Perfil</th>
		        	
		        	<th width="132" class="text-center"><a class="btn btn-primary btn-xs" href="#" onclick="carregarTelaAjax('<?php echo $_smarty_tpl->tpl_vars['urlPaginaSimples']->value;?>
/incluir','');"><i class="fa fa-plus"></i> Incluir </a></th>
		    	</tr>
			</thead>
		</table>
	
	</div>
</div>



<?php echo '<script'; ?>
>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,null,null,{ "bSortable": false, "bSearchable": false },{ "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
	    
	    "autoWidth": false,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/dadosgrid",
            "type": "POST"
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
