<?php
/* Smarty version 3.1.30, created on 2017-09-06 13:05:33
  from "C:\xampp\htdocs\produtividade\views\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b01ccde6ba70_26505790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c42d05427869d10c67462f38848fbf1ad8f83653' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\home.html',
      1 => 1504702952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b01ccde6ba70_26505790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '166049139159b01ccdd77e75_87779965';
?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<div class="title_left">
  <h3>Estatísicas do SSM</h3>
</div>


<!--
<div class="row top_tiles">
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-users"></i></div>
      <div class="count">179</div>
      <h3>UsuÃ¡rios</h3>
      <p>usuÃ¡rios ativos no sistema.</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-comments-o"></i></div>
      <div class="count">17</div>
      <h3>SolicitaÃ§Ãµes</h3>
      <p>Abertas ou em analise.</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-sort-amount-asc"></i></div>
      <div class="count">65</div>
      <h3>IntervenÃ§Ã£o</h3>
      <p>SolicitaÃ§Ãµes que sofreram intervenÃ§Ã£o.</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-check-square-o"></i></div>
      <div class="count">50</div>
      <h3>Ratificadas</h3>
      <p>SolicitaÃ§Ãµes ratificadas</p>
    </div>
  </div>
</div>
-->

<!-- Graficos informativos 






<div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>GrÃ¡fico<small>Guias Geradas</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="lineChart"></canvas>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>GrÃ¡fico<small> Guias Geradas</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="mybarChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
 
 
 -->

<!-- Tabela com resumo das informaÃ§Ãµes
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Acompanhamento <small>Guias pendentes</small></h2>
        <span style="float:right; padding:2px"><a href="#" class="export"><i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>	
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <table class="table" id="tb">
          <thead>
            <tr>
              <th>SolicitaÃ§Ã£o</th>
              <th>Data</th>
              <th>OM Origem</th>
              <th>Clinica</th>
              <th>OSE</th>
              <th>Status</th>
              <th>EMERG?</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1233 </th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-danger">Sim</span></td>
            </tr>
            <tr>
              <th scope="row">1233 </th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-info">NÃ£o</span></td>
            </tr>
            <tr>
              <th scope="row">1233 </th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-info">NÃ£o</span></td>
            </tr>
            <tr>
              <th scope="row">1233 </th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-danger">Sim</span></td>
            </tr>
            <tr>
              <th scope="row">1233 </th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-danger">Sim</span></td>
            </tr>
            <tr>
              <th scope="row">1233 </th>
              <td>30/02/2017</td>
              <td>Com 8DN</td>
              <td>Dermatologia</td>
              <td>Hospital de Exemplo</td>
              <td>Aberta</td>
              <td><span class="label label-info">NÃ£o</span></td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>








-->










<?php }
}
