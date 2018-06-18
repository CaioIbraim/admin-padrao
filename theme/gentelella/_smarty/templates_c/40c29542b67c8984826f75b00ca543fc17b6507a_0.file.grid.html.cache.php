<?php
/* Smarty version 3.1.30, created on 2017-02-16 14:23:14
  from "D:\www\catalogo\views\alocacao-profissionais-equipes\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a5d1f2911b32_14318030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40c29542b67c8984826f75b00ca543fc17b6507a' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\alocacao-profissionais-equipes\\grid.html',
      1 => 1486744614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a5d1f2911b32_14318030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1460858a5d1f254ccd6_58344855';
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
            <th>Nome da Equipe</th>
            <th>Nome do Profissional</th>
            <th>Especialidade</th>
            <th>Atividade</th>
        	<th width="50" class="text-center"><a href="#" title="Incluir um novo registro."  class="blue" onclick="carregarTelaAjax('<?php echo $_smarty_tpl->tpl_vars['urlPaginaSimples']->value;?>
/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<?php echo '<script'; ?>
>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,null,{ "bSortable": true, "bSearchable": false }, { "bSortable": false, "bSearchable": false } ] ,
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
