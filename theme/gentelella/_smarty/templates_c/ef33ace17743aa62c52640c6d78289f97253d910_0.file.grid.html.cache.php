<?php
/* Smarty version 3.1.30, created on 2017-08-02 10:05:30
  from "D:\www\aux_regulacao\views\usuarios\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5981ce1a129884_78428510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef33ace17743aa62c52640c6d78289f97253d910' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\usuarios\\grid.html',
      1 => 1498158670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5981ce1a129884_78428510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '268585981ce19d90886_38294164';
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
            <th>OM</th>
            <th>Login</th>
            <th>Nome</th>
            <th>Bloqueado</th>
            <th>Perfil</th>
        	<th width="50" class="text-center"><a href="#" data-toggle="tooltip" data-placement="top" title="Incluir&nbsp;um&nbsp;novo&nbsp;usuário."  class="blue" onclick="carregarTelaAjax('<?php echo $_smarty_tpl->tpl_vars['urlPaginaSimples']->value;?>
/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<?php echo '<script'; ?>
>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,null,null,{ "bSortable": false, "bSearchable": false },{ "bSortable": false, "bSearchable": false } ] ,
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
    	
    	,"drawCallback": function(settings, json) {
        	$('[data-toggle="tooltip"]').tooltip();
        }
        	
    } );
 
    
});
<?php echo '</script'; ?>
>

<?php }
}
