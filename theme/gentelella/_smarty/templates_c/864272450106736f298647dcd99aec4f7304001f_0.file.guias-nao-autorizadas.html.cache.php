<?php
/* Smarty version 3.1.30, created on 2017-11-01 10:47:52
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\guias\guias-nao-autorizadas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f9c2789b21a3_18954294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '864272450106736f298647dcd99aec4f7304001f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\guias\\guias-nao-autorizadas.html',
      1 => 1507731565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f9c2789b21a3_18954294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1011892059f9c2789b21a4_08279125';
?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 


<?php if ($_smarty_tpl->tpl_vars['dadosNaoAutorizados']->value[0][0] == '') {?>
<div class="col-md-6 col-sm-6 col-xs-12">
	<div class="alert alert-warning" role="alert">Nenhuma informação encontrada para guias não autorizadas</div>
</div>
<?php } else { ?>




<div class="col-md-6 col-sm-6 col-xs-12">
<div class="x_panel">
      <div class="x_title">
        <span style="float:right; padding:2px"><a href="#" class="export">Exportar Tabela  &nbsp;<i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table class="table" id="tb">
          <thead>
            <tr>
           	  <th colspan="2"> <h2>Guias não autorizadas por profissional</h2></th>
            </tr>
            <tr>
              <th>Nome</th>
              <th>Quantidade</th>
            </tr>
          </thead>
          <tbody>
          <?php
$__section_x_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dadosNaoAutorizados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_1_total = $__section_x_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_1_total != 0) {
for ($__section_x_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_1_iteration <= $__section_x_1_total; $__section_x_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
	 		<tr>
              <td><?php echo $_smarty_tpl->tpl_vars['dadosNaoAutorizados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nm_pessoa'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['dadosNaoAutorizados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['quantidade'];?>
</td>
            </tr>
		  <?php
}
}
if ($__section_x_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_1_saved;
}
?>
		  <tr>
            <td>TOTAL</td>
            <td><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>      
	      
	<?php }?>	      

<!-- Pie Graph 

<div class="col-md-6 col-sm-6 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2>
				Representação gráfica
			</h2>
			 
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<iframe
				style="width: 100%; display: block; border: 0px none; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"
				class="chartjs-hidden-iframe"></iframe>
			<canvas height="188" width="377" style="width: 377px; height: 188px;"
				id="pieChart"></canvas>
		</div>
	</div>
</div>
	



 
<?php echo '<script'; ?>
>
$('document')
		.ready(
				function() {
					
					
					
					
					// Pie chart
					if ($('#pieChart').length) {

						var ctx = document.getElementById("pieChart");
						var data = {
							datasets : [ {
								data : [ <?php echo implode(', ',$_smarty_tpl->tpl_vars['dadosQuantidade']->value);?>
 ],
								backgroundColor : [ "#455C73", "#9B59B6",
										"#BDC3C7", "#26B99A", "#3498DB" ],
								label : 'My dataset' // for legend
							} ],
							labels : [ <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
 ]
						};

						
						
						var pieChart = new Chart(ctx, {
							data : data,
							type : 'pie',
							 options: {
								 legend: {
										
									 labels: [ <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
 ]
							            
							     }
							 }
						});

					}

				});
<?php echo '</script'; ?>
>
 


--> 
<?php }
}
