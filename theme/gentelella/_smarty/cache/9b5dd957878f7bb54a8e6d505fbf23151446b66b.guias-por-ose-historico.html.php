<?php
/* Smarty version 3.1.30, created on 2017-11-09 11:57:17
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\guias\guias-por-ose-historico.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a045ebd8e9f30_67592056',
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
  'cache_lifetime' => 3600,
),true)) {
function content_5a045ebd8e9f30_67592056 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://10.4.225.62/estatistica_ssm/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Regulação</li>
		  		  <li class="active">Total de usuários por vículo</li>
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
                                <select name="foo" id="om" data-actions-box="" multiple="">
<option value="296" id="om-0">AGABRANCA</option>
<option value="278" id="om-1">AGBJLAPA</option>
<option value="348" id="om-2">AGIMPERATRIZ</option>
<option value="276" id="om-3">AGJUAZEIRO</option>
<option value="346" id="om-4">BTLDEFNBQR-ARAMAR</option>
<option value="59" id="om-5">CFAT</option>
<option value="326" id="om-6">CFPA</option>
<option value="320" id="om-7">CFRP</option>
<option value="72" id="om-8">CFS</option>
<option value="65" id="om-9">CFSF</option>
<option value="99" id="om-10">CFTP</option>
<option value="195" id="om-11">CMAM</option>
<option value="85" id="om-12">CN</option>
<option value="571" id="om-13">CNBE</option>
<option value="572" id="om-14">CNBW</option>
<option value="319" id="om-15">COM5ºDN</option>
<option value="156" id="om-16">COM8ºDN</option>
<option value="371" id="om-17">COM9ºDN</option>
<option value="293" id="om-18">CPAL</option>
<option value="335" id="om-19">CPAP</option>
<option value="300" id="om-20">CPMA</option>
<option value="42" id="om-21">CPMM</option>
<option value="292" id="om-22">CPPB</option>
<option value="301" id="om-23">CPPI</option>
<option value="323" id="om-24">CPPR</option>
<option value="272" id="om-25">CPSE</option>
<option value="108" id="om-26">CPSP</option>
<option value="568" id="om-27">CTMSP</option>
<option value="328" id="om-28">DELGUAIRA</option>
<option value="273" id="om-29">DELILHEUS</option>
<option value="165" id="om-30">DELITAJAI</option>
<option value="64" id="om-31">DELLAGUNA</option>
<option value="104" id="om-32">DELPEPITACIO</option>
<option value="62" id="om-33">DELPSEGURO</option>
<option value="325" id="om-34">DELSFSUL</option>
<option value="121" id="om-35">DELSSEBASTIAO</option>
<option value="60" id="om-36">DELURUGUAIANA</option>
<option value="237" id="om-37">DSM</option>
<option value="286" id="om-38">EAMCE</option>
<option value="94" id="om-39">EAMES</option>
<option value="321" id="om-40">EAMSC</option>
<option value="80" id="om-41">HCM</option>
<option value="308" id="om-42">HNBE</option>
<option value="260" id="om-43">HNBRA</option>
<option value="250" id="om-44">HNLA</option>
<option value="70" id="om-45">HNMD</option>
<option value="295" id="om-46">HNNA</option>
<option value="299" id="om-47">HNRE</option>
<option value="274" id="om-48">HNSA</option>
<option value="82" id="om-49">OCM</option>
<option value="570" id="om-50">PNCG</option>
<option value="332" id="om-51">PNMA</option>
<option value="411" id="om-52">PNN</option>
<option value="86" id="om-53">PNNSG</option>
<option value="663" id="om-54">PNRG</option>
<option value="205" id="om-55">PNSPA</option>
<option value="84" id="om-56">SNNF</option>
<option value="353" id="om-57">UISM</option>
</select>
	
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
<script src="http://10.4.225.62/estatistica_ssm/views/_js/bootstrap-select/bootstrap-select.min.js"></script>
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/moment/min/moment.min.js"></script>
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>


<!-- PNotify -->
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.js"></script>
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.buttons.js"></script>
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/pnotify/dist/pnotify.nonblock.js"></script>
      
        

<script>
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
</script>
<?php }
}
