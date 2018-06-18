<?php
/* Smarty version 3.1.30, created on 2017-08-17 13:22:48
  from "D:\www\altacomplexidade\views\basico\tipo-arquivo\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5995c2d8383125_05232455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23fb3e93286561c144a4e8c275dea16f36cb8ed8' => 
    array (
      0 => 'D:\\www\\altacomplexidade\\views\\basico\\tipo-arquivo\\grid.html',
      1 => 1502477859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5995c2d8383125_05232455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '248315995c2d8215729_05454713';
echo $_smarty_tpl->tpl_vars['htmlBREADCRUMB']->value;?>


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
		            <th>Código</th>
		            <th>Descrição</th>
		        	<th width="80" class="text-center"><a class="btn btn-primary btn-xs" href="#" onclick="carregarTelaAjax('<?php echo $_smarty_tpl->tpl_vars['urlPaginaSimples']->value;?>
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
    	
    	"aoColumns": [ null,null,{ "bSortable": false, "bSearchable": false } ] ,
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
