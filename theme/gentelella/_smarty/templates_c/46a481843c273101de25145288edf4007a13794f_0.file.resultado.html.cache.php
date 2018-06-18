<?php
/* Smarty version 3.1.30, created on 2017-10-31 13:54:59
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\estatisticas_dsm\resultado.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f89cd3b3f647_65631548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46a481843c273101de25145288edf4007a13794f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\estatisticas_dsm\\resultado.html',
      1 => 1507731295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f89cd3b3f647_65631548 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '209474048359f89cd3827338_93344729';
?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 







<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 1) {?>

<?php if ($_smarty_tpl->tpl_vars['dados']->value[0][0] == '') {?>
<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="alert alert-warning" role="alert">Nenhuma informação encontrada ao pesquisar o total de guias de exames/procedimentos.</div>
</div>
<?php } else { ?>

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">

            <span style="float:right; padding:2px"><a href="#" class="export">Exportar Tabela  &nbsp;<i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>

            <div class="clearfix"></div>
        </div>
        <div class="x_content over">





            <table class="table table-bordered table-inverse" border="0" cellspacing="0" cellpadding="0">
                <thead>
                    <tr >
                        <td rowspan="3">
                            OM
                        </td>
                        <td colspan="8">
                            <p>GUIAS DE EMERGÊNCIA (EMITIDAS SEM AUTORIZAÇÃO DA DSM)</p>
                        </td><td colspan="4" rowspan="2" >
                            <p>GUIAS DE CONSULTA &lt; 120,00</p>
                        </td>
                        <td colspan="7" rowspan="2" >
                            <p>EXAMES/PROC &lt; 120</p>
                        </td>
                        <td colspan="7" rowspan="2" >
                            <p>GUIAS ANALISADAS PELO DSM-60</p>
                        </td>
                        <td colspan="4" rowspan="2" >
                            <p>GUIAS DO HNMD</p>
                        </td>

                    </tr>
                    <tr >
                        <td colspan="4" >
                            <p>EXAMES/PROC URGENTES</p></td>
                        <td colspan="4" >
                            <p>INTERNAÇÃO EMERGÊNCIA</p>
                        </td>

                    </tr>
                    
                    <tr >
                        <td ><p>ABERTA</p>
                        </td>
                        <td >
                            <p>ANDAMENTO</p>
                        </td>
                        <td >
                            <p>CANCELADA</p>
                        </td>
                        <td >
                            <p>FECHADA</p>
                        </td><td >
                            <p>ABERTA</p>
                        </td>
                        <td >
                            <p>ANDAMENTO</p>
                        </td>
                        <td >
                            <p>CANCELADA</p>
                        </td>
                        <td >
                            <p>FECHADA</p>
                        </td><td >
                            <p>ABERTA</p>
                        </td>
                        <td >
                            <p>ANDAMENTO</p>
                        </td>
                        <td >
                            <p>CANCELADA</p>
                        </td>
                        <td >
                            <p>FECHADA</p>
                        </td>
                        <td >
                            <p>ABERTA</p>
                        </td>
                        <td >
                            <p>ANDAMENTO</p>
                        </td>
                        <td >
                            <p>CANCELADA</p>
                        </td><td >
                            <p>FECHADA</p>
                        </td>
                        <td >
                            <p>AUTORIZADA</p>
                        </td>
                        <td >
                            <p>NÃO AUTORIZADA</p>
                        </td>
                        <td >
                            <p>EM ANÁLISE</p>
                        </td>
                        <td >
                            <p>ABERTA</p>
                        </td>
                        <td >
                            <p>ANDAMENTO</p>
                        </td>
                        <td >
                            <p>CANCELADA</p>
                        </td>
                        <td >
                            <p>FECHADA</p>
                        </td>
                        <td >
                            <p>AUTORIZADA</p>
                        </td>
                        <td >
                            <p>NÃO AUTORIZADA</p>
                        </td>
                        <td >
                            <p>EM ANÁLISE</p>
                        </td><td >
                            <p>ABERTA</p>
                        </td>
                        <td >
                            <p>ANDAMENTO</p>
                        </td>
                        <td >
                            <p>CANCELADA</p>
                        </td>
                        <td >
                            <p>FECHADA</p>
                        </td>

                    </tr>
                </thead>

                <tbody>
                    <?php
$__section_x_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total != 0) {
for ($__section_x_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_0_iteration <= $__section_x_0_total; $__section_x_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['sg_om'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_proc_urg'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_proc_urg'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_proc_urg'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_proc_urg'];?>
</td>
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_int_urg'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_int_urg'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_int_urg'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_int_urg'];?>
</td>
                            
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_cons'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_cons'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_cons'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_cons'];?>
</td>
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_exames_analises'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_exames_analises'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_exames_analises'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_exames_analises'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['autorizada_exames_analises'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nao_autorizada_exames_analises'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_analise_exames_analises'];?>
</td>
                       
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['autorizada_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nao_autorizada_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_analise_analisadas_pelo_60'];?>
</td>
                       
                       <!--
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_nao_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_nao_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_nao_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_nao_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['autorizada_nao_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nao_autorizada_nao_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_analise_nao_analisadas_pelo_60'];?>
</td>
                       -->
                       
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_hnmd_nao_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_hnmd_nao_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_hnmd_nao_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_hnmd_nao_analisadas_pelo_60'];?>
</td>
                        
                       
                    </tr>
                    <?php
}
}
if ($__section_x_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_0_saved;
}
?>
                </tbody>

            </table>

        </div>
    </div>

</div>
<?php }
}?>















<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 2) {?>

<?php if ($_smarty_tpl->tpl_vars['dados']->value[0][0] == '') {?>
<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="alert alert-warning" role="alert">Nenhuma informação encontrada ao pesquisar o total de guias de exames/procedimentos.</div>
</div>
<?php } else { ?>

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">

            <span style="float:right; padding:2px"><a href="#" class="export">Exportar Tabela  &nbsp;<i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>

            <div class="clearfix"></div>
        </div>
        <div class="x_content over">





            <table class="table table-bordered table-inverse" border="0" cellspacing="0" cellpadding="0">
                <thead>
                    <tr >
                        <td rowspan="3">
                            DN
                        </td>
                        <td colspan="8">
                            <p>GUIAS DE EMERGÊNCIA (EMITIDAS SEM AUTORIZAÇÃO DA DSM)</p>
                        </td><td colspan="4" rowspan="2" >
                            <p>GUIAS DE CONSULTA &lt; 120,00</p>
                        </td>
                        <td colspan="7" rowspan="2" >
                            <p>EXAMES/PROC &lt; 120</p>
                        </td>
                        <td colspan="7" rowspan="2" >
                            <p>GUIAS ANALISADAS PELO DSM-60</p>
                        </td>
                        <td colspan="4" rowspan="2" >
                            <p>GUIAS DO HNMD</p>
                        </td>

                    </tr>
                    <tr >
                        <td colspan="4" >
                            <p>EXAMES/PROC URGENTES</p></td>
                        <td colspan="4" >
                            <p>INTERNAÇÃO EMERGÊNCIA</p>
                        </td>

                    </tr>
                    
                    <tr >
                        <td ><p>ABERTA</p>
                        </td>
                        <td >
                            <p>ANDAMENTO</p>
                        </td>
                        <td >
                            <p>CANCELADA</p>
                        </td>
                        <td >
                            <p>FECHADA</p>
                        </td><td >
                            <p>ABERTA</p>
                        </td>
                        <td >
                            <p>ANDAMENTO</p>
                        </td>
                        <td >
                            <p>CANCELADA</p>
                        </td>
                        <td >
                            <p>FECHADA</p>
                        </td><td >
                            <p>ABERTA</p>
                        </td>
                        <td >
                            <p>ANDAMENTO</p>
                        </td>
                        <td >
                            <p>CANCELADA</p>
                        </td>
                        <td >
                            <p>FECHADA</p>
                        </td>
                        <td >
                            <p>ABERTA</p>
                        </td>
                        <td >
                            <p>ANDAMENTO</p>
                        </td>
                        <td >
                            <p>CANCELADA</p>
                        </td><td >
                            <p>FECHADA</p>
                        </td>
                        <td >
                            <p>AUTORIZADA</p>
                        </td>
                        <td >
                            <p>NÃO AUTORIZADA</p>
                        </td>
                        <td >
                            <p>EM ANÁLISE</p>
                        </td>
                        <td >
                            <p>ABERTA</p>
                        </td>
                        <td >
                            <p>ANDAMENTO</p>
                        </td>
                        <td >
                            <p>CANCELADA</p>
                        </td>
                        <td >
                            <p>FECHADA</p>
                        </td>
                        <td >
                            <p>AUTORIZADA</p>
                        </td>
                        <td >
                            <p>NÃO AUTORIZADA</p>
                        </td>
                        <td >
                            <p>EM ANÁLISE</p>
                        </td><td >
                            <p>ABERTA</p>
                        </td>
                        <td >
                            <p>ANDAMENTO</p>
                        </td>
                        <td >
                            <p>CANCELADA</p>
                        </td>
                        <td >
                            <p>FECHADA</p>
                        </td>

                    </tr>
                </thead>

                <tbody>
                    <?php
$__section_x_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_1_total = $__section_x_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_1_total != 0) {
for ($__section_x_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_1_iteration <= $__section_x_1_total; $__section_x_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['sg_dn'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_proc_urg'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_proc_urg'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_proc_urg'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_proc_urg'];?>
</td>
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_int'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_int'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_int'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_int'];?>
</td>
                            
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_cons'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_cons'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_cons'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_cons'];?>
</td>
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_exames_analises'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_exames_analises'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_exames_analises'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_exames_analises'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['autorizada_exames_analises'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nao_autorizada_exames_analises'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_analise_exames_analises'];?>
</td>
                       
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['autorizada_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nao_autorizada_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_analise_analisadas_pelo_60'];?>
</td>
                       
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_hnmd_nao_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_hnmd_nao_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_hnmd_nao_analisadas_pelo_60'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_hnmd_nao_analisadas_pelo_60'];?>
</td>
                       
                    </tr>
                    <?php
}
}
if ($__section_x_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_1_saved;
}
?>
                </tbody>

            </table>

        </div>
    </div>

</div>
<?php }
}?>





<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 3) {
if ($_smarty_tpl->tpl_vars['dados']->value[0][0] == '') {?>
<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="alert alert-warning" role="alert">Nenhuma informação encontrada ao pesquisar o total de guias de exames/procedimentos.</div>
</div>
<?php } else { ?>

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">

            <span style="float:right; padding:2px"><a href="#" class="export">Exportar Tabela  &nbsp;<i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>

            <div class="clearfix"></div>
        </div>
        <div class="x_content over">
            <table class="table table-bordered table-inverse" border="0" cellspacing="0" cellpadding="0">
                <thead>
                    
                    <tr>
                        <th colspan="9">GUIAS DE CONSULTA</th>
                    </tr>
                    <tr>
                        <th>OM</th>
                        <th>ESPECIALIDADE</th>
                        <th>ABERTA</th>
                        <th>ANDAMENTO</th>
                        <th>FECHADA</th>
                        <th>CANCELADA</th>
                        <th>AUTORIZADA</th>
                        <th>NÃO AUTORIZADA</th>
                        <th>EM ANÁLISE</th>
                    </tr>
                    
                    
                </thead>

                <tbody>
                    <?php
$__section_x_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_2_total = $__section_x_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_2_total != 0) {
for ($__section_x_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_2_iteration <= $__section_x_2_total; $__section_x_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['sg_om'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['ds_cbos'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_cons'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_cons'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_cons'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_cons'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['autorizada_cons'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nao_autorizada_cons'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_analise_cons'];?>
</td>
                    </tr>
                    <?php
}
}
if ($__section_x_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_2_saved;
}
?>
                </tbody>

            </table>

        </div>
    </div>

</div>
<?php }
}?>



<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 4) {
if ($_smarty_tpl->tpl_vars['dados']->value[0][0] == '') {?>
<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="alert alert-warning" role="alert">Nenhuma informação encontrada ao pesquisar o total de guias de exames/procedimentos.</div>
</div>
<?php } else { ?>

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">

            <span style="float:right; padding:2px"><a href="#" class="export">Exportar Tabela  &nbsp;<i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>

            <div class="clearfix"></div>
        </div>
        <div class="x_content over">
            <table class="table table-bordered table-inverse" border="0" cellspacing="0" cellpadding="0">
                <thead>
                    
                    <tr>
                        <th colspan="12">PROCEDIMENTOS MAIORES QUE 120 REAIS</th>
                    </tr>
                    <tr>
                        <th>OM</th>
                        <th>TIPO DA GUIA</th>
                        <th>PROCEDIMENTO</th>
                        <th>DESCRIÇÃO DO PROCEDIMENTO</th>
                        <th>GRUPO DO PROCEDIMENTO</th>
                        <th>ABERTA</th>
                        <th>ANDAMENTO</th>
                        <th>CANCELADA</th>
                        <th>FECHADA</th>
                        <th>AUTORIZADA</th>
                        <th>NÃO AUTORIZADA</th>
                        <th>EM ANÁLISE</th>
                    </tr>
                    
                    
                </thead>

                <tbody>
                    <?php
$__section_x_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_3_total = $__section_x_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_3_total != 0) {
for ($__section_x_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_3_iteration <= $__section_x_3_total; $__section_x_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['sg_om'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['texto'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['id_proc'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['ds_proc'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['ds_grupo'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_maior_120'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_maior_120'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_maior_120'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_maior_120'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['autorizada_maior_120'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nao_autorizada_maior_120'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_analise_maior_120'];?>
</td>
                    </tr>
                    <?php
}
}
if ($__section_x_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_3_saved;
}
?>
                </tbody>

            </table>

        </div>
    </div>

</div>
<?php }
}?>




<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 5) {
if ($_smarty_tpl->tpl_vars['dados']->value[0][0] == '') {?>
<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="alert alert-warning" role="alert">Nenhuma informação encontrada ao pesquisar o total de guias de exames/procedimentos.</div>
</div>
<?php } else { ?>

<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">

            <span style="float:right; padding:2px"><a href="#" class="export">Exportar Tabela  &nbsp;<i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>

            <div class="clearfix"></div>
        </div>
        <div class="x_content over">
            <table class="table table-bordered table-inverse" border="0" cellspacing="0" cellpadding="0">
                <thead>
                    
                    <tr>
                        <th colspan="9">PROCEDIMENTOS MENORES QUE 120 REAIS</th>
                    </tr>
                    <tr>
                        <th>OM</th>
                        <th>TIPO DA GUIA</th>
                        <th>PROCEDIMENTO</th>
                        <th>DESCRIÇÃO DO PROCEDIMENTO</th>
                        <th>GRUPO DO PROCEDIMENTO</th>
                        <th>ABERTA</th>
                        <th>ANDAMENTO</th>
                        <th>CANCELADA</th>
                        <th>FECHADA</th>
                        
                    </tr>
                    
                    
                </thead>

                <tbody>
                    <?php
$__section_x_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_4_total = $__section_x_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_4_total != 0) {
for ($__section_x_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_4_iteration <= $__section_x_4_total; $__section_x_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['sg_om'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['texto'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['id_proc'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['ds_proc'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['ds_grupo'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aberta_menor_120'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['em_andamento_menor120'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cancelada_menor120'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fechada_menor120'];?>
</td>
                    </tr>
                    <?php
}
}
if ($__section_x_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_4_saved;
}
?>
                </tbody>

            </table>

        </div>
    </div>

</div>
<?php }
}?>

<?php }
}
