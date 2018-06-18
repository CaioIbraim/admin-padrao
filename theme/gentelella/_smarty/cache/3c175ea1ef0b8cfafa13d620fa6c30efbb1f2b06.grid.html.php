<?php
/* Smarty version 3.1.30, created on 2017-02-16 16:29:50
  from "D:\www\catalogo\views\alocacao-profissionais-saude\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a5ef9e5007f6_97389102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '175cbf3c29ebac105a0d5c5ad4cbe19a54a1ff5e' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\alocacao-profissionais-saude\\grid.html',
      1 => 1485880860,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_58a5ef9e5007f6_97389102 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<link href="http://10.4.224.74/catalogo/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Alocação de Profissionais de Saúde</h2></div>

<table id="tbGrid" class="table table-striped">
  	<thead>
       	<tr>
            <th>Nome do Profissional</th>
            <th>Tipo</th>
            <th>Categoria</th>
            <th>Centro Atividade</th>
            <th>Inicio</th>
            <th>Fim</th>
        	<th width="50" class="text-center"><a href="#" title="Incluir um novo registro."  class="blue" onclick="carregarTelaAjax('alocacao-profissionais-saude/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<script>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,null,null,{ "bSortable": true, "bSearchable": false },{ "bSortable": true, "bSearchable": false }, { "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "http://10.4.224.74/catalogo/alocacao-profissionais-saude/dadosgrid",
            "type": "POST"
        } 
        	
    } );
 
    
});
</script>

<?php }
}
