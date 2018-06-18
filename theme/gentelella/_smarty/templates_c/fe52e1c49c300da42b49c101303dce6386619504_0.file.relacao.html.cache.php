<?php
/* Smarty version 3.1.30, created on 2017-06-19 14:39:48
  from "D:\www\aux_regulacao\views\contrato\relacao.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59480c646d5841_14630228',
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
  'includes' => 
  array (
  ),
),false)) {
function content_59480c646d5841_14630228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '569659480c64437347_46477045';
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/tabela.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.mask.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_js/regras.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_js/datepicker.regional.js"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_css/jquery-ui.min.css" rel="stylesheet">



<div class='row'>
    <div class='col-md-12 col-sm-12 col-xs-12' id="divMsgAjax"></div>
    <div class='col-md-12 col-sm-12 col-xs-12'>
        <div class="page-header sigsaude"><h2><?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;
if ($_smarty_tpl->tpl_vars['subTituloPagina']->value != '') {?> <small><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['subTituloPagina']->value;?>
</small><?php }?> <?php if ($_smarty_tpl->tpl_vars['subTitulo']->value != '') {?> <small><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['subTitulo']->value;?>
</small><?php }?> </h2> </div>
    </div>
</div>



<?php if ($_smarty_tpl->tpl_vars['acao']->value == 'pesquisar') {?>
<form id='frmConsultaContrato' method='POST'>
    <div class='row'>
        <div class='col-md-3 col-sm-6 col-xs-12'>
            <label for='pesqNmeOm'>OM: </label>
            <div class="input-group">
                <input type='text' class='form-control' name='pesqNmeOm' id='pesqNmeOm' placeholder='Todas' value="<?php echo $_SESSION['usuario']['om'];?>
">
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
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['acao']->value == "descredenciar") {?>
<form name='frmDesCredOse' id='FrmDesCredOse'>
    <div class="row">
        <div class='col-md-8 col-sm-12 col-xs-12'>
            <label>Nome</label>
            <input type="text" class="form-control" id='NomeOse' name='nomeOse' value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['nome'];?>
" readonly="readonly">
        </div>
    </div>
    <div class="row">
        <div class='col-md-2 col-sm-12 col-xs-12'>	
            <div id="divCnpj">
                <label>CNPJ/CPF</label>
                <input class="form-control" type="text" maxlength="15" id="docOse" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['doc'];?>
" readonly="readonly"/>
            </div>
        </div>
        <div class='col-md-3 col-sm-12 col-xs-12'>
            <label>Vigência</label>
            <input type="text" class="form-control" id='vigencia' name='vigencia' value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['vigencia'];?>
" readonly="readonly">
        </div>
        <div class='col-md-3 col-sm-12 col-xs-12'>	
            <div id="divCnpj">
                <label>Nº do credenciamento</label>
                <input class="form-control" type="text" name="nuCredenciamento" id="NuCredenciamento" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['numero'];?>
" readonly="readonly"/>
            </div>
        </div>
    </div>
    <input type="hidden" name="idContrato" id="idContrato" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['idcontrato'];?>
"/>
    <div class="form-group" id="btnBoxFooter">
        <div class="col-sm-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-10 text-right">
            <a  class="btn btn-primary" onclick="location.reload()">Voltar</a>    
            <?php if ($_smarty_tpl->tpl_vars['info']->value[0]['status'] == 'D') {?>
            <a  id="BtnCredOse" class="btn btn-primary">Credenciar</a>
            <?php } else { ?>
            <a  id="BtnDesCredOse" class="btn btn-primary">Descredenciar</a>
            <?php }?>
        </div>
    </div>
</form>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['acao']->value == "alterar") {?>
<form id='frmAlterarDados' method='POST'>
                        <!-- Alterar dados da OSE -->
                        <div class="row">
                            <div class='col-md-3 col-sm-6 col-xs-12'>
                               <label for='pesqNmeOm'>OM</label>

                                 <div class="input-group">
                                   <input type='text' class='form-control' name='pesqNmeOm' id='pesqNmeOm' placeholder='Todas' value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['om'];?>
"> 
                                   <span class="input-group-btn">
                                       <button class="btn btn-default" type="button" id='btnPesqNmeOm'>
                                           <span class='glyphicon glyphicon-list'></span>
                                       </button>
                                   </span>
                               </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class='col-md-8 col-sm-12 col-xs-12'>
                                <label>Nome</label>
                                <input type="text" class="form-control" id='NomeOse' name='nomeOse' value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['nome'];?>
">
                            </div>
                        </div>    

                        <div class="row">    
                             <div class='col-md-3 col-sm-12 col-xs-12'>	
                                  <label>Tipo de Pessoa</label>
                                      <select class="c-select" >
                                          
                                          <option id="pesFisica"  <?php if ($_smarty_tpl->tpl_vars['info']->value[0]['tipodoc'] == 'f') {?> selected="selected" <?php }?> >Física</option>
                                          <option id="pesJuridica" <?php if ($_smarty_tpl->tpl_vars['info']->value[0]['tipodoc'] == 'j') {?> selected="selected" <?php }?> >Jurídica</option>
                                          
                                          
                                      </select><span><i class="c-sigsaude"></i></span>
                            </div>

                            <div class='col-md-5 col-sm-12 col-xs-12'>	
                                <div id="divCnpj">
                                    <label>CNPJ</label>
                                    <input class="form-control" type="text" id="CnpjOse" name="cnpjOse" value="<?php if ($_smarty_tpl->tpl_vars['info']->value[0]['tipodoc'] == 'j') {
echo $_smarty_tpl->tpl_vars['info']->value[0]['doc'];
}?>"/>
                                </div>
                                <div id="divCpf">
                                    <label>CPF</label>
                                    <input class="form-control" type="text" id="CpfOse" name="cpfOse" value="<?php if ($_smarty_tpl->tpl_vars['info']->value[0]['tipodoc'] == 'f') {
echo $_smarty_tpl->tpl_vars['info']->value[0]['doc'];
}?>"/>
                                </div>
                            </div>

                        </div>


                        <div class="row">

                            <div class='col-md-3 col-sm-12 col-xs-12'>	
                                <label>CEP</label>
                                <div class="input-group">
                                    <input class="form-control" type="text" maxlength="15" id="CepOse" name="cepOse" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['cep'];?>
"/>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" id="ConsultaCep"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                    </span>
                                </div><!-- /input-group -->
                                <small class="help-block">Digite o CEP e clique no botão.</small>
                            </div><!-- /.col-lg-6 -->

                            <div class='col-md-5 col-sm-12 col-xs-12'>
                                <label>Logradouro</label>
                                <input type="text" class="form-control" id='LogrOse' name='logrOse' value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['logradouro'];?>
">
                            </div>


                        </div>    
                        <div class="row">  
                            <div class='col-md-3 col-sm-12 col-xs-12'>	
                                <label>Complemento</label>
                                <input class="form-control" type="text" maxlength="15" id="ComplOse" name="complOse" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['complemento'];?>
"/>
                            </div>
                            <div class='col-md-3 col-sm-12 col-xs-12'>	
                                <label>Nº</label>
                                <input class="form-control" type="text" maxlength="15" id="NumOse" name="numOse" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['numero'];?>
"/>
                            </div>
                             <div class='col-md-2 col-sm-12 col-xs-12'>	
                                <label>UF</label>
                                <input class="form-control" type="text" maxlength="2" id="UfOse" name="ufOse" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['uf'];?>
"/>
                            </div>
                        </div>


                        <div class="row">
                            <div class='col-md-3 col-sm-12 col-xs-12'>
                                <label>Bairro</label>
                                <input type="text" class="form-control" maxlength="15"  id='BairroOse' name='bairroOse' value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['bairro'];?>
">
                            </div>
                            <div class='col-md-5 col-sm-12 col-xs-12'>	
                                <label>Municipio</label>
                                <input class="form-control" type="text" maxlength="15" id="MunicipioOse" name="municipioOse" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['municipio'];?>
"/>
                            </div>
                        </div>  
                        <hr>
<p><cite>Altere os dados do contrato.</p></cite>                   
<blockquote>

                        <div class='row'>
                            <div class='col-md-2 col-sm-6 col-xs-12'>
                                <label for='credNumCred'>Número do contrato</label>
                                <input type='text' id='numCred' name='numCred' value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['numero'];?>
">
                            </div>
                            <div class='col-md-2 col-sm-6 col-xs-12'>
                                <label for='dataIniVig'>Início da Vigência</label>
                                <input type='text' id='dataIniVig' name='dataIniVig' value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['inicio'];?>
">
                            </div>
                            <div class='col-md-2 col-sm-6 col-xs-12'>
                                <label for='dataFimVig'>Término da Vigência</label>
                                <input type='text' id='dataFimVig' name='dataFimVig' value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['final'];?>
">
                            </div>
                        </div>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['idcontrato'];?>
" name="idContrato"/>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['idose'];?>
" name="idOse"/>
</blockquote>

                        
                        <div class='row'>
                            <div class='col-md-12 col-sm-12 col-xs-12 text-right' id='btnBoxFooter'>
                                <a  class="btn btn-primary" onclick="location.reload()">Voltar</a> 
                                <a  class='btn btn-primary' id='btnAlterar'>Alterar</a>
                            </div>
                        </div>
</form>  






<?php echo '<script'; ?>
>
$(document).ready(function(){
    //$( "#dataIniVig" ).datepicker();
    //$( "#dataFimVig" ).datepicker();
    
    <?php if ($_smarty_tpl->tpl_vars['info']->value[0]['tipodoc'] == 'f') {?> $("#divCnpj").hide(); <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['info']->value[0]['tipodoc'] == 'j') {?> $("#divCpf").hide(); <?php }?>
   
                
                
    $("#pesFisica").click(function(){
        $("#divCnpj").hide();
        $("#CnpjOse").val("");
        $("#divCpf").show();
    });
    
    $("#pesJuridica").click(function(){
        $("#divCnpj").show();
        $("#divCpf").hide();
        $("#CpfOse").val("");
    });
    
    
    
     $('#DtIniContrato').mask("00/00/0000");
     $('#DtFimContrato').mask("00/00/0000");
     $('#CnpjOse').mask("99999999999999");
     $('#CpfOse').mask("99999999999");
     $('#NumOse').mask("00000000");


    //Abre Modal da tabela OM
    $('#siglaOm').on('click', function () {
        carregarTabelaModal(
                '#mdlEscolhaOM',
                '#tabRelacaoOM',
                '<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
om/datatable',
                [{sWidth: '120px'}, null]
                );
    });

    $('body').on('click', '#tabRelacaoOM tbody tr', function () {
        $('#siglaOm').val($(this).find('td:eq(0)').text());
        $('#mdlEscolhaOM').modal('toggle');
    });

    /*
     * CONSUMIR CEP VIA REST
     */
    $("#CepOse").mask("00000000");
    $('body').on('click', '#ConsultaCep', function () {
        var cep = $("#CepOse").val();
        if (cep === "") {
            modAlert("Digite um cep");
            return false;
        }
        var url = "<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
ose/consultaEndereco";
        $.ajax({
            url: url,
            data: {cep : cep},
            type: 'POST',
            success: function (data) {
             
               if(data === 'null'){
                   modAlert("Digite um CEP válido");
                   return false;
               }
                data = jQuery.parseJSON(data);
                
                $("#LogrOse").val(data.tipoLogradouro +  " " + data.logradouro);
                $("#BairroOse").val(data.bairro);
                $("#MunicipioOse").val(data.cidade);
                $("#UfOse").val(data.uf);
            },
             error: function(data) { FailureCallBack(data); }
        });
    });
    //manipular dados da ose
    
     $('body').on('click','#btnAlterar', function(){
        var data = $("#frmAlterarDados").serialize();
        alterarOse(data);
    });
    
     alterarOse = function (data) {
        $.ajax({
            type: 'POST',
            url: '<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
ose/alterarOse',
            data: data, 
            success: function (data) {
                data = jQuery.parseJSON(data);
                 Utilidades.displayMSG(data.msg, data.tipo);
            },
            complete: function () {
                rolarPagina('#divMsgAjax');
                carregarTelaAjax('<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
contrato', FALSE);
            }
        });
       // return false;
    };
});
<?php echo '</script'; ?>
>
  
