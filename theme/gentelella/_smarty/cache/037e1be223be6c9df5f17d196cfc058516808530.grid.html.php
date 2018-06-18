<?php
/* Smarty version 3.1.30, created on 2017-02-10 13:37:49
  from "D:\www\catalogo\views\procedimentos-saude\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589dde4de46691_91170475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd43eeeff9c9d3d5b074c38d136e5b96be14042dc' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\procedimentos-saude\\grid.html',
      1 => 1484740151,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_589dde4de46691_91170475 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<link href="http://localhost/catalogo/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://localhost/catalogo/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Procedimentos de Saúde da OM</h2></div>

<table id="tbGrid" class="table table-striped">
  	<thead>
       	<tr>
            <th>Categoria</th>
            <th>Centro de Atividade</th>
            <th>Procedimento</th>
        	<th width="50" class="text-center"><a href="#" title="Incluir um novo registro." class="blue" onclick="carregarTelaAjax('procedimentos-saude/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<script>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null, null, { "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "http://localhost/catalogo/procedimentos-saude/dadosgrid",
            "type": "POST"
        } 
        	
    } );
 
    
});
</script>

<?php }
}
