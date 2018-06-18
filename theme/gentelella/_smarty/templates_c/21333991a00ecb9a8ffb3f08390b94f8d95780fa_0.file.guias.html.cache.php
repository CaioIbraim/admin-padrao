<?php
/* Smarty version 3.1.30, created on 2017-10-04 15:59:43
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\estatisticas_mensais\guias.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d52f9f7dcab6_21064878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21333991a00ecb9a8ffb3f08390b94f8d95780fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\estatisticas_mensais\\guias.html',
      1 => 1507122522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d52f9f7dcab6_21064878 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\estatistica_ssm\\classes\\smarty\\plugins\\function.html_options.php';
$_smarty_tpl->compiled->nocache_hash = '48451156059d52f9f6e8eb7_66956654';
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
    .input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group {
        z-index: 2;
        margin-left: -1px;
        font-size: 19.5;
    }
</style>



<div id="msgAjax"><?php echo $_smarty_tpl->tpl_vars['msgErro']->value;?>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">

                <form>
                    <div class='row'>
                        <div class="col-md-2">
                            <p>Selecione o mês</p>
                            <?php echo smarty_function_html_options(array('id'=>$_smarty_tpl->tpl_vars['idMes']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'name'=>'foo','options'=>$_smarty_tpl->tpl_vars['meses']->value,'selected'=>$_smarty_tpl->tpl_vars['mesSelect']->value),$_smarty_tpl);?>
   
                        </div>

                        <div class="col-md-2">
                            <p>Selecione o Ano</p>
                            <?php echo smarty_function_html_options(array('id'=>$_smarty_tpl->tpl_vars['idAno']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'name'=>'foo','options'=>$_smarty_tpl->tpl_vars['anos']->value,'selected'=>$_smarty_tpl->tpl_vars['anoSelect']->value),$_smarty_tpl);?>
  
                        </div>



                        <div class="col-md-2">
                            <p>Selecione o tipo da pesquisa</p>
                            <!-- Os valores dos options não estão respeitando os verdadeiros valores dos tipos das guias setados no banco e faço o filtro no controller -->
                            <select class="form-control" id="tipo">
                                <option value="NULL">Selecione</option>
                                <optgroup label="Guias">
                                    <option value="1">Total de guias de Exame/Proc</option>
                                    <option value="2">Total de guias de Consulta</option>
                                </optgroup>
                                <optgroup label="Usuários">
                                    <option value="3">Exames proced. por usuários</option>
                                    <option value="4">Consultas por usuários</option>
                                </optgroup>
                                <optgroup label="OSE">
                                    <option value="5">Exames proced. por OSE</option>
                                    <option value="6">Consultas por OSE</option>
                                </optgroup>
                            </select>
                        </div>


                        <div class="col-md-2">
                            <p>Selecione a OM</p>
                            <?php echo smarty_function_html_options(array('data-actions-box'=>$_smarty_tpl->tpl_vars['dataBox']->value,'multiple'=>$_smarty_tpl->tpl_vars['multiple']->value,'id'=>$_smarty_tpl->tpl_vars['idOm']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'name'=>'foo','options'=>$_smarty_tpl->tpl_vars['om']->value),$_smarty_tpl);?>
	
                        </div>


                        <div class="col-md-2">
                            <p>&nbsp; </p>
                            <a  class="btn btn-success" id="btn-pesq-aut"><i class="fa fa-search"></i></a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>    


<div id="b"></div>


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
    $('document').ready(function () {

        //Pesquisa os dados 
        $('#btn-pesq-aut').click(function () {
            var mes = $("#mes").val();
            var ano = $("#ano").val();
            var tipo = $("#tipo").val();
            var om = $("#om").val();

            if (tipo === "NULL") {
                displayNotify("Selecione o tipo da guia!", "error", "Atenção");
                return;
            }

            if (om === null) {
                displayNotify("Selecione uma ou mais OMs para auxiliar a sua pesquisa!", "info", "Notificação");
                return;
            }



            getData(mes, ano, tipo, om);


        });

        function getData(ini, fim, tipo, om) {

            $.ajax({
                method: "POST",
                url: "estatisticasMensais/chooseGuia",
                data: {ini: ini, fim: fim, tipo: tipo, om: om},
                dataType: "html",

                beforeSend: function () {
                    $("#b").html(imagemAjax);
                },
                success: function (data) {
                    //this.append(data);
                    $("#b").html(data);
                }
            });
        }

        $('#mes').selectpicker({
            liveSearch: true,
            maxOptions: 1
        });

        $('#ano').selectpicker({
            liveSearch: true,
            maxOptions: 1
        });

        $('#tipo').selectpicker({
            liveSearch: true,
            maxOptions: 1
        });

        /* PNotify*/
        //msg:: A mensagem que será passada, type:: o estilo da mensagem que será passada ex:error, succes, info...
        function displayNotify(msg, type, title) {
            new PNotify({
                title: title,
                text: msg,
                type: type,
                styling: 'bootstrap3'
            });
        }

        $('#om').multiselect({
            enableCaseInsensitiveFiltering: true,
            enableFiltering: true,
            includeSelectAllOption: true,
            selectAllJustVisible: false,
            maxHeight: 400,
            buttonWidth: '250px'
        });

    });
<?php echo '</script'; ?>
>

<?php }
}
