<?php
/* Smarty version 3.1.30, created on 2017-08-02 10:05:30
  from "D:\www\aux_regulacao\views\usuarios\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5981ce1a166788_75213802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef33ace17743aa62c52640c6d78289f97253d910' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\usuarios\\grid.html',
      1 => 1498158670,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5981ce1a166788_75213802 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<link href="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.224.74/aux_regulacao/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Usuários do Regulação</h2></div>

<table id="tbGrid" class="table table-striped">
  	<thead>
       	<tr>
            <th>OM</th>
            <th>Login</th>
            <th>Nome</th>
            <th>Bloqueado</th>
            <th>Perfil</th>
        	<th width="50" class="text-center"><a href="#" data-toggle="tooltip" data-placement="top" title="Incluir&nbsp;um&nbsp;novo&nbsp;usuário."  class="blue" onclick="carregarTelaAjax('usuarios/incluir','');"><i class="fa fa-plus"></i></a></th>
    	</tr>
	</thead>
</table>


<script>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,null,null,{ "bSortable": false, "bSearchable": false },{ "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "http://10.4.224.74/aux_regulacao/usuarios/dadosgrid",
            "type": "POST"
        } 
    	
    	,"drawCallback": function(settings, json) {
        	$('[data-toggle="tooltip"]').tooltip();
        }
        	
    } );
 
    
});
</script>

<?php }
}
