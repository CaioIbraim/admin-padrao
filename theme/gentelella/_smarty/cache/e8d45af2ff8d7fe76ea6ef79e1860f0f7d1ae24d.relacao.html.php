<?php
/* Smarty version 3.1.30, created on 2017-06-19 14:39:48
  from "D:\www\aux_regulacao\views\contrato\relacao.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59480c64712749_60546740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe52e1c49c300da42b49c101303dce6386619504' => 
    array (
      0 => 'D:\\www\\aux_regulacao\\views\\contrato\\relacao.html',
      1 => 1490186996,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59480c64712749_60546740 (Smarty_Internal_Template $_smarty_tpl) {
?>

<script src="http://localhost/aux_regulacao/views/_jquery/tabela.js"></script>
<script src="http://localhost/aux_regulacao/views/_jquery/jquery.mask.min.js"></script>
<script src="http://localhost/aux_regulacao/views/_jquery/jquery-ui.min.js"></script>
<script src="http://localhost/aux_regulacao/views/_js/regras.js"></script>
<script src="http://localhost/aux_regulacao/views/_js/datepicker.regional.js"></script>
<link href="http://localhost/aux_regulacao/views/_css/jquery-ui.min.css" rel="stylesheet">



<div class='row'>
    <div class='col-md-12 col-sm-12 col-xs-12' id="divMsgAjax"></div>
    <div class='col-md-12 col-sm-12 col-xs-12'>
        <div class="page-header sigsaude"><h2>Contratos  </h2> </div>
    </div>
</div>



<form id='frmConsultaContrato' method='POST'>
    <div class='row'>
        <div class='col-md-3 col-sm-6 col-xs-12'>
            <label for='pesqNmeOm'>OM: </label>
            <div class="input-group">
                <input type='text' class='form-control' name='pesqNmeOm' id='pesqNmeOm' placeholder='Todas' value="">
                <span class="input-group-btn">
                    <button class="btn btn-default limpar" type="button" id='btnPesqNmeOm'>
                        <span class='glyphicon glyphicon-list'></span>
                    </button>
                </span>
            </div>
        </div>
        <div class='col-md-9 col-sm-6 col-xs-12'>
            <label for='pesqNmeOse'>OSE: </label>
            <div class="input-group">
                <input type='text' class='form-control' name='pesqNmeOse' id='pesqNmeOse' placeholder='Todas'>
                <input type='hidden' class='form-control' name='pesqDocOse' id='pesqDocOse'>
                <span class="input-group-btn">
                    <button class="btn btn-default limpar" type="button" id='btnPesqNmeOse'>
                        <span class='glyphicon glyphicon-list'></span>
                    </button>
                </span>
            </div>
        </div>
    </div>
    
    <div class='row'>
      
     
         <div class='col-md-2 col-sm-6 col-xs-12'>
            <label>Situação da OSE:</label>
            <select name="tipoContrato" class="c-select">
                <option value="0">Selecione</option>
                <option value="1">Credenciada</option>
                <option value="2">Descredenciada</option>
            </select><span><i class="c-sigsaude"></i></span>
        </div>
        
         <div class='col-md-2 col-sm-6 col-xs-12'>
            <label>Situação do Contrato:    </label>
            <select name="vigencia" class="c-select">
                <option value="0">Selecione</option>
                <option value="1">Vigente</option>
                <option value="2">Vencido</option>
            </select><span><i class="c-sigsaude"></i></span>
        </div>
        
    </div>



    
    <div class='row'>
        <div class='col-md-12 col-sm-12 col-xs-12 text-right' id='btnBoxFooter'>
            <button type='reset' class='btn btn-primary' id='btnLimpar'>Limpar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  class='btn btn-primary' id='btnPesquisar'>Pesquisar</a>
        </div>
    </div>
</form>

<div class='row' id='resConsultaContrato'>
    <div class='col-md-12 col-sm-12 col-xs-12'>
        <table id='tabConsultaContrato' class='table table-striped table-bordered dt-responsive nowrap' cellspacing='0' width='100%'>
            <thead>
                <tr>
                    <th>Nome / Documento</th>
                    <th width='130'>Vigência</th>
                    <th width='130'>Nº Credencimento</th>
                    <th width='130'> Ação </th>
                </tr>
            </thead>
        </table>
    </div>
</div>







<script>
$(document).ready ( function () {
    // inicia a datatable como hide
    $('#resConsultaContrato').hide();

    // Abrir modal com tabela de escolha de OM
    $('body').on ('click','#btnPesqNmeOm', function () {
        $('#pesqNmeOse').val('');
        carregarTabelaModal (
                '#mdlEscolhaOM', 
                '#tabRelacaoOM', 
                'http://localhost/aux_regulacao/om/datatable', 
                [{sWidth: '120px'}, null]
        );
    });
    // Seleciona uma OM 
    $('body').on ('click', '#tabRelacaoOM tbody tr', function () {
        $('#pesqNmeOm').val($(this).find('td:eq(0)').text());
        $('#mdlEscolhaOM').modal('toggle');
    });
   
    // Abrir modal com tabela de escolha de OSE
    $('#btnPesqNmeOse').on ('click', function () {
        $("#pesqNmeOm").val('');
        carregarTabelaModal (
                '#mdlEscolhaOSE', 
                '#tabRelacaoOSE', 
                'http://localhost/aux_regulacao/ose/datatable', 
                [{sWidth: '120px'}, null]
        );
    });
    // Seleciona uma OSE 
    $('body').on ('click', '#tabRelacaoOSE tbody tr', function () {
        $('#pesqDocOse').val($(this).find('td:eq(0)').text());
        $('#pesqNmeOse').val($(this).find('td:eq(1)').text());
        $('#mdlEscolhaOSE').modal('toggle');
    });

    var arrColDefs = [
        {orderable: false, responsivePriority: 1, targets: -1}
    ];
        
        
        
        
    $('#btnPesquisar').on('click', function () {
            buscaContrato();
            $('#resConsultaContrato').show();
        });

        
    $('#BtnDesCredOse').on('click', function(){
        var idContrato = $("#idContrato").val();
        descredenciarOse(idContrato);
    });    
        
     $('#BtnCredOse').on('click', function(){
        var idContrato = $("#idContrato").val();
        credenciarOse(idContrato);
    });       
   
   
    buscaContrato = function(){
            criarTabelaContratos (
            '#tabConsultaContrato', 
             arrColDefs, 
            'http://localhost/aux_regulacao/contrato/resultadopesquisa' 
            );
    }
   
   
    descredenciarOse = function (idOse) {
        $.ajax({
            type: 'POST',
            url: 'http://localhost/aux_regulacao/contrato/descredenciar',
            data: {id:idOse}, 
            success: function (data) {
                 $('#divMsgAjax').html('<div class="alert alert-danger alert-dismissible" role="alert" > <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4>Atenção!</h4><p>' + data + '</p></div>');
            }, 
            complete: function () {
                rolarPagina('#divMsgAjax');
                carregarTelaAjax('http://localhost/aux_regulacao/contrato', FALSE);
            }
        });
        
        setTimeout(function(){ buscaContrato(); }, 2000);
        
        return false;
    };
    
    credenciarOse = function (idOse) {
        $.ajax({
            type: 'POST',
            url: 'http://localhost/aux_regulacao/contrato/reCredenciar',
            data: {id:idOse}, 
            success: function (data) {
                $('#divMsgAjax').html('<div class="alert alert-danger alert-dismissible" role="alert" > <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4>Atenção!</h4><p>' + data + '</p></div>');
            }, 
            complete: function () {
                rolarPagina('#divMsgAjax');
                carregarTelaAjax('http://localhost/aux_regulacao/contrato', FALSE);
            }
        });
        setTimeout(function(){ buscaContrato(); }, 2000);
        return false;
    };
    
     gerenciarDescredenciamentoOSE = function(idCont){
        // idOse teste = 4815
        var array = {'idCont' : idCont, 'acao' : 'descredenciar'} ;
        carregarTelaAjax('contrato/gerenciar', array );
    };
      alterarDadosOSE = function(idCont){
        // idOse teste = 4815
        var array = {'idCont' : idCont, 'acao' : 'alterar'} ;
        carregarTelaAjax('contrato/alterar', array );
    };
     $('body').on('keyup', 'input', function() {
        this.value = this.value.toLocaleUpperCase();
    });
});
</script>





<?php }
}
