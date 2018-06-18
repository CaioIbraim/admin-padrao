<?php
/* Smarty version 3.1.30, created on 2017-08-17 13:22:48
  from "D:\www\altacomplexidade\views\basico\tipo-arquivo\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5995c2d8383122_38560618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23fb3e93286561c144a4e8c275dea16f36cb8ed8' => 
    array (
      0 => 'D:\\www\\altacomplexidade\\views\\basico\\tipo-arquivo\\grid.html',
      1 => 1502477859,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5995c2d8383122_38560618 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://10.4.224.74/altacomplexidade/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Básico</li>
		  		  <li class="active">Tipo de Arquivo</li>
		  		</ol>
      		
    	</div>
    		</div>
<div class="clearfix"></div>

<!-- script e css da tela -->
<link href="http://10.4.224.74/altacomplexidade/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.224.74/altacomplexidade/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>

<div class="x_panel">
	<div class="x_title">
		<h2>Tipos de Arquivo</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
	
		<table id="tbGrid" class="table table-striped">
		  	<thead>
		       	<tr>
		            <th>Código</th>
		            <th>Descrição</th>
		        	<th width="80" class="text-center"><a class="btn btn-primary btn-xs" href="#" onclick="carregarTelaAjax('basico-tipoarquivo/incluir','');"><i class="fa fa-plus"></i> Incluir </a></th>
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
            "url": "http://10.4.224.74/altacomplexidade/basico-tipoarquivo/dadosgrid",
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
