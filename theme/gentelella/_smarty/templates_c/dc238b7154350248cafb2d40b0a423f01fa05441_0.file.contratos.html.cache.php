<?php
/* Smarty version 3.1.30, created on 2017-09-06 10:15:46
  from "C:\xampp\htdocs\produtividade\views\basico\relatorios\contratos\contratos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aff502017d64_97662982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc238b7154350248cafb2d40b0a423f01fa05441' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\relatorios\\contratos\\contratos.html',
      1 => 1503947811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59aff502017d64_97662982 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\produtividade\\classes\\smarty\\plugins\\function.html_options.php';
$_smarty_tpl->compiled->nocache_hash = '154972636459aff501ed15c9_55825605';
echo $_smarty_tpl->tpl_vars['htmlBREADCRUMB']->value;?>

<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
<!-- script e css da tela -->
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_css/bootstrap-select/bootstrap-select.css" rel="stylesheet">




<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.dataTables/datatables.min.js"><?php echo '</script'; ?>
>
<!-- script e css da tela -->

<div id="msgAjax"><?php echo $_smarty_tpl->tpl_vars['msgErro']->value;?>
</div>



<div class="x_panel">
	<div class="x_title">
		<h2>
			<?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;
if ($_smarty_tpl->tpl_vars['subTituloPagina']->value != '') {?> <small><i
				class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['subTituloPagina']->value;?>
</small><?php }?>
		</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<div class="row">
			<form id="frmCaio">
				<div class='row'>

					<div class="col-md-3">
						<?php echo smarty_function_html_options(array('id'=>$_smarty_tpl->tpl_vars['idOm']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'name'=>'foo','options'=>$_smarty_tpl->tpl_vars['om']->value),$_smarty_tpl);?>
   
					</div>

					<div class="col-md-2">
						<a class="btn btn-success" id="btn-pesq-aut">
							<i class="fa fa-search"></i>
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<hr/>

<div class="row" >
	<div class="col-md-12 col-sm-12 col-xs-12" id="b">
			
	</div>
</div>






<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_js/bootstrap-select/bootstrap-select.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$('document').ready(function(){
	$('#btn-pesq-aut').click(function(){
		
		var idOm = $("#om").val();
		
		$.ajax({
			  method: "POST",
			  url: 'contratos/getTotalContratosEmUso',
			  data: { idOm : idOm},
			  dataType: "html",
			  
			  beforeSend: function(){
	          		$("#b").html(imagemAjax);
	           },
	           success: function(data){
	                //this.append(data);
	                $("#b").html(data);	            
	           }
			  
		});
	});
	
	$('#om').selectpicker({
	      liveSearch: true,
	      maxOptions: 1
	    });
	
	
});
<?php echo '</script'; ?>
>
<?php }
}
