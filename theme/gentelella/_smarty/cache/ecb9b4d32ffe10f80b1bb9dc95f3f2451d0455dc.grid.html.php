<?php
/* Smarty version 3.1.30, created on 2017-02-10 14:00:13
  from "D:\www\catalogo\views\equipes\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589de38d1b2055_36079196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ccdba37a938ef52447da7e901c0172f8d0bc4dc' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\equipes\\grid.html',
      1 => 1486552798,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_589de38d1b2055_36079196 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<link href="http://localhost/catalogo/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://localhost/catalogo/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Equipes de Profissionais de Saúde</h2></div>

<table id="tbGrid" class="table table-striped">
  	<thead>
       	<tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Status</th>
        	<th width="50" class="text-center"><a href="#" title="Incluir um novo registro."  class="blue" onclick="carregarTelaAjax('equipes/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<script>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null, null, { "bSortable": false, "bSearchable": false } , { "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "http://localhost/catalogo/equipes/dadosgrid",
            "type": "POST"
        } 
        	
    } );
 
    
});
</script>

<?php }
}
