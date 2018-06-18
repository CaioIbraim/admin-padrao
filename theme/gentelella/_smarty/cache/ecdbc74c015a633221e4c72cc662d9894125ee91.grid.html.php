<?php
/* Smarty version 3.1.30, created on 2017-08-11 14:05:07
  from "D:\www\altacomplexidade\views\usuarios\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598de3c3afb838_06025853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca004a50b2f271a9667f704535882297b122ef38' => 
    array (
      0 => 'D:\\www\\altacomplexidade\\views\\usuarios\\grid.html',
      1 => 1502295780,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_598de3c3afb838_06025853 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<link href="http://localhost/altacomplexidade/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://localhost/altacomplexidade/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>

<div class="x_panel">
	<div class="x_title">
		<h2>Usuários do Regulação</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
	
		<table id="tbGrid" class="table table-striped">
		  	<thead>
		       	<tr>
		            <th>OM</th>
		            <th>Login</th>
		            <th>Nome</th>
		            <th>Bloqueado</th>
		            <th>Perfil</th>
		        	
		        	<th width="132" class="text-center"><a class="btn btn-primary btn-xs" href="#" onclick="carregarTelaAjax('usuarios/incluir','');"><i class="fa fa-plus"></i> Incluir </a></th>
		    	</tr>
			</thead>
		</table>
	
	</div>
</div>



<script>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,null,null,{ "bSortable": false, "bSearchable": false },{ "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
	    
	    "autoWidth": false,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "http://localhost/altacomplexidade/usuarios/dadosgrid",
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
