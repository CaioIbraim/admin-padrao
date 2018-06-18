<?php
/* Smarty version 3.1.30, created on 2017-02-16 16:29:53
  from "D:\www\catalogo\views\centro-atividade-om\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a5efa137e6d9_70442142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '985cea2e9b13ba28ccc18a23381e4b6d11ca9188' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\centro-atividade-om\\grid.html',
      1 => 1484737437,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_58a5efa137e6d9_70442142 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<link href="http://10.4.224.74/catalogo/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Centro de Atividades da OM</h2></div>

<table id="tbGrid" class="table table-striped">
  	<thead>
       	<tr>
            <th>Categoria</th>
            <th>Nome</th>
            <th>Status</th>
        	<th width="50" class="text-center"><a href="#" title="Incluir um novo registro."  class="blue" onclick="carregarTelaAjax('centro-atividade-om/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<script>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null, { "bSortable": false, "bSearchable": false } , { "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "http://10.4.224.74/catalogo/centro-atividade-om/dadosgrid",
            "type": "POST"
        } 
        	
    } );
 
    
});
</script>

<?php }
}