<?php }?>




<?php echo '<script'; ?>
>
$(document).ready ( function () {
    // inicia a datatable como hide
    $('#resConsultaContrato').hide();

    // Abrir modal com tabela de escolha de OM
    $('body').on ('click','#btnPesqNmeOm', function () {
        $('#pesqNmeOse').val('');
        carregarTabelaModal (
                '#mdlEscolhaOM', 
                '#tabRelacaoOM', 
                '<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
om/datatable', 
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
                '<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
ose/datatable', 
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
            '<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
contrato/resultadopesquisa' 
            );
    }
   
   
    descredenciarOse = function (idOse) {
        $.ajax({
            type: 'POST',
            url: '<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
contrato/descredenciar',
            data: {id:idOse}, 
            success: function (data) {
                 $('#divMsgAjax').html('<div class="alert alert-danger alert-dismissible" role="alert" > <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4>Atenção!</h4><p>' + data + '</p></div>');
            }, 
            complete: function () {
                rolarPagina('#divMsgAjax');
                carregarTelaAjax('<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
contrato', FALSE);
            }
        });
        
        setTimeout(function(){ buscaContrato(); }, 2000);
        
        return false;
    };
    
    credenciarOse = function (idOse) {
        $.ajax({
            type: 'POST',
            url: '<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
contrato/reCredenciar',
            data: {id:idOse}, 
            success: function (data) {
                $('#divMsgAjax').html('<div class="alert alert-danger alert-dismissible" role="alert" > <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4>Atenção!</h4><p>' + data + '</p></div>');
            }, 
            complete: function () {
                rolarPagina('#divMsgAjax');
                carregarTelaAjax('<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
contrato', FALSE);
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
<?php echo '</script'; ?>
>





<?php }
}
