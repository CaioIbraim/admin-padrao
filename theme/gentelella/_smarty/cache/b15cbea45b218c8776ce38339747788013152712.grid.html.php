<?php
/* Smarty version 3.1.30, created on 2017-08-08 16:22:02
  from "D:\www\sigsaude\views\ose\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598a0f5a1172e7_74542360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '547a0fc597d66b85e2a73569a3379a7ffd80abc6' => 
    array (
      0 => 'D:\\www\\sigsaude\\views\\ose\\grid.html',
      1 => 1498062113,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_598a0f5a1172e7_74542360 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<link href="http://10.4.224.74/sigsaude/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.224.74/sigsaude/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>OSE</h2></div>

<table id="tbGrid" class="table table-striped">
  	<thead>
       	<tr>
            <th>Nome</th>
            <th>Documento</th>
        	<th width="50" class="text-center"><a href="#" data-toggle="tooltip" data-placement="top" title="Incluir um novo registro."  class="blue" onclick="carregarTelaAjax('ose/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<script>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,{ "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "http://10.4.224.74/sigsaude/ose/dadosgrid",
            "type": "POST"
        },
        
        "drawCallback": function(settings, json) {
        	$('[data-toggle="tooltip"]').tooltip();
        }
        	
    } );
 
    
});



</script>

<?php }
}
