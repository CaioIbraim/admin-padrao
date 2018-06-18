<?php
/* Smarty version 3.1.30, created on 2017-10-31 15:06:32
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\estatisticas_dsm\estatisticas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f8ad98b74dc1_14597246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7a42b1323cdf0fc91fcc165bb9c48339a7cba2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\estatisticas_dsm\\estatisticas.html',
      1 => 1509469266,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59f8ad98b74dc1_14597246 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://10.4.225.62/estatistica_ssm/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Estatísticas Mensais</li>
		  		  <li class="active">Estatística da DSM</li>
		  		</ol>
      		
    	</div>
    		</div>
<div class="clearfix"></div>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
<!-- script e css da tela -->
<link href="http://10.4.225.62/estatistica_ssm/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.225.62/estatistica_ssm/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->
<!-- bootstrap-daterangepicker -->
<link href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<!-- bootstrap-datetimepicker -->
<link href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<!-- bootstrap-select -->
<link href="http://10.4.225.62/estatistica_ssm/views/_css/bootstrap-select/bootstrap-select.css" rel="stylesheet">

<!-- PNotify -->
<link href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
<link href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
<link href="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

<style>
    .input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group {
        z-index: 2;
        margin-left: -1px;
        font-size: 19.5;
    }
    
    
    /*Estilo do calendário*/
    .calendar-table .table, thead, tr, td, th{
        border-color: #F1F1F1 ! important;
    }
    .daterangepicker {
        position: absolute;
        color: inherit;
        background: #fff;
        border-radius: 4px;
        width: 312 ! important;
        padding: 4px;
        margin-top: 1px;
        top: 100px;
        left: 20px;
    }
</style>

<div id="msgAjax"></div>

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
                            <select name="foo" class="form-control" id="mes">
<option value="01" class="form-control option" id="mes-0">Janeiro</option>
<option value="02" class="form-control option" id="mes-1">Fevereiro</option>
<option value="03" class="form-control option" id="mes-2">Março</option>
<option value="04" class="form-control option" id="mes-3">Abril</option>
<option value="05" class="form-control option" id="mes-4">Maio</option>
<option value="06" class="form-control option" id="mes-5">Junho</option>
<option value="07" class="form-control option" id="mes-6">Julho</option>
<option value="08" class="form-control option" id="mes-7">Agosto</option>
<option value="09" class="form-control option" id="mes-8">Setembro</option>
<option value="10" selected="selected" class="form-control option" id="mes-9">Outubro</option>
<option value="11" class="form-control option" id="mes-10">Novembro</option>
<option value="12" class="form-control option" id="mes-11">Dezembro</option>
</select>
   
                        </div>

                        <div class="col-md-2">
                            <p>Selecione o Ano</p>
                            <select name="foo" class="form-control" id="ano">
<option value="2017" selected="selected" class="form-control option" id="ano-0">2017</option>
<option value="2016" class="form-control option" id="ano-1">2016</option>
<option value="2015" class="form-control option" id="ano-2">2015</option>
<option value="2014" class="form-control option" id="ano-3">2014</option>
</select>
  
                        </div>



                        <div class="col-md-2">
                            <p>Selecione o tipo da pesquisa</p>
                            <!-- Os valores dos options não estão respeitando os verdadeiros valores dos tipos das guias setados no banco e faço o filtro no controller -->
                            <select class="form-control" id="tipo">
                                <option value="NULL">Selecione</option>
                                <optgroup label="Regulação">
                                    <option value="1">Por OM</option>
                                    <option value="2">Por DN</option>
                                    <option value="3">Por Especialidade</option>
                                    <option value="4">Por Procedimento > 120</option>
                                    <option value="5">Por Procedimento < 120</option>
                                </optgroup>
                            </select>
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
<script src="http://10.4.225.62/estatistica_ssm/views/_js/bootstrap-select/bootstrap-select.min.js"></script>
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/moment/min/moment.min.js"></script>
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>


<!-- PNotify -->
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.js"></script>
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.buttons.js"></script>
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.nonblock.js"></script>



<script>
    $('document').ready(function () {

        //Pesquisa os dados 
        $('#btn-pesq-aut').click(function () {
            var mes = $("#mes").val();
            var ano = $("#ano").val();
            var tipo = $("#tipo").val();
            var om = $("#om").val();

            if (tipo === "NULL") {
                displayNotify("Selecione o tipo da pesquisa!", "error", "Atenção");
                return;
            }
            getData(mes, ano, tipo, om);
        });

        function getData(ini, fim, tipo, om) {

            $.ajax({
                method: "POST",
                url: "estatisticasDSM/chooseGuia",
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

        $("#single_cal1").daterangepicker(
            {
                locale: {
                  format: 'DD/MM/YYYY'
                },
                startDate: '01/10/2017',
                endDate: '31/10/2017',
                singleDatePicker: true,
                showDropdowns: true
            });


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
            maxOptions: 2
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
            maxHeight: 150,
            buttonWidth: '150px'
        });
        

    });
</script>

<?php }
}
