<?php
/* Smarty version 3.1.30, created on 2017-10-31 14:30:21
  from "C:\xampp\htdocs\estatistica_ssm\views\basico\relatorios\estatisticas_hnbra\total-guias.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f8a51d847294_70902504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32ddf6ed01708e8ee5980c182f9700934584b6de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\estatistica_ssm\\views\\basico\\relatorios\\estatisticas_hnbra\\total-guias.html',
      1 => 1508151183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f8a51d847294_70902504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '163543389159f8a51d4b5189_33628760';
?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 1) {
if ($_smarty_tpl->tpl_vars['exames']->value[0][0] == '') {?>
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
	        <div class="x_content">
	          <table class="table" id="tb">
	            <thead>
	              <tr>
	                <th colspan="3"><h2>Total de Guias de exames emitidas</h2></th>
	              </tr>
	              <tr>
	                <th>Procedimento</th>
	                <th>Total de exames</th>
                        <th>Total de análises</th>
	              </tr>
	            </thead>
	            <tbody>
	          	<?php
$__section_x_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['exames']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total != 0) {
for ($__section_x_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_0_iteration <= $__section_x_0_total; $__section_x_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
                            <tr>
                              <td><?php echo $_smarty_tpl->tpl_vars['exames']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['a'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['exames']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['exames_procedimentos'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['exames']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['analise_clinicas'];?>
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
<?php }?>	

<?php }?>





<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 2) {
if ($_smarty_tpl->tpl_vars['consultas']->value[0][0] == '') {?>
<div class="col-md-12 col-sm-6 col-xs-12">
	<div class="alert alert-warning" role="alert">Nenhuma informação encontrada ao pesquisar o total de guias  de consulta.</div>
</div>
<?php } else { ?>

<div class="col-md-12 col-sm-6 col-xs-12">
            <div class="x_panel">
	        <div class="x_title">
	          
	          <span style="float:right; padding:2px"><a href="#" class="export">Exportar Tabela  &nbsp;<i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>
                  
			<div class="clearfix"></div>
	        </div>
	        <div class="x_content">
	          <table class="table" id="tb">
	            <thead>
	              <tr>
	                <th colspan="2"><h2>Total de Guias de consulta emitidas</h2></th>
	              </tr>
	              <tr>
	                <th>Clinica</th>
	                <th>Guia</th>
	              </tr>
	            </thead>
	            <tbody>
	          	<?php
$__section_x_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['consultas']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_1_total = $__section_x_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_1_total != 0) {
for ($__section_x_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_1_iteration <= $__section_x_1_total; $__section_x_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
				  <tr>
	                <td><?php echo $_smarty_tpl->tpl_vars['consultas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['ds_cbos'];?>
</td>
	                <td><?php echo $_smarty_tpl->tpl_vars['consultas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['guias'];?>
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
<?php }?>	
<?php }?>




<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 3) {
if ($_smarty_tpl->tpl_vars['consultaUsuario']->value[0][0] == '') {?>
<div class="col-md-12 col-sm-6 col-xs-12">
	<div class="alert alert-warning" role="alert">Nenhuma informação encontrada pesquisa de exames/procedimentos por usuários.</div>
</div>
<?php } else { ?>

<div class="col-md-12 col-sm-6 col-xs-12">
            <div class="x_panel">
	        <div class="x_title">
	          
	          <span style="float:right; padding:2px"><a href="#" class="export">Exportar Tabela  &nbsp;<i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>
                  
			<div class="clearfix"></div>
	        </div>
	        <div class="x_content">
	          <table class="table" id="tb">
	            <thead>
	              <tr>
	                <th colspan="4"><h2>Total de Guias de Exame e procedimentos emitidas por usuários</h2></th>
	              </tr>
	              <tr>
	                <th>NIP Titular</th>
	                <th>NIP Dependente</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
	              </tr>
	            </thead>
	            <tbody>
	          	<?php
$__section_x_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['consultaUsuario']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_2_total = $__section_x_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_2_total != 0) {
for ($__section_x_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_2_iteration <= $__section_x_2_total; $__section_x_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
				  <tr>
	                <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nip_tit'];?>
</td>
	                <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nip_vinc'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nm_pessoa'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['qtd'];?>
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
<?php }?>	
<?php }?>





<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 4) {
if ($_smarty_tpl->tpl_vars['consultaUsuario']->value[0][0] == '') {?>
<div class="col-md-12 col-sm-6 col-xs-12">
	<div class="alert alert-warning" role="alert">Nenhuma informação encontrada para guias  de consulta por usuários.</div>
</div>
<?php } else { ?>

<div class="col-md-12 col-sm-6 col-xs-12">
            <div class="x_panel">
	        <div class="x_title">
	          
	          <span style="float:right; padding:2px"><a href="#" class="export">Exportar Tabela  &nbsp;<i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>
                  
			<div class="clearfix"></div>
	        </div>
	        <div class="x_content">
	          <table class="table" id="tb">
	            <thead>
	              <tr>
	                <th colspan="4"><h2>Total de Guias de consultas emitidas por usuários</h2></th>
	              </tr>
	              <tr>
	                <th>NIP Titular</th>
	                <th>NIP Dependente</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
	              </tr>
	            </thead>
	            <tbody>
	          	<?php
$__section_x_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['consultaUsuario']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_3_total = $__section_x_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_3_total != 0) {
for ($__section_x_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_3_iteration <= $__section_x_3_total; $__section_x_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
				  <tr>
	                <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nip_tit'];?>
</td>
	                <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nip_vinc'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nm_pessoa'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['qtd'];?>
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
<?php }?>	
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 5) {
if ($_smarty_tpl->tpl_vars['consultaUsuario']->value[0][0] == '') {?>
<div class="col-md-12 col-sm-6 col-xs-12">
	<div class="alert alert-warning" role="alert">Nenhuma informação encontrada para Exames/procedimentos por OSE.</div>
</div>
<?php } else { ?>

<div class="col-md-12 col-sm-6 col-xs-12">
            <div class="x_panel">
	        <div class="x_title">
	          
	          <span style="float:right; padding:2px"><a href="#" class="export">Exportar Tabela  &nbsp;<i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>
                  
			<div class="clearfix"></div>
	        </div>
	        <div class="x_content">
	          <table class="table" id="tb">
	            <thead>
	              <tr>
	                <th colspan="5"><h2>Total de exames/procedimentos por OSE</h2></th>
	              </tr>
	              <tr>
	                <th>CNPJ/CPF</th>
	                <th>Nome da OSE</th>
                        <th>Grupo do procedimento</th>
                        <th>Quantidade de Exames/Procedimentos</th>
                        <th>Quantidade de Análises clínicas</th>
	              </tr>
	            </thead>
	            <tbody>
	          	<?php
$__section_x_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['consultaUsuario']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_4_total = $__section_x_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_4_total != 0) {
for ($__section_x_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_4_iteration <= $__section_x_4_total; $__section_x_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
				  <tr>
	                <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cnpj_cpf'];?>
</td>
	                <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nome'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['ds_grupo'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['exames_procedimentos'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['analise_clinicas'];?>
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
<?php }?>	
<?php }?>




<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 6) {
if ($_smarty_tpl->tpl_vars['consultaUsuario']->value[0][0] == '') {?>
<div class="col-md-12 col-sm-6 col-xs-12">
	<div class="alert alert-warning" role="alert">Nenhuma informação encontrada ao pesquisar total de consultas por OSE.</div>
</div>
<?php } else { ?>

<div class="col-md-12 col-sm-6 col-xs-12">
            <div class="x_panel">
	        <div class="x_title">
	          
	          <span style="float:right; padding:2px"><a href="#" class="export">Exportar Tabela  &nbsp;<i class="fa fa-file-excel-o fa-4" aria-hidden="true"></i></a> </span>
                  
			<div class="clearfix"></div>
	        </div>
	        <div class="x_content">
	          <table class="table" id="tb">
	            <thead>
	              <tr>
	                <th colspan="3"><h2>Total de consultas por OSE</h2></th>
	              </tr>
	              <tr>
	                <th>CNPJ/CPF</th>
	                <th>Nome da OSE</th>
                        <th>Quantidade de consultas</th>
                        
	              </tr>
	            </thead>
	            <tbody>
	          	<?php
$__section_x_5_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['consultaUsuario']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_5_total = $__section_x_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_5_total != 0) {
for ($__section_x_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_5_iteration <= $__section_x_5_total; $__section_x_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
                      <tr>
	                <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['cnpj_cpf'];?>
</td>
	                <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['nome'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['consultaUsuario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['guias'];?>
</td>
                      </tr>
			<?php
}
}
if ($__section_x_5_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_5_saved;
}
?>
		    </tbody>
	          </table>
	        </div>
	    </div>
      
</div>
<?php }?>	
<?php }?>

<?php }
}
