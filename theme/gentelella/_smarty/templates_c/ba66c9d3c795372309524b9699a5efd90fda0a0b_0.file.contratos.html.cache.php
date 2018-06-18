<?php
/* Smarty version 3.1.30, created on 2017-10-23 09:28:37
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\contratos\contratos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59edd265b6fe58_30532158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba66c9d3c795372309524b9699a5efd90fda0a0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\contratos\\contratos.html',
      1 => 1505999630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59edd265b6fe58_30532158 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\estatistica_ssm\\classes\\smarty\\plugins\\function.html_options.php';
$_smarty_tpl->compiled->nocache_hash = '10296399859edd265aa4c26_08388590';
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
	      maxOptions: 1,
              size : 10
	    });
	
	
});
<?php echo '</script'; ?>
>
<?php }
}
