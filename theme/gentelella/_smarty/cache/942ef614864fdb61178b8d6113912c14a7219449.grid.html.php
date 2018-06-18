<?php
/* Smarty version 3.1.30, created on 2017-08-21 09:50:55
  from "C:\xampp\htdocs\produtividade\views\basico\tipo-arquivo\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599ad72f04c715_37385624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4e7d817ebf72d00b0529d8b85215c9ea304af96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\tipo-arquivo\\grid.html',
      1 => 1502477859,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_599ad72f04c715_37385624 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://localhost/produtividade/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Relatórios</li>
		  		  <li class="active">Guias</li>
		  		</ol>
      		
    	</div>
    		</div>
<div class="clearfix"></div>

<!-- script e css da tela -->
<link href="http://localhost/produtividade/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://localhost/produtividade/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>

<div class="x_panel">
	<div class="x_title">
		<h2>Produtividade</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
	
		<table id="tbGrid" class="table table-striped">
		  	<thead>
		       	<tr>
		            <th>Código</th>
		            <th>Descrição</th>
		        	<th width="80" class="text-center"><a class="btn btn-primary btn-xs" href="#" onclick="carregarTelaAjax('basico/tipo-arquivo/incluir','');"><i class="fa fa-plus"></i> Incluir </a></th>
		    	</tr>
			</thead>
		</table>
	
	</div>
</div>



<script>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,{ "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
	    
	    "autoWidth": false,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "http://localhost/produtividade/basico/tipo-arquivo/dadosgrid",
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
