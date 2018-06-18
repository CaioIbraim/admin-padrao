<?php
/* Smarty version 3.1.30, created on 2017-01-30 15:26:55
  from "D:\www\catalogo\views\usuarios-extra-mb\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588f775f97db60_45127161',
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
  'cache_lifetime' => 3600,
),true)) {
function content_588f775f97db60_45127161 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://localhost/catalogo/views/_jquery/jquery.mask.min.js"></script>
<script src="http://localhost/catalogo/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://localhost/catalogo/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>

<link rel="stylesheet" href="http://localhost/catalogo/views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.css">
<script src="http://localhost/catalogo/views/_jquery/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Usuários Extra-MB <small><i class="fa fa-angle-double-right"></i> Incluir dados</small></h2></div>

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
		      		<input type="text" id="i_pssoa" name="i_pssoa" value=""  placeholder="Nome" maxlength="80" class="form-control" required>
		    	</div>
			
		    	<label for="d_nasc_pssoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nascimento</label>
		    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
		      		<input type="text" id="d_nasc_pssoa" name="d_nasc_pssoa" value=""  placeholder="Nascimento" maxlength="10" class="form-control">
		    	</div>    	
		  	</div>
		  	
			<div class="form-group">
				<label for="c_est_cvil" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Estado Civil</label>
		    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
		    		<select id="c_est_cvil" name="c_est_cvil" class="c-select" >
		    		<option value="">Selecione</option>
		    				    			<option value="2" >Casado/a</option>
		    				    			<option value="5" >Divorciado/a</option>
		    				    			<option value="9" >Não Informado</option>
		    				    			<option value="6" >Separado /a Consensualmente</option>
		    				    			<option value="4" >Separado/a Judicialmente</option>
		    				    			<option value="1" >Solteiro/a</option>
		    				    			<option value="3" >Viúvo/a</option>
		    				    		</select>
		    	</div>
		    	
		    	<label for="c_sexo_pssoa" class="col-xs-12 col-sm-1 col-md-1 col-lg-1 control-label">Sexo</label>
		    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
		    		<select id="c_sexo_pssoa" name="c_sexo_pssoa" class="c-select" >
		    		<option value="F" >Feminino</option>
		    		<option value="M" >Masculino</option>
		    		</select>
		    	</div>
		  	
		  	 	<label for="d_obito_pssoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Data de Óbito</label>
		    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
		      		<input type="text" id="d_obito_pssoa" name="d_obito_pssoa" value=""  placeholder="Óbito" maxlength="10" class="form-control">
		    	</div>
		  	</div>
		  	
			<div class="form-group">
		    	<label for="c_tpo_nac" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nacionalidade</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		    		<select id="c_tpo_nac" name="c_tpo_nac" class="c-select" >
		    		<option value="1" >Brasileiro</option>
		    		<option value="2" >Extrangeiro</option>
		    		</select>
		    	</div>
		    	<label for="c_nat" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Naturalidade</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		    		<select id="c_nat" name="c_nat" class="c-select" >
		    		<option value="">Selecione</option>
		    				    			<option value="1" >AC - ACRE</option>
		    				    			<option value="2" >AL - ALAGOAS</option>
		    				    			<option value="3" >AM - AMAZONAS</option>
		    				    			<option value="4" >AP - AMAPA</option>
		    				    			<option value="5" >BA - BAHIA</option>
		    				    			<option value="6" >CE - CEARA</option>
		    				    			<option value="7" >DF - DISTRITO FEDERAL</option>
		    				    			<option value="8" >ES - ESPIRITO SANTO</option>
		    				    			<option value="9" >GO - GOIAS</option>
		    				    			<option value="10" >MA - MARANHAO</option>
		    				    			<option value="11" >MG - MINAS GERAIS</option>
		    				    			<option value="12" >MS - MATO GROSSO DO SUL</option>
		    				    			<option value="13" >MT - MATO GROSSO</option>
		    				    			<option value="14" >PA - PARA</option>
		    				    			<option value="15" >PB - PARAIBA</option>
		    				    			<option value="16" >PE - PERNAMBUCO</option>
		    				    			<option value="17" >PI - PIAUI</option>
		    				    			<option value="18" >PR - PARANA</option>
		    				    			<option value="19" >RJ - RIO DE JANEIRO</option>
		    				    			<option value="20" >RN - RIO GRANDE DO NORTE</option>
		    				    			<option value="21" >RO - RONDONIA</option>
		    				    			<option value="22" >RR - RORAIMA</option>
		    				    			<option value="23" >RS - RIO GRANDE DO SUL</option>
		    				    			<option value="24" >SC - SANTA CATARINA</option>
		    				    			<option value="25" >SE - SERGIPE</option>
		    				    			<option value="26" >SP - SAO PAULO</option>
		    				    			<option value="27" >TO - TOCANTINS</option>
		    				    		</select>
		    	</div>
		  	</div>
			
			<div class="form-group">
		    	<label for="i_mae_pssoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome da Mãe</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      		<input type="text" id="i_mae_pssoa" name="i_mae_pssoa" value=""  placeholder="Nome da Mãe" maxlength="80" class="form-control">
		    	</div>
		  		<label for="i_pai_pssoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome do Pai</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      		<input type="text" id="i_pai_pssoa" name="i_pai_pssoa" value=""  placeholder="Nome do Pai" maxlength="80" class="form-control">
		    	</div>
		  	</div>
		</div>
		
		
		
		<div role="tabpanel" class="tab-pane" id="Documentos">
			<div class="form-group">
		    	<label for="n_cpf_pssoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">CPF</label>
		    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
		      		<input type="text" id="n_cpf_pssoa" name="n_cpf_pssoa" value=""  placeholder="Número" maxlength="15" class="form-control">
		    	</div>
		  	</div>
			
			<div class="form-group">
		    	<label for="n_id_pssoa" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Indentidade</label>
		    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
		      		<input type="text" id="n_id_pssoa" name="n_id_pssoa" value=""  placeholder="Número" maxlength="40" class="form-control">
		    	</div>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		    		<select id="c_org_expdr" name="c_org_expdr" class="c-select" >
		    		<option value="">Selecione</option>
		    				    			<option value="34" >CGPMAF - COORDENADORIA GERAL DE POLÍCIA MARÍTIMA, AERONÁUTICA E DE FRONTEIRAS</option>
		    				    			<option value="3" >CLA - CARTEIRA DE IDENTIDADE CLASSISTA</option>
		    				    			<option value="10" >CNH - CARTEIRA NACIONAL DE HABILITAÇÃO</option>
		    				    			<option value="35" >CNIG - CONSELHO NACIONAL DE IMIGRAÇÃO</option>
		    				    			<option value="4" >COMAER - COMANDO DA AERONÁUTICA</option>
		    				    			<option value="36" >COREN - CONSELHO REGIONAL DE ENFERMAGEM</option>
		    				    			<option value="37" >CRA - CONSELHO REGIONAL DE ADMINISTRAÇÃO</option>
		    				    			<option value="38" >CRAS - CONSELHO REGIONAL DE ASSISTENTES SOCIAIS</option>
		    				    			<option value="39" >CRB - CONSELHO REGIONAL DE BIBLIOTECONOMIA</option>
		    				    			<option value="40" >CRC - CONSELHO REGIONAL DE CONTABILIDADE</option>
		    				    			<option value="42" >CREA - CONSELHO REGIONAL DE ENGENHARIA ARQUITETURA E AGRONOMIA</option>
		    				    			<option value="43" >CRECI - CONSELHO REGIONAL DE CORRETORES DE IMÓVEIS</option>
		    				    			<option value="41" >CRE - CONSELHO REGIONAL DE ESTATÍSTICA</option>
		    				    			<option value="44" >CREFIT - CONSELHO REGIONAL DE FISIOTERAPIA E TERAPIA OCUPACIONAL</option>
		    				    			<option value="45" >CRF - CONSELHO REGIONAL DE FARMÁCIA</option>
		    				    			<option value="46" >CRM - CONSELHO REGIONAL DE MEDICINA</option>
		    				    			<option value="53" >CRMV - CONSELHO REGIONAL DE MEDICINA VETERINÁRIA</option>
		    				    			<option value="47" >CRN - CONSELHO REGIONAL DE NUTRIÇÃO</option>
		    				    			<option value="48" >CRO - CONSELHO REGIONAL DE ODONTOLOGIA</option>
		    				    			<option value="49" >CRP - CONSELHO REGIONAL DE PSICOLOGIA</option>
		    				    			<option value="50" >CRPRE - CONSELHO REGIONAL DE PROFISSIONAIS DE RELAÇÕES PÚBLICAS</option>
		    				    			<option value="51" >CRQ - CONSELHO REGIONAL DE QUÍMICA</option>
		    				    			<option value="52" >CRRC - CONSELHO REGIONAL DE REPRESENTANTES COMERCIAIS</option>
		    				    			<option value="11" >CTPS - CARTEIRA DE TRABALHO E PREVIDÊNCIA SOCIAL</option>
		    				    			<option value="24" >DETRAN - DEPARTAMENTO DE TRÂNSITO DO ESTADO DO RIO DE JANEIRO</option>
		    				    			<option value="12" >DIC - DIRETORIA DE IDENTIFICAÇÃO CIVIL</option>
		    				    			<option value="13" >DIREX - DIRETORIA-EXECUTIVA</option>
		    				    			<option value="2" >DPF - POLÍCIA FEDERAL</option>
		    				    			<option value="14" >DPMAF - DIVISÃO DE POLÍCIA MARÍTIMA, ÁREA E DE FRONTEIRAS</option>
		    				    			<option value="15" >DPT - DEPARTAMENTO DE POLÍCIA TÉCNICA GERAL</option>
		    				    			<option value="5" >EB - EXÉRCITO BRASILEIRO</option>
		    				    			<option value="18" >EST - CARTEIRA DE ESTRANGEIRO</option>
		    				    			<option value="54" >FLS - FUNDAÇÃO LYNDOLPHO SILVA</option>
		    				    			<option value="55" >GOVGO - GOVERNO DO ESTADO DE GOIÁS</option>
		    				    			<option value="56" >I CLA - CARTEIRA DE IDENTIDADE CLASSISTA</option>
		    				    			<option value="9" >IFP - INSTITUTO FÉLIX PACHECO</option>
		    				    			<option value="57" >IGP - INSTITUTO GERAL DE PERÍCIAS</option>
		    				    			<option value="58" >IICCECF/RO - INSTITUTO DE IDENTIFICAÇÃO CIVIL E CRIMINAL ENGRÁCIA DA COSTA FRANCISCO DE RONDÔNIA</option>
		    				    			<option value="59" >IIMG - INTER-INSTITUTIONAL MONITORING GROUP</option>
		    				    			<option value="60" >IML - INSTITUTO MÉDICO-LEGAL</option>
		    				    			<option value="16" >IPF - INSTITUTO PEREIRA FAUSTINO</option>
		    				    			<option value="6" >MB - MARINHA DO BRASIL</option>
		    				    			<option value="7" >OAB - ORDEM DOS ADVOGADOS DO BRASIL</option>
		    				    			<option value="8" >OMB - ORDENS DOS MÚSICOS DO BRASIL</option>
		    				    			<option value="23" >OUT - OUTROS</option>
		    				    			<option value="61" >PCMG - POLICIA CIVIL DO ESTADO DE MINAS GERAIS</option>
		    				    			<option value="62" >PMMG - POLÍCIA MILITAR DO ESTADO DE MINAS GERAIS</option>
		    				    			<option value="63" >POF - POLÍCIA FEDERAL</option>
		    				    			<option value="17" >POM - POLÍCIA MILITAR</option>
		    				    			<option value="64" >SDS - SECRETARIA DE DEFESA SOCIAL (PERNAMBUCO)</option>
		    				    			<option value="66" >SECC - SECRETARIA DE ESTADO DA CASA CIVIL</option>
		    				    			<option value="67" >SEJUSP - SECRETARIA DE ESTADO DE JUSTIÇA E SEGURANÇA PÚBLICA – MATO GROSSO</option>
		    				    			<option value="68" >SES - CARTEIRA DE ESTRANGEIRO</option>
		    				    			<option value="69" >SESP - SECRETARIA DE ESTADO DA SEGURANÇA PÚBLICA DO PARANÁ</option>
		    				    			<option value="19" >SJS - SECRETARIA DA JUSTIÇA E SEGURANÇA</option>
		    				    			<option value="20" >SJTC - SECRETARIA DA JUSTIÇA DO TRABALHO E CIDADANIA</option>
		    				    			<option value="21" >SJTS - SECRETARIA DA JUSTIÇA DO TRABALHO E SEGURANÇA</option>
		    				    			<option value="65" >SNJ - SECRETARIA NACIONAL DE JUSTIÇA / DEPARTAMENTO DE ESTRANGEIROS</option>
		    				    			<option value="22" >SPTC - SECRETARIA DE POLÍCIA TÉCNICO-CIENTÍFICA</option>
		    				    			<option value="1" >SSP - SECRETARIA DE SEGURANÇA PÚBLICA</option>
		    				    		</select>
		    	</div>
		    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
		    		<select id="c_uf_org_expdr" name="c_uf_org_expdr" class="c-select" >
		    		<option value="">Selecione</option>
		    				    			<option value="1" >AC - ACRE</option>
		    				    			<option value="2" >AL - ALAGOAS</option>
		    				    			<option value="3" >AM - AMAZONAS</option>
		    				    			<option value="4" >AP - AMAPA</option>
		    				    			<option value="5" >BA - BAHIA</option>
		    				    			<option value="6" >CE - CEARA</option>
		    				    			<option value="7" >DF - DISTRITO FEDERAL</option>
		    				    			<option value="8" >ES - ESPIRITO SANTO</option>
		    				    			<option value="9" >GO - GOIAS</option>
		    				    			<option value="10" >MA - MARANHAO</option>
		    				    			<option value="11" >MG - MINAS GERAIS</option>
		    				    			<option value="12" >MS - MATO GROSSO DO SUL</option>
		    				    			<option value="13" >MT - MATO GROSSO</option>
		    				    			<option value="14" >PA - PARA</option>
		    				    			<option value="15" >PB - PARAIBA</option>
		    				    			<option value="16" >PE - PERNAMBUCO</option>
		    				    			<option value="17" >PI - PIAUI</option>
		    				    			<option value="18" >PR - PARANA</option>
		    				    			<option value="19" >RJ - RIO DE JANEIRO</option>
		    				    			<option value="20" >RN - RIO GRANDE DO NORTE</option>
		    				    			<option value="21" >RO - RONDONIA</option>
		    				    			<option value="22" >RR - RORAIMA</option>
		    				    			<option value="23" >RS - RIO GRANDE DO SUL</option>
		    				    			<option value="24" >SC - SANTA CATARINA</option>
		    				    			<option value="25" >SE - SERGIPE</option>
		    				    			<option value="26" >SP - SAO PAULO</option>
		    				    			<option value="27" >TO - TOCANTINS</option>
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
		      		<input type="text" id="i_email_infmd" name="i_email_infmd" value=""  placeholder="E-mail" maxlength="100" class="form-control">
		    	</div>
		  	</div>
					  	
			<div class="form-group">
		    	<label for="n_fone_fixo_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Telefone Fixo</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		    		<input type="text" id="n_fone_fixo_infmd" name="n_fone_fixo_infmd" value=""  placeholder="Telefone Fixo" maxlength="25" class="form-control">
		    	</div>
		    	<label for="n_fone_clulr_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Telefone Celular</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		    		<input type="text" id="n_fone_clulr_infmd" name="n_fone_clulr_infmd" value=""  placeholder="Telefone Celular" maxlength="25" class="form-control">
		    	</div>
		  	</div>
		  	
	  		<div class="form-group">
		    	<label for="n_cep_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">CEP</label>
		    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			    	<div class="input-group">
				      <input type="text" id="n_cep_infmd" name="n_cep_infmd" value=""  placeholder="CEP" maxlength="8" class="form-control">
				      <span class="input-group-btn">
				        <button class="btn btn-primary" type="button" id="btnCEP"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				      </span>
				    </div>
		    	</div>
		  	</div>
		  	
	  		<div class="form-group">
		    	<label for="i_logdr_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Logradouro</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      		<input type="text" id="i_logdr_infmd" name="i_logdr_infmd" value="" ReadOnly placeholder="Logradouro" maxlength="200" class="form-control">
		    	</div>
		    	
		    	<label for="n_logdr_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Número</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		    		<input type="text" id="n_logdr_infmd" name="n_logdr_infmd" value=""  placeholder="Número" maxlength="10" class="form-control">
		    	</div>
		  	</div>
					  	
			<div class="form-group">
		    	<label for="r_compl_logdr_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Complemento</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		    		<input type="text" id="r_compl_logdr_infmd" name="r_compl_logdr_infmd" value=""  placeholder="Complemento" maxlength="100" class="form-control">
		    	</div>
		    	
		    	<label for="i_bairo_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Bairro</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      		<input type="text" id="i_bairo_infmd" name="i_bairo_infmd" value="" ReadOnly placeholder="Bairro" maxlength="75" class="form-control">
		    	</div>
		  	</div>
		  	
	  		<div class="form-group">
		    	<label for="i_email_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Cidade</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      		<input type="text" id="texto_cidade" name="texto_cidade" value="" ReadOnly placeholder="Cidade" maxlength="100" class="form-control">
		    	</div>
		    	
		    	<label for="i_email_infmd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Estado</label>
		    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      		<input type="text" id="texto_estado" name="texto_estado" value="" ReadOnly placeholder="Estado" maxlength="100" class="form-control">
		    	</div>
		  	</div>
		  	
	  	</div>
	  	
	  	
	</div>
  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="c_pssoa" name="c_pssoa" value="">
    		
    		<input type="hidden" id="c_pais" name="c_pais" value="">
    		<input type="hidden" id="c_logdr_infmd" name="c_logdr_infmd" value="">
    		<input type="hidden" id="c_loc_infmd" name="c_loc_infmd" value="">
    		<input type="hidden" id="c_uf_infmd" name="c_uf_infmd" value="">
    		
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="window.location.href='usuarios-extra-mb';">Retornar</button>
  			<button type="submit" id="btnConfirmar" class="btn btn-primary">Confirmar</button>
    	</div>
  	</div>
</form>

<!-- Scripts of page -->


<script>
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
	            url: "http://localhost/catalogo/usuarios-extra-mb/confirmarincluir",
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
   		    url: "http://localhost/catalogo/usuarios-extra-mb/buscacep",
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
	
   	   		$( "#d_nasc_pssoa" ).datepicker(datepickerBR);
   		$( "#d_obito_pssoa" ).datepicker(datepickerBR);
   		$( '#n_cep_infmd' ).mask('00000000', {clearIfNotMatch: true});
   		$( '#n_cpf_pssoa' ).mask('000.000.000-00', {clearIfNotMatch: true});
   		$( '#d_nasc_pssoa' ).mask('00/00/0000', {clearIfNotMatch: true});
   		$( '#n_fone_fixo_infmd' ).mask('00 0000-0000', {clearIfNotMatch: true});
   		$( '#n_fone_clulr_infmd' ).mask('00 00000-0000', {clearIfNotMatch: true});
	
   	});
</script> 

<?php }
}
