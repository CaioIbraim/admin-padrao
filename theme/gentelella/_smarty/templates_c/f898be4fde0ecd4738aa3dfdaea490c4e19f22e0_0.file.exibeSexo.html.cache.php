<?php
/* Smarty version 3.1.30, created on 2017-10-27 15:08:40
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\demografico\exibeSexo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f36818f12e69_19836064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f898be4fde0ecd4738aa3dfdaea490c4e19f22e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\demografico\\exibeSexo.html',
      1 => 1507037685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f36818f12e69_19836064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '120624517459f36818c9a0d6_97186994';
?>
	<!-- Gráfico de barras verticais -->
        <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                        <div class="x_title">
                                <h2>Relação de usuários por sexo </h2>
                                
                                <span style="float:right; padding:2px"><a href="#" class="export">Exportar Tabela  &nbsp;<i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>
                                <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home">Quantitativo</a></li>
                          <li><a data-toggle="tab" href="#menu1">Analítico</a></li>
                        </ul>

                        <div class="tab-content">
                          <div id="home" class="tab-pane fade in active">
                          
                           <table class="table" id="tb">
                            <thead>
                              <tr>
                                <th>Idades</th>
                                <th>Homens</th>
                                <th>Mulheres</th>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['idade'];?>
</td>              
                                <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['masc'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fem'];?>
</td>
                            </tr>
                           <?php
}
}
if ($__section_x_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_0_saved;
}
?>
                           <tr>
                               <td>TOTAL</td>
                               <td><?php echo $_smarty_tpl->tpl_vars['totalHomem']->value;?>
</td>
                               <td><?php echo $_smarty_tpl->tpl_vars['totalMulher']->value;?>
</td>
                           </tr>
                           
                            </tbody>
                          </table>
                          
                          
                          </div>
                          <div id="menu1" class="tab-pane fade">
                            
                                <iframe
                                        style="width: 100%; display: block; border: 0px none; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"
                                        class="chartjs-hidden-iframe"></iframe>
                                <canvas id="mybarChart"></canvas>
                                
                          </div>
                        </div>
                            
                            
                        </div>
                </div>
        </div>
		
		
<?php echo '<script'; ?>
>

        document.getElementById("mybarChart").innerHTML = '';

        $('document').ready(

        function() {
                var ctx = document.getElementById("mybarChart");
                var mybarChart = new Chart(ctx, {
                        type : 'horizontalBar',
                        data : {
                                labels : [ <?php echo $_smarty_tpl->tpl_vars['amplitude']->value;?>
 ],//O array deve ser invertido aqui
                                                datasets : [ {
                                                        label : 'Femininos',
                                                        backgroundColor : "#F6899A",
                                                        data : [ <?php echo $_smarty_tpl->tpl_vars['mulher']->value;?>
 ]
                                }, {
                                        label : 'Masculinos',
                                        backgroundColor : "#03586A",
                                        data : [ <?php echo $_smarty_tpl->tpl_vars['homem']->value;?>
 ]
                                                        }
                                                        ]
                        },
                        options : {


                                scales : {
                                        yAxes : [ {
                                                ticks : {
                                                        beginAtZero : true
                                                }
                                        } ]
                                }
                        }
                });
        });
<?php echo '</script'; ?>
>
<?php }
}
