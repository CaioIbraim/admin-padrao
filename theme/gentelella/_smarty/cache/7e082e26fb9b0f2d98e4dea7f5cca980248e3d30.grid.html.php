<?php
/* Smarty version 3.1.30, created on 2017-02-10 13:37:58
  from "D:\www\catalogo\views\alocacao-equipamentos\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589dde56488b84_47682956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c51a39a1b1d9ab1493f275a87aefebb5dbd697c4' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\alocacao-equipamentos\\grid.html',
      1 => 1486053931,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_589dde56488b84_47682956 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<link href="http://localhost/catalogo/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://localhost/catalogo/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Alocação de Equipamentos de Saúde</h2></div>

<table id="tbGrid" class="table table-striped">
  	<thead>
       	<tr>
            <th>Equipamento</th>
            <th>Categoria</th>
            <th>Centro Atividade</th>
            <th>Ativo</th>
        	<th width="50" class="text-center"><a href="#" title="Incluir um novo registro."  class="blue" onclick="carregarTelaAjax('alocacao-equipamentos/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<script>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,null,{ "bSortable": true, "bSearchable": false }, { "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "http://localhost/catalogo/alocacao-equipamentos/dadosgrid",
            "type": "POST"
        } 
        	
    } );
 
    
});
</script>

<?php }
}
