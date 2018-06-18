<?php
/* Smarty version 3.1.30, created on 2017-02-10 13:57:14
  from "D:\www\catalogo\views\alocacao-equipes\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589de2da7bff69_36045416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '059da72c5e0a8fe0709cdcb8fb17907d328aa288' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\alocacao-equipes\\grid.html',
      1 => 1486571506,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_589de2da7bff69_36045416 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<link href="http://localhost/catalogo/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://localhost/catalogo/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Alocação de Equipes</h2></div>

<table id="tbGrid" class="table table-striped">
  	<thead>
       	<tr>
            <th>Nome da Equipe</th>
            <th>Categoria</th>
            <th>Centro Atividade</th>
            <th>Inicio</th>
            <th>Fim</th>
        	<th width="50" class="text-center"><a href="#" title="Incluir um novo registro."  class="blue" onclick="carregarTelaAjax('alocacao-equipes/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<script>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,null,{ "bSortable": true, "bSearchable": false },{ "bSortable": true, "bSearchable": false }, { "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "http://localhost/catalogo/alocacao-equipes/dadosgrid",
            "type": "POST"
        } 
        	
    } );
 
    
});
</script>

<?php }
}
