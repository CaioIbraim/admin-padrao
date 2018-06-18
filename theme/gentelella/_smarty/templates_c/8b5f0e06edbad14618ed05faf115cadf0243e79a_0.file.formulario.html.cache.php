<?php
/* Smarty version 3.1.30, created on 2017-01-30 15:26:55
  from "D:\www\catalogo\views\usuarios-extra-mb\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588f775f8f4fc4_91645777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b5f0e06edbad14618ed05faf115cadf0243e79a' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\usuarios-extra-mb\\formulario.html',
      1 => 1485522559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588f775f8f4fc4_91645777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20489588f775f2d67d7_78310667';
?>
<!-- script e css da tela -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.mask.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.validate/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery.validate/localization/messages_pt_BR.js"><?php echo '</script'; ?>
>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.js"><?php echo '</script'; ?>
>
<!-- script e css da tela -->

<div id="msgAjax"><?php echo $_smarty_tpl->tpl_vars['msgErro']->value;?>
</div>
<div class="page-header sigsaude"><h2><?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;
if ($_smarty_tpl->tpl_vars['subTituloPagina']->value != '') {?> <small><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['subTituloPagina']->value;?>
</small><?php }?></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">


	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#DadosPessoais" aria-controls="DadosPessoais" role="tab" data-toggle="tab">Dados Pessoais</a></li>
	    <li role="presentation"><a href="#Documentos" aria-controls="Documentos" role="tab" data-toggle="tab">Documentos</a></li>
	    <li role="presentation"><a href="#Contatos" aria-controls="Contatos" role="tab" data-toggle="tab">Contatos</a></li>
	</ul>
	
	<div class="tab-content">
	
		
		<div role="tabpanel" class="tab-pane active" id="DadosPessoais">
			<div class="form-group">
		    	<label for="i_pssoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome</label>
		    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 obrigatorio">
		      		<input type="text" id="i_pssoa" name="i_pssoa" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['i_pssoa'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Nome" maxlength="80" class="form-control" required>
		    	</div>
			
		    	<label for="d_nasc_pssoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nascimento</label>
		    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
		      		<input type="text" id="d_nasc_pssoa" name="d_nasc_pssoa" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['d_nasc_pssoa'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Nascimento" maxlength="10" class="form-control">
		    	</div>    	
		  	</div>
		  	
			<div class="form-group">
				<label for="c_est_cvil" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Estado Civil</label>
		    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
		    		<select id="c_est_cvil" name="c_est_cvil" class="c-select" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?>>
		    		<option value="">Selecione</option>
		    		<?php
$__section_x_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrEstadoCivil']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total != 0) {
for ($__section_x_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_0_iteration <= $__section_x_0_total; $__section_x_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
		    			<option value="<?php echo $_smarty_tpl->tpl_vars['arrEstadoCivil']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['c_est_cvil'];?>
" <?php if ($_smarty_tpl->tpl_vars['arrEstadoCivil']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['c_est_cvil'] == $_smarty_tpl->tpl_vars['arrDados']->value['c_est_cvil']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['arrEstadoCivil']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['r_est_cvil'];?>
</option>
		    		<?php
}
}
if ($__section_x_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_0_saved;
}
?>
		    		</select>
		    	</div>
		    	
		    	<label for="c_sexo_pssoa" class="col-xs-12 col-sm-1 col-md-1 col-lg-1 control-label">Sexo</label>
		    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
		    		<select id="c_sexo_pssoa" name="c_sexo_pssoa" class="c-select" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?>>
		    		<option value="F" <?php if ("F" == $_smarty_tpl->tpl_vars['arrDados']->value['c_sexo_pssoa']) {?>selected<?php }?>>Feminino</option>
		    		<option value="M" <?php if ("M" == $_smarty_tpl->tpl_vars['arrDados']->value['c_sexo_pssoa']) {?>selected<?php }?>>Masculino</option>
		    		</select>
		    	</div>
		  	
		  	 	<label for="d_obito_pssoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Data de Óbito</label>
		    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
		      		<input type="text" id="d_obito_pssoa" name="d_obito_pssoa" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['d_obito_pssoa'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Óbito" maxlength="10" class="form-control">
		    	</div>
		  	</div>
		  	
			<div class="form-group">
		    	<label for="c_tpo_nac" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nacionalidade</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		    		<select id="c_tpo_nac" name="c_tpo_nac" class="c-select" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?>>
		    		<option value="1" <?php if ("1" == $_smarty_tpl->tpl_vars['arrDados']->value['c_tpo_nac']) {?>selected<?php }?>>Brasileiro</option>
		    		<option value="2" <?php if ("2" == $_smarty_tpl->tpl_vars['arrDados']->value['c_tpo_nac']) {?>selected<?php }?>>Extrangeiro</option>
		    		</select>
		    	</div>
		    	<label for="c_nat" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Naturalidade</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		    		<select id="c_nat" name="c_nat" class="c-select" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?>>
		    		<option value="">Selecione</option>
		    		<?php
$__section_x_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrUF']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_1_total = $__section_x_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_1_total != 0) {
for ($__section_x_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_1_iteration <= $__section_x_1_total; $__section_x_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
		    			<option value="<?php echo $_smarty_tpl->tpl_vars['arrUF']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['c_uf'];?>
" <?php if ($_smarty_tpl->tpl_vars['arrUF']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['c_uf'] == $_smarty_tpl->tpl_vars['arrDados']->value['c_nat']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['arrUF']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['label'];?>
</option>
		    		<?php
}
}
if ($__section_x_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_1_saved;
}
?>
		    		</select>
		    	</div>
		  	</div>
			
			<div class="form-group">
		    	<label for="i_mae_pssoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome da Mãe</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      		<input type="text" id="i_mae_pssoa" name="i_mae_pssoa" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['i_mae_pssoa'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Nome da Mãe" maxlength="80" class="form-control">
		    	</div>
		  		<label for="i_pai_pssoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome do Pai</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      		<input type="text" id="i_pai_pssoa" name="i_pai_pssoa" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['i_pai_pssoa'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Nome do Pai" maxlength="80" class="form-control">
		    	</div>
		  	</div>
		</div>
		
		
		
		<div role="tabpanel" class="tab-pane" id="Documentos">
			<div class="form-group">
		    	<label for="n_cpf_pssoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">CPF</label>
		    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
		      		<input type="text" id="n_cpf_pssoa" name="n_cpf_pssoa" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['n_cpf_pssoa'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Número" maxlength="15" class="form-control">
		    	</div>
		  	</div>
			
			<div class="form-group">
		    	<label for="n_id_pssoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Indentidade</label>
		    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
		      		<input type="text" id="n_id_pssoa" name="n_id_pssoa" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['n_id_pssoa'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Número" maxlength="40" class="form-control">
		    	</div>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		    		<select id="c_org_expdr" name="c_org_expdr" class="c-select" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?>>
		    		<option value="">Selecione</option>
		    		<?php
$__section_x_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrExpedit']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_2_total = $__section_x_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_2_total != 0) {
for ($__section_x_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_2_iteration <= $__section_x_2_total; $__section_x_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
		    			<option value="<?php echo $_smarty_tpl->tpl_vars['arrExpedit']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['c_org_expdr'];?>
" <?php if ($_smarty_tpl->tpl_vars['arrExpedit']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['c_org_expdr'] == $_smarty_tpl->tpl_vars['arrDados']->value['c_org_expdr']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['arrExpedit']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['label'];?>
</option>
		    		<?php
}
}
if ($__section_x_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_2_saved;
}
?>
		    		</select>
		    	</div>
		    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
		    		<select id="c_uf_org_expdr" name="c_uf_org_expdr" class="c-select" <?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == "readonly") {?>disabled<?php }?>>
		    		<option value="">Selecione</option>
		    		<?php
$__section_x_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrUF']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_3_total = $__section_x_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_3_total != 0) {
for ($__section_x_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_3_iteration <= $__section_x_3_total; $__section_x_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
		    			<option value="<?php echo $_smarty_tpl->tpl_vars['arrUF']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['c_uf'];?>
" <?php if ($_smarty_tpl->tpl_vars['arrUF']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['c_uf'] == $_smarty_tpl->tpl_vars['arrDados']->value['c_uf_org_expdr']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['arrUF']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['label'];?>
</option>
		    		<?php
}
}
if ($__section_x_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_3_saved;
}
?>
		    		</select>
		    	</div>
		  	</div>
	  	</div>
	  	
		
		
		
		<style>
		.input-group {
		    display: flex !important;
		    position: relative !important;
		    width: 100% !important;
		}
		</style>
		
		<div role="tabpanel" class="tab-pane" id="Contatos">
			
			<div class="form-group">
		    	<label for="i_email_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">E-mail</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      		<input type="text" id="i_email_infmd" name="i_email_infmd" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['i_email_infmd'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="E-mail" maxlength="100" class="form-control">
		    	</div>
		  	</div>
					  	
			<div class="form-group">
		    	<label for="n_fone_fixo_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Telefone Fixo</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		    		<input type="text" id="n_fone_fixo_infmd" name="n_fone_fixo_infmd" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['n_fone_fixo_infmd'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Telefone Fixo" maxlength="25" class="form-control">
		    	</div>
		    	<label for="n_fone_clulr_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Telefone Celular</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		    		<input type="text" id="n_fone_clulr_infmd" name="n_fone_clulr_infmd" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['n_fone_clulr_infmd'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Telefone Celular" maxlength="25" class="form-control">
		    	</div>
		  	</div>
		  	
	  		<div class="form-group">
		    	<label for="n_cep_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">CEP</label>
		    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			    	<div class="input-group">
				      <input type="text" id="n_cep_infmd" name="n_cep_infmd" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['n_cep_infmd'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="CEP" maxlength="8" class="form-control">
				      <span class="input-group-btn">
				        <button class="btn btn-primary" type="button" id="btnCEP"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				      </span>
				    </div>
		    	</div>
		  	</div>
		  	
	  		<div class="form-group">
		    	<label for="i_logdr_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Logradouro</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      		<input type="text" id="i_logdr_infmd" name="i_logdr_infmd" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['i_logdr_infmd'];?>
" ReadOnly placeholder="Logradouro" maxlength="200" class="form-control">
		    	</div>
		    	
		    	<label for="n_logdr_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Número</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		    		<input type="text" id="n_logdr_infmd" name="n_logdr_infmd" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['n_logdr_infmd'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Número" maxlength="10" class="form-control">
		    	</div>
		  	</div>
					  	
			<div class="form-group">
		    	<label for="r_compl_logdr_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Complemento</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		    		<input type="text" id="r_compl_logdr_infmd" name="r_compl_logdr_infmd" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['r_compl_logdr_infmd'];?>
" <?php echo $_smarty_tpl->tpl_vars['TelaReadOnly']->value;?>
 placeholder="Complemento" maxlength="100" class="form-control">
		    	</div>
		    	
		    	<label for="i_bairo_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Bairro</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      		<input type="text" id="i_bairo_infmd" name="i_bairo_infmd" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['i_bairo_infmd'];?>
" ReadOnly placeholder="Bairro" maxlength="75" class="form-control">
		    	</div>
		  	</div>
		  	
	  		<div class="form-group">
		    	<label for="i_email_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Cidade</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      		<input type="text" id="texto_cidade" name="texto_cidade" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['r_loc'];?>
" ReadOnly placeholder="Cidade" maxlength="100" class="form-control">
		    	</div>
		    	
		    	<label for="i_email_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Estado</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      		<input type="text" id="texto_estado" name="texto_estado" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['r_uf'];?>
" ReadOnly placeholder="Estado" maxlength="100" class="form-control">
		    	</div>
		  	</div>
		  	
	  	</div>
	  	
	  	
	</div>
  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="c_pssoa" name="c_pssoa" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['c_pssoa'];?>
">
    		
    		<input type="hidden" id="c_pais" name="c_pais" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['c_pais'];?>
">
    		<input type="hidden" id="c_logdr_infmd" name="c_logdr_infmd" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['c_logdr_infmd'];?>
">
    		<input type="hidden" id="c_loc_infmd" name="c_loc_infmd" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['c_loc_infmd'];?>
">
    		<input type="hidden" id="c_uf_infmd" name="c_uf_infmd" value="<?php echo $_smarty_tpl->tpl_vars['arrDados']->value['c_uf_infmd'];?>
">
    		
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['urlPaginaSimples']->value;?>
';">Retornar</button>
  			<button type="submit" id="btnConfirmar" class="btn btn-primary">Confirmar</button>
    	</div>
  	</div>
</form>

<!-- Scripts of page -->


<?php echo '<script'; ?>
>
$(document).ready(function(){

	$( "#c_tpo_nac" ).change(function() {
		if (this.value == 2){
			$("#c_nat").val("").change();	
		}
	});
	
	$( "#c_nat" ).change(function() {
		if (this.value != ''){
			$("#c_tpo_nac").val("1").change();	
		}
	});
	
	
	// Validação do formulário
   	$("#frmFormulario").validate({
   		errorElement: 'div',
		errorClass: 'has-error help-block',
		focusInvalid: false,
		rules: {
			i_email_infmd: {email: true}
   		},

		highlight: function (e) {
			$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
		},
		
		success: function (e) {
			$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
			$(e).remove();
		},

		// EM CASO DE AJAX
		submitHandler: function (form) {
			$.ajax({
	            url: "<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['TelaOperacao']->value;?>
",
	            data: $("#frmFormulario").serialize(),
	            type: 'POST',
	            context: $('#divAjax'),
	            beforeSend: function(){
	            	$("#msgAjax").html(imagemAjax);
	            	$("#btnConfirmar").attr("disabled","disabled");
	            	rolarScroll();
	            },
	            success: function(data){
	                this.append(data);
	                $("#msgAjax").html(data);	            	
	                $("#btnConfirmar").removeAttr("disabled");
	            }
			});
		},
		invalidHandler: function (form) {
					
		}	    		
    });
	
   	$("#btnCEP").click(function() {
   		

	    $("#i_logdr_infmd").val('');
	    $("#i_bairo_infmd").val('');
	    $("#texto_cidade").val('');
	    $("#texto_estado").val('');
	    	
 		$("#c_loc_infmd").val('');
 		$("#c_uf_infmd").val('');
 		$("#c_logdr_infmd").val('');
 		$("#c_pais").val('');
   		
   		$.ajax({
   		    url: "<?php echo $_smarty_tpl->tpl_vars['urlPagina']->value;?>
/buscacep",
	   		dataType: "json",
   		    type: "post",
   		    data: {n_cep_infmd: $("#n_cep_infmd").val()},
   		    complete: function (data) //É aqui que você diz para o AJAX que a função tem um retorno 
   		    {
   		    	retorno = data.responseJSON;
   		    	
   		    	if (retorno['msg']){
   		    		alert(retorno['msg']);
   		    		return;
   		    	}

   		    	$("#i_logdr_infmd").val(retorno['r_tpo_logdr']+" "+retorno['r_logdr']);
   		    	$("#i_bairo_infmd").val(retorno['r_bairo']);
   		    	$("#texto_cidade").val(retorno['r_loc']);
   		    	$("#texto_estado").val(retorno['r_uf']);
   		    	
   		    	$("#c_loc_infmd").val(retorno['c_loc']);
   		    	$("#c_uf_infmd").val(retorno['c_uf']);
   		    	$("#c_logdr_infmd").val(retorno['c_logdr']);
   		    	$("#c_pais").val(retorno['c_pais']);
   		    }
   		});
   		
   	});
	
   	<?php if ($_smarty_tpl->tpl_vars['TelaReadOnly']->value == '') {?>
   		$( "#d_nasc_pssoa" ).datepicker(datepickerBR);
   		$( "#d_obito_pssoa" ).datepicker(datepickerBR);
   		$( '#n_cep_infmd' ).mask('00000000', {clearIfNotMatch: true});
   		$( '#n_cpf_pssoa' ).mask('000.000.000-00', {clearIfNotMatch: true});
   		$( '#d_nasc_pssoa' ).mask('00/00/0000', {clearIfNotMatch: true});
   		$( '#n_fone_fixo_infmd' ).mask('00 0000-0000', {clearIfNotMatch: true});
   		$( '#n_fone_clulr_infmd' ).mask('00 00000-0000', {clearIfNotMatch: true});
	
   	<?php }?>
});
<?php echo '</script'; ?>
> 

<?php }
}
