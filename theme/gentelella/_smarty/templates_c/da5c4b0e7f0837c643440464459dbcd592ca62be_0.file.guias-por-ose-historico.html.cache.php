<?php
/* Smarty version 3.1.30, created on 2017-11-09 11:57:17
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\guias\guias-por-ose-historico.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a045ebd7b5561_36943373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da5c4b0e7f0837c643440464459dbcd592ca62be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\guias\\guias-por-ose-historico.html',
      1 => 1509541584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a045ebd7b5561_36943373 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\estatistica_ssm\\classes\\smarty\\plugins\\function.html_options.php';
$_smarty_tpl->compiled->nocache_hash = '3510081795a045ebd4986a2_64621384';
echo $_smarty_tpl->tpl_vars['htmlBREADCRUMB']->value;?>

<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
<!-- script e css da tela -->
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.dataTables/datatables.min.js"><?php echo '</script'; ?>
>
<!-- script e css da tela -->
<!-- bootstrap-daterangepicker -->
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<!-- bootstrap-datetimepicker -->
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<!-- bootstrap-select -->
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_css/bootstrap-select/bootstrap-select.css" rel="stylesheet">


<!-- PNotify -->
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">


        <style>
            table{
                height:  400px;
            }
              .input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group {
                    z-index: 2;
                    margin-left: -1px;
                    font-size: 19.5;
                }
        </style>
        
        
        
        

	<div class="col-md-12 col-sm-6 col-xs-12">
		<div class="x_panel">
                        <div class="x_content">
                            <div class="col-md-2">
                                <p>Selecione a OM</p>
                                <?php echo smarty_function_html_options(array('data-actions-box'=>$_smarty_tpl->tpl_vars['dataBox']->value,'multiple'=>$_smarty_tpl->tpl_vars['multiple']->value,'id'=>$_smarty_tpl->tpl_vars['idOm']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'name'=>'foo','options'=>$_smarty_tpl->tpl_vars['om']->value),$_smarty_tpl);?>
	
                            </div>
                            <div class="col-md-2">
                                <p>&nbsp; </p>
                                <a  class="btn btn-success" id="btn-pesq-aut"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                </div>
        </div>
        
        
        
        
        
        
        
        <div id="b">
        
        
        
        
        
        </div>
        
        
        
	
        
        
        
        
        
<!-- bootstrap-daterangepicker -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_js/bootstrap-select/bootstrap-select.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/moment/min/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>


<!-- PNotify -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/pnotify/dist/pnotify.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/pnotify/dist/pnotify.buttons.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_gentelella/vendors/pnotify/dist/pnotify.nonblock.js"><?php echo '</script'; ?>
>
      
        

<?php echo '<script'; ?>
>
$(document).ready(function(){
    	//Pesquisa os dados 
	$('#btn-pesq-aut').click(function(){
            var om = $("#om").val();
            getData(om);
	});
	function getData(om){
		$.ajax({
			  method: "POST",
			  url: "guias/retornaUsuariosPorPosto",
			  data: { om:om },
			  dataType: "html",
			  
			  beforeSend: function(){
	          		$("#b").html(imagemAjax);
	           },
	           success: function(data){
	                //this.append(data);
	                $("#b").html(data);	            
	           }
		});
	}
        $('#om').multiselect({
            enableCaseInsensitiveFiltering: true,
            enableFiltering: true,
            includeSelectAllOption: true,
            selectAllJustVisible: false,
            maxHeight: 150,
            buttonWidth: '150px'
        });
});
<?php echo '</script'; ?>
>
<?php }
}
