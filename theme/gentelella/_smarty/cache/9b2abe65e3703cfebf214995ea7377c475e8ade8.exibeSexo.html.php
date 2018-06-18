<?php
/* Smarty version 3.1.30, created on 2017-10-27 15:08:41
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\demografico\exibeSexo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f3681901ae00_10545008',
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
  'cache_lifetime' => 3600,
),true)) {
function content_59f3681901ae00_10545008 (Smarty_Internal_Template $_smarty_tpl) {
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
                                                        <tr>
                                <td>Datas incorretas</td>              
                                <td>2125</td>
                                <td>3165</td>
                            </tr>
                                                       <tr>
                                <td>Acima de 40 anos</td>              
                                <td>110333</td>
                                <td>153541</td>
                            </tr>
                                                       <tr>
                                <td>30-39</td>              
                                <td>22579</td>
                                <td>31533</td>
                            </tr>
                                                       <tr>
                                <td>20-29</td>              
                                <td>41675</td>
                                <td>32257</td>
                            </tr>
                                                       <tr>
                                <td>10-19</td>              
                                <td>28866</td>
                                <td>24090</td>
                            </tr>
                                                       <tr>
                                <td>00-09</td>              
                                <td>17584</td>
                                <td>17496</td>
                            </tr>
                                                      <tr>
                               <td>TOTAL</td>
                               <td>223162</td>
                               <td>262082</td>
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
		
		
<script>

        document.getElementById("mybarChart").innerHTML = '';

        $('document').ready(

        function() {
                var ctx = document.getElementById("mybarChart");
                var mybarChart = new Chart(ctx, {
                        type : 'horizontalBar',
                        data : {
                                labels : [ "Datas incorretas","Acima de 40 anos","30-39","20-29","10-19","00-09" ],//O array deve ser invertido aqui
                                                datasets : [ {
                                                        label : 'Femininos',
                                                        backgroundColor : "#F6899A",
                                                        data : [ 3165,153541,31533,32257,24090,17496 ]
                                }, {
                                        label : 'Masculinos',
                                        backgroundColor : "#03586A",
                                        data : [ 2125,110333,22579,41675,28866,17584 ]
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
</script>
<?php }
}
