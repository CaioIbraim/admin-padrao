<?php
/* Smarty version 3.1.30, created on 2017-06-06 12:53:14
  from "D:\www\aux_regulacao\views\usuariossmjustica\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5936cfeaabead6_06829302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '556d672cfa38de166ddf205a6cf9ed8f70bfc04f' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\usuariossmjustica\\grid.html',
      1 => 1492623890,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5936cfeaabead6_06829302 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<link href="http://localhost/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Usuários do Fusma por Decisão Judicial</h2></div>

<table id="tbGrid" class="table table-striped">
  	<thead>
       	<tr>
            <th>NIP TIT</th>
            <th>NIP VINC</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Cadastro</th>
        	<th width="50" class="text-center"><a href="#" title="Incluir um novo registro."  class="blue" onclick="carregarTelaAjax('usuariossmjustica/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<script>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,null,{ "bSortable": true, "bSearchable": false },{ "bSortable": true, "bSearchable": false },{ "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "http://localhost/aux_regulacao/usuariossmjustica/dadosgrid",
            "type": "POST"
        } 
        	
    } );
 
    
});
</script>

<?php }
}
