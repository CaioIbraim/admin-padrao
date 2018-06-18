<?php
/* Smarty version 3.1.30, created on 2017-08-02 10:49:51
  from "D:\www\aux_regulacao\views\contrato\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5981d87f64dbb0_91481364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd75891b47346d997f60391b7bdce273390d07f5' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\contrato\\grid.html',
      1 => 1497966642,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5981d87f64dbb0_91481364 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<table id="tbGrid" class="table table-striped">
  	<thead>
       	<tr>
            <th width="50" rowspan="2">OM</th>
            <th rowspan="2">OSE</th>
            <th rowspan="2">Documento</th>
            <th colspan="2" class="text-center">Vigência</th>
            <th colspan="2" class="text-center">Credenciamento</th>
            <th rowspan="2">Ação</th>
    	</tr>
    	<tr>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Nº Contrato</th>
            <th>Status</th>
    	</tr>
	</thead>
</table>


<script>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,{ "bSortable": true, "bSearchable": false },null,null,null,{ "bSortable": true, "bSearchable": false },{ "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "http://localhost/aux_regulacao/contrato/gridpesquisa/323",
            "type": "POST"
        } 
        	
    } );
    
});
</script>

<?php }
}
