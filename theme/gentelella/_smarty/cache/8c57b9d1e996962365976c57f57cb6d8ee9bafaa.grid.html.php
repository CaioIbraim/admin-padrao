<?php
/* Smarty version 3.1.30, created on 2017-07-31 13:52:25
  from "D:\www\aux_regulacao\views\guia\pesquisa\grid.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597f6049423a96_13672864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bce9199d71b7d744aeae857610bfb27b9a408a38' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\guia\\pesquisa\\grid.html',
      1 => 1498159940,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_597f6049423a96_13672864 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<table id="tbGrid" class="table table-striped">
  	<thead>
    	<tr>
            <th>Número</th>
            <th>Nome</th>
            <th>OM</th>
            <th>OSE</th>
            <th>Tipo</th>
            <th>Status</th>
            <th>Emissão</th>
            <th>&nbsp;</th>
    	</tr>
	</thead>
</table>


<script>	
$(document).ready(function() {
	
    $('#tbGrid').DataTable( {
    	
    	"aoColumns": [ null,null,null,null,null,null,{ "bSortable": true, "bSearchable": false },{ "bSortable": false, "bSearchable": false } ] ,
		"iDisplayLength": mostrarRegistros,
		"aLengthMenu": dataTablePages,
	    "language": dataTableLanguageBR,
    	
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "http://10.4.224.74/aux_regulacao/guia-pesquisa/gridpesquisa",
            "type": "POST",
            "data": {"pesquisa_nip":"13126202"}
        }
    	
    	,"drawCallback": function(settings, json) {
        	$('[data-toggle="tooltip"]').tooltip();
        }
        	
    } );
    
});
</script>

<?php }
}
