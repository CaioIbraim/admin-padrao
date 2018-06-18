<?php
/* Smarty version 3.1.30, created on 2017-02-10 13:37:52
  from "D:\www\catalogo\views\usuarios-extra-mb\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589dde50e33af8_77345246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb421a0866d3b6b5d780cf530183cbca99bbe9b1' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\usuarios-extra-mb\\grid.html',
      1 => 1485260832,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_589dde50e33af8_77345246 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<link href="http://localhost/catalogo/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://localhost/catalogo/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Usuários Extra-MB</h2></div>

<table id="tbGrid" class="table table-striped">
  	<thead>
       	<tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Sexo</th>
        	<th width="50" class="text-center"><a href="#" title="Incluir um novo registro."  class="blue" onclick="carregarTelaAjax('usuarios-extra-mb/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<script>	
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
            "url": "http://localhost/catalogo/usuarios-extra-mb/dadosgrid",
            "type": "POST"
        } 
        	
    } );
 
    
});
</script>

<?php }
}
