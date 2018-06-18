<?php
/* Smarty version 3.1.30, created on 2017-11-01 15:52:36
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\teste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fa09e49d9c68_27331710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110c7cdf8c0e7fb6c1e02e851548d19c0c5de6c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\teste.html',
      1 => 1509539303,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59fa09e49d9c68_27331710 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://10.4.225.62/estatistica_ssm/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Testando o sistema</li>
		  		  <li class="active">teste</li>
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

<style>
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


<div class="x_panel">
    <div class="x_title">
        <h2>Lançamento AMH</h2>
    <div class="clearfix"></div>
</div>

<form id="frmCaio">
    <div class='row'>
        <div class="col-md-2">
            <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP"/>
        </div>
        
        <div class="col-md-2">
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF"/>
        </div>

        <div class="col-md-4">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="NOME"/>
        </div>
    </div>

    
    
    <br>
    
    
    
         <div class="row">
                <div class="col-md-2">
                    <select id="tpoAtd" class="form-control">
                        <option>Ambulatorial</option>	
                        <option>Internado</option>
                        <option>Perícia/Acid. de Serviço</option>
                        <option>Retrabalho</option>
                    </select>
                </div>

                <div class="col-md-2 xdisplay_inputx form-group has-feedback">
                    <input class="form-control has-feedback-left calendario" id="dt-ini" name="dt-ini" placeholder="Data Inicial" aria-describedby="inputSuccess2Status" type="text">
                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>

                <div class="col-md-2 xdisplay_inputx form-group has-feedback">
                    <input class="form-control has-feedback-left calendario" id="dt-fim" name="dt-fim" name="dt-ini" placeholder="Data Final" aria-describedby="inputSuccess2Status" type="text">
                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
            </div>
    
    
    
    
    
    <div class="row"> 
        <div class="col-md-2 pull-right">
            <a  class="btn btn-default" id="btn-enviar"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
        </div>
    </div>
    
    
    
    
    
    
    
</form>
</div>




<div id="b">
    <table class="table">
        <thead>
        <th>NIP</th>
        <th>CPF</th>
        <th>Nome</th>
        <th>Tipo ATD</th>
        <th>Início</th>
        <th>Fim</th>
        <th>Ação</th>
        </thead>
        <tbody></tbody>
    </table>
    
</div>
<div id="c">
    <table class="table">
        <thead>
            
            <th>Clínica</th>
            <th>Descrição AMH</th>   
            <th>Qualidade AMH</th>  
        </thead>
        <tbody></tbody>
    </table>
</div>


   


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Lançamentos</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">AMH</a></li>
          <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
        </ul>

        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            
              <h3>Informações Ambulatoriais</h3>
              
              
             <div class="row">    
                <div class="col-md-4">
                    <input type="text" class="form-control" id="clinica" name="clinica" placeholder="Clínica/Setor executante"/>
                </div>

                <div class="col-md-4">
                    <input type="text" class="form-control" id="clinica" name="codAmh" placeholder="Código AMH"/>
                </div>
 
                <div class="col-md-4">
                    <input type="text" class="form-control" id="qtdamh" name="qtdamh" placeholder="Quantidade AMH"/>
                </div>
            </div>
              
              
              <br>
              
            <div class="row">
              <div class="col-md-12">
                  <input type="text" class="form-control" id="descamh" name="descamh" placeholder="Descrição AMH"/>
              </div>
            </div>
              
           
            
            
            
          </div>
            
            
            
            
          <div id="menu1" class="tab-pane fade">
              
              
              <h3>Informações clínicas</h3>
              
           

            
            
            
            
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="addAmh">Salvar</button>
      </div>
    </div>

  </div>
</div>








<script src="http://10.4.225.62/estatistica_ssm/views/_js/bootstrap-select/bootstrap-select.min.js"></script>
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/moment/min/moment.min.js"></script>
<script src="http://10.4.225.62/estatistica_ssm/views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<script>
    $('document').ready(function(){
        $('select').selectpicker({
        liveSearch: true,
        maxOptions: 1
        });
        
        $(".calendario").daterangepicker({
            locale: {format: 'DD/MM/YYYY' },
            singleDatePicker: true,
            showDropdowns: true
        });
        
        $("#b").hide();
        $("#c").hide();
        
        $('#btn-enviar').click(function(){
            
            var tpoAtd  = $("#tpoAtd").val();
            var ini     = $("#dt-ini").val();
            var fim     = $("#dt-fim").val();
            var nip     = $("#nip").val();
            var cpf     = $("#cpf").val();
            var nome    = $("#nome").val();
            var url     = "teste/geraTabela";
            
            if(!nip && !cpf ){
                alert('Informe NIP ou CPF');
                exit;
            }
            
            if(!nome ){
                alert('Informe o Nome');
                exit;
            }
            
            $.post( url, { nip: nip, nome: nome, cpf: cpf, tpoAtd: tpoAtd, ini: ini, fim: fim } )
		.done(function( data ) {
                $("#b").find("tbody").html(data);
                $("#b").fadeIn();
            });
            
	});
        
        
        //apresentar modal para adicinar AMH
        $('#addAmh').click(function(){
            
            
            var descAmh = $("#descamh").val();
            var qtdAmh  = $("#qtdamh").val();clinica
            var clinica  = $("#clinica").val();
            
            var url     = "teste/AddAmh";
            $.post( url, {descAmh: descAmh, qtdAmh: qtdAmh, clinica: clinica} )
		.done(function( data ) {
                $("#c").find("tbody").append(data);
                $("#c").fadeIn();
            });
        });
        
    });
    </script>
    
<?php }
}
