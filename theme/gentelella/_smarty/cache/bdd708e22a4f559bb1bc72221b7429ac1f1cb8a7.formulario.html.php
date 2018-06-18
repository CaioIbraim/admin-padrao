<?php
/* Smarty version 3.1.30, created on 2017-02-07 13:42:59
  from "D:\www\catalogo\views\profissional-saude\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5899eb03a9a6c2_85894506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f474c879c501588e2f4db3caf99c80e04d9a634d' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\profissional-saude\\formulario.html',
      1 => 1485780066,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5899eb03a9a6c2_85894506 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.mask.min.js"></script>
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://10.4.224.74/catalogo/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Profissionais de Saúde <small><i class="fa fa-angle-double-right"></i> Incluir dados</small></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	
	<div class="form-group">
    	<label for="texto_nome" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Nome do Profissional</label>
    	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 obrigatorio">
      		<input type="text" id="texto_nome" name="texto_nome" value="" ReadOnly placeholder="Selecione um profissional da tabela" class="form-control" required>
    	</div>
  	</div>
	
	<div class="form-group">
    	<label for="c_tpo_profs" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Tipo de Profissional</label>
    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
    		<select id="c_tpo_profs" name="c_tpo_profs" class="c-select" >
    		<option value="1" >Militar</option>
    		<option value="2" >Contratado</option>
    		<option value="3" >Temporário (RPA)</option>
    		<option value="4" >Concursado</option>
    		<option value="5" >Residente</option>
    		<option value="6" >Outros</option>
    		</select>
    	</div>
  	</div>
	
	<div class="form-group">
    	<label for="c_cbos" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Especialidade (CBO-S)</label>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    		<select id="c_cbos" name="c_cbos" class="c-select" >
    		<option value="">Selecione</option>
    		    			<option value="425" >Acompanhante de idosos</option>
    		    			<option value="314" >Acupunturista</option>
    		    			<option value="297" >Administrador</option>
    		    			<option value="10" >Administrador de ambulatório</option>
    		    			<option value="393" >Agente de saneamento</option>
    		    			<option value="408" >Agente de saúde</option>
    		    			<option value="394" >Agente de saúde pública</option>
    		    			<option value="405" >AGENTES COMUNITÁRIOS DE SAÚDE E AFINS</option>
    		    			<option value="392" >AGENTES DA SAÚDE E DO MEIO AMBIENTE</option>
    		    			<option value="264" >Andrologista</option>
    		    			<option value="39" >Anestesiologista</option>
    		    			<option value="40" >Anestesista</option>
    		    			<option value="44" >Angiologista</option>
    		    			<option value="395" >Assistente administrativo</option>
    		    			<option value="422" >Assistente de parto</option>
    		    			<option value="291" >Assistente social</option>
    		    			<option value="397" >Assistente técnico administrativo</option>
    		    			<option value="396" >Assistente técnico - no serviço público</option>
    		    			<option value="401" >Atendente de ambulatório</option>
    		    			<option value="411" >Atendente de berçário</option>
    		    			<option value="412" >Atendente de centro cirúrgico</option>
    		    			<option value="341" >Atendente de clínica dentária</option>
    		    			<option value="402" >Atendente de clínica médica</option>
    		    			<option value="399" >Atendente de clínica veterinária</option>
    		    			<option value="342" >Atendente de Consultório Dentário</option>
    		    			<option value="403" >Atendente de consultório médico</option>
    		    			<option value="400" >Atendente de consultório veterinário</option>
    		    			<option value="413" >Atendente de enfermagem</option>
    		    			<option value="414" >Atendente de enfermagem no serviço doméstico</option>
    		    			<option value="432" >Atendente de farmácia - balconista</option>
    		    			<option value="343" >Atendente de gabinete dentário</option>
    		    			<option value="415" >Atendente de hospital</option>
    		    			<option value="404" >Atendente de seguro saúde</option>
    		    			<option value="416" >Atendente de serviço de saúde</option>
    		    			<option value="417" >Atendente de serviço médico</option>
    		    			<option value="344" >Atendente de serviço odontólogico</option>
    		    			<option value="419" >Atendente-enfermeiro</option>
    		    			<option value="418" >Atendente hospitalar</option>
    		    			<option value="345" >Atendente odontológico</option>
    		    			<option value="346" >Auxiliar de dentista</option>
    		    			<option value="76" >Auxiliar de dietista</option>
    		    			<option value="358" >Auxiliar de enfermagem</option>
    		    			<option value="359" >Auxiliar de enfermagem de central de material esterelizado (CME)</option>
    		    			<option value="360" >Auxiliar de enfermagem de centro cirúrgico</option>
    		    			<option value="361" >Auxiliar de enfermagem de clínica médica</option>
    		    			<option value="362" >Auxiliar de enfermagem de hospital</option>
    		    			<option value="363" >Auxiliar de enfermagem de saúde pública</option>
    		    			<option value="384" >Auxiliar de enfermagem do trabalho</option>
    		    			<option value="364" >Auxiliar de enfermagem em hemodiálise</option>
    		    			<option value="365" >Auxiliar de enfermagem em home care</option>
    		    			<option value="366" >Auxiliar de enfermagem em nefrologia</option>
    		    			<option value="367" >Auxiliar de enfermagem em saúde mental</option>
    		    			<option value="385" >Auxiliar de enfermagem em saúde ocupacional</option>
    		    			<option value="386" >Auxiliar de enfermagem ocupacional</option>
    		    			<option value="368" >Auxiliar de enfermagem socorrista</option>
    		    			<option value="429" >Auxiliar de enfermagem veterinária</option>
    		    			<option value="427" >Auxiliar de estética</option>
    		    			<option value="420" >Auxiliar de farmácia de manipulação</option>
    		    			<option value="369" >Auxiliar de ginecologia</option>
    		    			<option value="370" >Auxiliar de hipodermia</option>
    		    			<option value="433" >Auxiliar de incubação</option>
    		    			<option value="77" >Auxiliar de nutrição e dietética</option>
    		    			<option value="371" >Auxiliar de obstetrícia</option>
    		    			<option value="372" >Auxiliar de oftalmologia</option>
    		    			<option value="349" >Auxiliar de Prótese Dentária</option>
    		    			<option value="436" >Auxiliar de radiologia (revelação fotográfica)</option>
    		    			<option value="423" >Auxiliar de sanitarista</option>
    		    			<option value="389" >Auxiliar de saúde marítimo</option>
    		    			<option value="388" >Auxiliar de saúde (navegação marítima)</option>
    		    			<option value="430" >Auxiliar de veterinário</option>
    		    			<option value="373" >Auxiliar em hemotransfusão</option>
    		    			<option value="406" >AUXILIARES DE LABORATÓRIO DA SAÚDE</option>
    		    			<option value="374" >Auxiliar técnico de laboratório de análises clínicas</option>
    		    			<option value="376" >Auxiliar técnico em laboratório de farmácia</option>
    		    			<option value="375" >Auxiliar técnico em patologia clínica</option>
    		    			<option value="88" >Avaliador físico</option>
    		    			<option value="24" >Bacteriologista</option>
    		    			<option value="29" >Biologista</option>
    		    			<option value="30" >Biólogo</option>
    		    			<option value="48" >Cardiologista</option>
    		    			<option value="52" >Cirurgião cardiovascular</option>
    		    			<option value="58" >Cirurgião de cabeça e pescoço</option>
    		    			<option value="178" >Cirurgião de mama</option>
    		    			<option value="211" >Cirurgião de mão</option>
    		    			<option value="45" >Cirurgião dentista - auditor</option>
    		    			<option value="63" >Cirurgião dentista - clínico geral</option>
    		    			<option value="281" >Cirurgião dentista de saúde coletiva</option>
    		    			<option value="82" >Cirurgião dentista - endodontista</option>
    		    			<option value="100" >Cirurgião dentista - epidemiologista</option>
    		    			<option value="111" >Cirurgião dentista - estomatologista</option>
    		    			<option value="130" >Cirurgião dentista - implantodontista</option>
    		    			<option value="143" >Cirurgião dentista - odontogeriatra</option>
    		    			<option value="163" >Cirurgião dentista - odontologista legal</option>
    		    			<option value="174" >Cirurgião dentista - odontopediatra</option>
    		    			<option value="188" >Cirurgião dentista - ortopedista e ortodontista</option>
    		    			<option value="207" >Cirurgião dentista - patologista bucal</option>
    		    			<option value="229" >Cirurgião dentista - periodontista</option>
    		    			<option value="247" >Cirurgião dentista - protesiólogo bucomaxilofacial</option>
    		    			<option value="265" >Cirurgião dentista - protesista</option>
    		    			<option value="273" >Cirurgião dentista - radiologista</option>
    		    			<option value="277" >Cirurgião dentista - reabilitador oral</option>
    		    			<option value="278" >Cirurgião dentista - traumatologista bucomaxilofacial</option>
    		    			<option value="64" >Cirurgião do aparelho digestivo</option>
    		    			<option value="65" >Cirurgião gastroenterológico</option>
    		    			<option value="71" >Cirurgião geral</option>
    		    			<option value="157" >Cirurgião ginecológico</option>
    		    			<option value="179" >Cirurgião mastologista</option>
    		    			<option value="202" >Cirurgião oftalmológico</option>
    		    			<option value="279" >Cirurgião oral e maxilofacial</option>
    		    			<option value="212" >Cirurgião ortopedista</option>
    		    			<option value="221" >Cirurgião otorrinolaringologista</option>
    		    			<option value="78" >Cirurgião pediátrico</option>
    		    			<option value="80" >Cirurgião plástico</option>
    		    			<option value="244" >Cirurgião proctologista</option>
    		    			<option value="83" >Cirurgião torácico</option>
    		    			<option value="213" >Cirurgião traumatologista</option>
    		    			<option value="266" >Cirurgião urológico</option>
    		    			<option value="267" >Cirurgião urologista</option>
    		    			<option value="32" >CIRURGIÕES-DENTISTAS</option>
    		    			<option value="89" >Clínico geral</option>
    		    			<option value="421" >Copeiro de hospital</option>
    		    			<option value="407" >Cozinheiro de hospital</option>
    		    			<option value="66" >Dentista</option>
    		    			<option value="189" >Dentista de aparelho</option>
    		    			<option value="175" >Dentista de criança</option>
    		    			<option value="230" >Dentista de gengivas</option>
    		    			<option value="144" >Dentista de idosos</option>
    		    			<option value="282" >Dentista de sáude coletiva</option>
    		    			<option value="145" >Dentista de terceira idade</option>
    		    			<option value="101" >Dermatologista</option>
    		    			<option value="1" >Diretor clínico</option>
    		    			<option value="2" >Diretor de departamento de saúde</option>
    		    			<option value="3" >Diretor de divisão médica</option>
    		    			<option value="4" >Diretor de serviços de saúde</option>
    		    			<option value="5" >Diretor de serviços médicos</option>
    		    			<option value="6" >Diretor de unidade assistencial</option>
    		    			<option value="7" >Diretor de unidade de saúde</option>
    		    			<option value="8" >Diretor de unidade hospitalar</option>
    		    			<option value="9" >Diretor médico-hospitalar</option>
    		    			<option value="231" >Enfermeira parteira</option>
    		    			<option value="67" >Enfermeiro</option>
    		    			<option value="86" >Enfermeiro auditor</option>
    		    			<option value="203" >Enfermeiro de berçário</option>
    		    			<option value="106" >Enfermeiro de bordo</option>
    		    			<option value="118" >Enfermeiro de centro cirúrgico</option>
    		    			<option value="275" >Enfermeiro de saúde publica</option>
    		    			<option value="146" >Enfermeiro de terapia intensiva</option>
    		    			<option value="166" >Enfermeiro do trabalho</option>
    		    			<option value="147" >Enfermeiro intensivista</option>
    		    			<option value="182" >Enfermeiro nefrologista</option>
    		    			<option value="204" >Enfermeiro neonatologista</option>
    		    			<option value="232" >Enfermeiro obstétrico</option>
    		    			<option value="254" >Enfermeiro psiquiátrico</option>
    		    			<option value="272" >Enfermeiro puericultor e pediátrico</option>
    		    			<option value="41" >ENFERMEIROS</option>
    		    			<option value="276" >Enfermeiro sanitarista</option>
    		    			<option value="431" >Enfermeiro veterinário</option>
    		    			<option value="19" >Entomologista</option>
    		    			<option value="20" >Entomólogo</option>
    		    			<option value="259" >Epidemiologista</option>
    		    			<option value="59" >Farmacêutico</option>
    		    			<option value="60" >Farmacêutico homeopata</option>
    		    			<option value="61" >Farmacêutico hospitalar</option>
    		    			<option value="26" >Fenologista</option>
    		    			<option value="138" >Fisiatra</option>
    		    			<option value="27" >Físico hospitalar</option>
    		    			<option value="28" >Físico médico</option>
    		    			<option value="25" >Fisiologista (exceto médico)</option>
    		    			<option value="72" >Fisioterapeuta</option>
    		    			<option value="73" >Fisioterapeuta acupunturista</option>
    		    			<option value="398" >Fitotecário</option>
    		    			<option value="315" >Fitoterapeuta</option>
    		    			<option value="140" >Foniatra</option>
    		    			<option value="102" >Fonoaudiólogo</option>
    		    			<option value="53" >FONOAUDIÓLOGOS</option>
    		    			<option value="17" >Geneticista</option>
    		    			<option value="11" >Gerente de ambulatório</option>
    		    			<option value="12" >Gerente de enfermagem</option>
    		    			<option value="13" >Gerente de nutrição em unidades de saúde</option>
    		    			<option value="14" >Gerente de serviços de saúde</option>
    		    			<option value="15" >Gerente de serviços sociais</option>
    		    			<option value="153" >Geriatra</option>
    		    			<option value="154" >Gerontologista</option>
    		    			<option value="155" >Gerontólogo</option>
    		    			<option value="158" >Ginecologista</option>
    		    			<option value="103" >Hansenólogo</option>
    		    			<option value="164" >Hematologista</option>
    		    			<option value="167" >Hemoterapeuta</option>
    		    			<option value="333" >Homeopata (exceto médico)</option>
    		    			<option value="119" >Imagenologista</option>
    		    			<option value="424" >Imunizador</option>
    		    			<option value="171" >Infectologista</option>
    		    			<option value="353" >Instrumentadora cirúrgica</option>
    		    			<option value="351" >Instrumentador cirúrgico</option>
    		    			<option value="120" >Instrumentador cirúrgico (enfermeiro)</option>
    		    			<option value="352" >Instrumentador em cirurgia</option>
    		    			<option value="438" >Instrumentista de laboratório (manutenção)</option>
    		    			<option value="435" >Instrumentista de precisão</option>
    		    			<option value="114" >Intensivista</option>
    		    			<option value="310" >Laboratorista - exclusive análises clínicas</option>
    		    			<option value="428" >Massoterapeuta</option>
    		    			<option value="180" >Mastologista</option>
    		    			<option value="33" >Médico acupunturista</option>
    		    			<option value="34" >Médico alergista</option>
    		    			<option value="35" >Médico alergista e imunologista</option>
    		    			<option value="148" >Médico alopata</option>
    		    			<option value="37" >Médico anatomopatologista</option>
    		    			<option value="42" >Médico anestesiologista</option>
    		    			<option value="43" >Médico anestesista</option>
    		    			<option value="46" >Médico angiologista</option>
    		    			<option value="121" >Médico angioradiologista</option>
    		    			<option value="208" >Médico cancerologista</option>
    		    			<option value="49" >Médico cardiologista</option>
    		    			<option value="74" >Médico cirurgião</option>
    		    			<option value="54" >Médico cirurgião cardiovascular</option>
    		    			<option value="62" >Médico cirurgião de cabeça e pescoço</option>
    		    			<option value="214" >Médico cirurgião de mão</option>
    		    			<option value="68" >Médico cirurgião do aparelho digestivo</option>
    		    			<option value="75" >Médico cirurgião geral</option>
    		    			<option value="79" >Médico cirurgião pediátrico</option>
    		    			<option value="81" >Médico cirurgião plástico</option>
    		    			<option value="84" >Médico cirurgião torácico</option>
    		    			<option value="87" >Médico citopatologista</option>
    		    			<option value="90" >Médico clínico</option>
    		    			<option value="91" >Médico clínico geral</option>
    		    			<option value="95" >Médico comunitário</option>
    		    			<option value="96" >Médico de</option>
    		    			<option value="233" >Médico de criança</option>
    		    			<option value="172" >Médico de doenças infecciosas e parasitárias</option>
    		    			<option value="215" >Médico de medicina esportiva</option>
    		    			<option value="159" >Médico de mulheres</option>
    		    			<option value="122" >Médico densitometrista</option>
    		    			<option value="104" >Médico dermatologista</option>
    		    			<option value="97" >Médico de saúde da família</option>
    		    			<option value="260" >Médico de saúde pública</option>
    		    			<option value="50" >Médico do coração</option>
    		    			<option value="105" >Médico do trabalho</option>
    		    			<option value="112" >Médico do tráfego</option>
    		    			<option value="123" >Médico em diagnóstico por imagem</option>
    		    			<option value="107" >Médico em eletroencefalografia</option>
    		    			<option value="108" >Médico em endoscopia</option>
    		    			<option value="168" >Médico em hemoterapia</option>
    		    			<option value="113" >Médico em medicina de tráfego</option>
    		    			<option value="115" >Médico em medicina intensiva</option>
    		    			<option value="149" >Médico em medicina interna</option>
    		    			<option value="116" >Médico em medicina nuclear</option>
    		    			<option value="124" >Médico em radiologia e diagnóstico por imagem</option>
    		    			<option value="255" >Médico em radioterapia</option>
    		    			<option value="131" >Médico endocrinologista</option>
    		    			<option value="132" >Médico endocrinologista e metabologista</option>
    		    			<option value="109" >Médico endoscopista</option>
    		    			<option value="261" >Médico epidemiologista</option>
    		    			<option value="92" >Médico especialista em clínica médica</option>
    		    			<option value="93" >Médico especialista em medicina interna</option>
    		    			<option value="139" >Médico fisiatra</option>
    		    			<option value="141" >Médico foniatra</option>
    		    			<option value="142" >Médico gastroenterologista</option>
    		    			<option value="150" >Médico generalista</option>
    		    			<option value="152" >Médico geneticista</option>
    		    			<option value="156" >Médico geriatra</option>
    		    			<option value="160" >Médico ginecologista</option>
    		    			<option value="161" >Médico ginecologista e obstetra</option>
    		    			<option value="165" >Médico hematologista</option>
    		    			<option value="169" >Médico hemoterapeuta</option>
    		    			<option value="262" >Médico higienista</option>
    		    			<option value="170" >Médico homeopata</option>
    		    			<option value="36" >Médico imunologista</option>
    		    			<option value="173" >Médico infectologista</option>
    		    			<option value="94" >Médico internista</option>
    		    			<option value="225" >Médico laboratorista</option>
    		    			<option value="176" >Médico legista</option>
    		    			<option value="181" >Médico mastologista</option>
    		    			<option value="133" >Médico metabolista</option>
    		    			<option value="151" >Médico militar</option>
    		    			<option value="183" >Médico nefrologista</option>
    		    			<option value="184" >Médico neurocirurgião</option>
    		    			<option value="185" >Médico neurocirurgião pediátrico</option>
    		    			<option value="190" >Médico neurofisiologista</option>
    		    			<option value="195" >Médico neurologista</option>
    		    			<option value="196" >Médico neuropediatra</option>
    		    			<option value="125" >Médico neuroradiologista</option>
    		    			<option value="117" >Médico nuclear</option>
    		    			<option value="199" >Médico nutrologista</option>
    		    			<option value="200" >Médico nutrólogo</option>
    		    			<option value="162" >Médico obstetra</option>
    		    			<option value="205" >Médico oftalmologista</option>
    		    			<option value="209" >Médico oncologista</option>
    		    			<option value="216" >Médico ortopedista</option>
    		    			<option value="217" >Médico ortopedista e traumatologista</option>
    		    			<option value="222" >Médico otorrinolaringologista</option>
    		    			<option value="226" >Médico patologista</option>
    		    			<option value="227" >Médico patologista clínico</option>
    		    			<option value="234" >Médico pediatra</option>
    		    			<option value="238" >Médico perito</option>
    		    			<option value="239" >Médico pneumologista</option>
    		    			<option value="240" >Médico pneumotisiologista</option>
    		    			<option value="245" >Médico proctologista</option>
    		    			<option value="248" >Médico psicanalista</option>
    		    			<option value="249" >Médico psicoterapeuta</option>
    		    			<option value="250" >Médico psiquiatra</option>
    		    			<option value="126" >Médico radiologista</option>
    		    			<option value="127" >Médico radiologista intervencionista</option>
    		    			<option value="256" >Médico radioterapeuta</option>
    		    			<option value="257" >Médico reumatologista</option>
    		    			<option value="31" >MÉDICOS</option>
    		    			<option value="263" >Médico sanitarista</option>
    		    			<option value="218" >Médico traumatologista</option>
    		    			<option value="268" >Médico urologista</option>
    		    			<option value="55" >Médico veterinário</option>
    		    			<option value="56" >Médico veterinário de saúde pública</option>
    		    			<option value="57" >Médico veterinário sanitarista</option>
    		    			<option value="134" >Metabolista</option>
    		    			<option value="135" >Metabologista</option>
    		    			<option value="437" >Motorista de ambulância</option>
    		    			<option value="235" >Neonatologista</option>
    		    			<option value="186" >Neurocirurgião</option>
    		    			<option value="187" >Neurocirurgião pediátrico</option>
    		    			<option value="191" >Neurofisiologista</option>
    		    			<option value="197" >Neurologista</option>
    		    			<option value="198" >Neuropediatra</option>
    		    			<option value="308" >Neuropsicólogo</option>
    		    			<option value="251" >Neuropsiquiatra</option>
    		    			<option value="98" >Nutricionista</option>
    		    			<option value="51" >NUTRICIONISTAS</option>
    		    			<option value="99" >Nutricionista (saúde pública)</option>
    		    			<option value="201" >Nutrologista</option>
    		    			<option value="69" >Odontologista</option>
    		    			<option value="283" >Odontologista social</option>
    		    			<option value="70" >Odontólogo</option>
    		    			<option value="280" >Odontólogo (cirurgia e traumatologia bucomaxilofacial)</option>
    		    			<option value="284" >Odontólogo de saúde coletiva</option>
    		    			<option value="285" >Odontólogo de saúde pública</option>
    		    			<option value="85" >Odontólogo-endodontista</option>
    		    			<option value="269" >Odontólogo protesista</option>
    		    			<option value="177" >Odontopediatra</option>
    		    			<option value="274" >Odontoradiologista</option>
    		    			<option value="21" >Ofiologista</option>
    		    			<option value="206" >Oftalmologista</option>
    		    			<option value="210" >Oncologista</option>
    		    			<option value="357" >Operador de eletrocardiógrafo</option>
    		    			<option value="356" >Operador de eletrocardiógrafo</option>
    		    			<option value="350" >Operador de eletroencefalógrafo</option>
    		    			<option value="434" >Operador de incubadora</option>
    		    			<option value="321" >Óptico oftálmico</option>
    		    			<option value="322" >Óptico optometrista</option>
    		    			<option value="323" >Óptico protesista</option>
    		    			<option value="22" >Ornitólogo</option>
    		    			<option value="192" >Ortodontista</option>
    		    			<option value="193" >Ortodontólogo</option>
    		    			<option value="219" >Ortopedista</option>
    		    			<option value="194" >Ortopedista maxilar</option>
    		    			<option value="110" >Ortoptista</option>
    		    			<option value="223" >Otorrino</option>
    		    			<option value="224" >Otorrinolaringologista</option>
    		    			<option value="38" >Patologista</option>
    		    			<option value="228" >Patologista clínico</option>
    		    			<option value="236" >Pediatra</option>
    		    			<option value="237" >Periodontista</option>
    		    			<option value="136" >Peripatologista</option>
    		    			<option value="18" >Pesquisador de clínica médica</option>
    		    			<option value="23" >Pesquisador de medicina básica</option>
    		    			<option value="241" >Pneumologista</option>
    		    			<option value="242" >Pneumotisiologista</option>
    		    			<option value="246" >Proctologista</option>
    		    			<option value="16" >PROFISSIONAIS DA BIOTECNOLOGIA</option>
    		    			<option value="47" >PROFISSIONAIS DA FISIOTERAPIA E AFINS</option>
    		    			<option value="270" >Protesista</option>
    		    			<option value="252" >Protesista bucomaxilofacial</option>
    		    			<option value="325" >Protesista (técnico)</option>
    		    			<option value="332" >Protético dentário</option>
    		    			<option value="309" >Psicanalista</option>
    		    			<option value="292" >Psicólogo acupunturista</option>
    		    			<option value="293" >Psicólogo clínico</option>
    		    			<option value="301" >Psicólogo criminal</option>
    		    			<option value="288" >Psicólogo da educação</option>
    		    			<option value="294" >Psicólogo da saúde</option>
    		    			<option value="298" >Psicólogo desportivo</option>
    		    			<option value="299" >Psicólogo do esporte</option>
    		    			<option value="306" >Psicólogo do trabalho</option>
    		    			<option value="305" >Psicólogo do trânsito</option>
    		    			<option value="289" >Psicólogo educacional</option>
    		    			<option value="290" >Psicólogo escolar</option>
    		    			<option value="302" >Psicólogo forense</option>
    		    			<option value="300" >Psicólogo hospitalar</option>
    		    			<option value="303" >Psicólogo jurídico</option>
    		    			<option value="307" >Psicólogo organizacional</option>
    		    			<option value="287" >PSICÓLOGOS E PSICANALISTAS</option>
    		    			<option value="304" >Psicólogo social</option>
    		    			<option value="286" >Psicopedagogo</option>
    		    			<option value="295" >Psicoterapeuta</option>
    		    			<option value="253" >Psiquiatra</option>
    		    			<option value="426" >Radioestesista</option>
    		    			<option value="128" >Radiologista</option>
    		    			<option value="258" >Reumatologista</option>
    		    			<option value="318" >Técnico de enfermagem</option>
    		    			<option value="329" >Técnico de enfermagem de terapia intensiva</option>
    		    			<option value="338" >Técnico de enfermagem do trabalho</option>
    		    			<option value="347" >Técnico de enfermagem em saúde mental</option>
    		    			<option value="339" >Técnico de enfermagem em saúde ocupacional</option>
    		    			<option value="340" >Técnico de enfermagem ocupacional</option>
    		    			<option value="348" >Técnico de enfermagem psiquiátrica</option>
    		    			<option value="319" >Técnico de enfermagem socorrista</option>
    		    			<option value="354" >Técnico de laboratório de análises clínicas</option>
    		    			<option value="391" >Técnico em Farmácia</option>
    		    			<option value="330" >Técnico em hemodiálise</option>
    		    			<option value="377" >Técnico em hemodinâmica</option>
    		    			<option value="320" >Técnico em hemotransfusão</option>
    		    			<option value="324" >Técnico em higiene dental</option>
    		    			<option value="327" >Técnico em imobilizações do aparelho locomotor</option>
    		    			<option value="328" >Técnico em imobilizações gessadas</option>
    		    			<option value="390" >Técnico em imunobiológicos</option>
    		    			<option value="312" >Técnico em instrumentação</option>
    		    			<option value="387" >Técnico em laboratório de farmácia</option>
    		    			<option value="311" >Técnico em laboratório óptico</option>
    		    			<option value="378" >Técnico em mamografia</option>
    		    			<option value="439" >Técnico em manutenção de equipamentos e instrumentos médico-hospitalares</option>
    		    			<option value="355" >Técnico em patologia clínica</option>
    		    			<option value="379" >Técnico em radiologia</option>
    		    			<option value="380" >Técnico em radiologia e imagenologia</option>
    		    			<option value="381" >Técnico em radiologia médica</option>
    		    			<option value="382" >Técnico em radiologia odontológica</option>
    		    			<option value="383" >Técnico em tomografia</option>
    		    			<option value="331" >Técnico em UTI</option>
    		    			<option value="326" >Técnico ortopédico</option>
    		    			<option value="313" >TÉCNICOS EM PRÓTESES ORTOPÉDICAS</option>
    		    			<option value="296" >Terapeuta</option>
    		    			<option value="334" >Terapeuta crâneo-sacral</option>
    		    			<option value="335" >Terapeuta holístico</option>
    		    			<option value="336" >Terapeuta manual</option>
    		    			<option value="337" >Terapeuta mio-facial</option>
    		    			<option value="316" >Terapeuta naturalista</option>
    		    			<option value="137" >Terapeuta ocupacional</option>
    		    			<option value="317" >Terapeuta oriental</option>
    		    			<option value="243" >Tisiologista</option>
    		    			<option value="220" >Traumatologista</option>
    		    			<option value="129" >Ultra-sonografista</option>
    		    			<option value="271" >Urologista</option>
    		    			<option value="409" >Visitador de saúde</option>
    		    			<option value="410" >Visitador de saúde em domicílio</option>
    		    		</select>
    	</div>
  	</div>
			
	<div class="form-group">
    	<label for="n_coslh" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Registro Profissional</label>
  			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
      		<input type="text" id="n_coslh" name="n_coslh" value=""  placeholder="Inscrição no Conselho Profissional" maxlength="20" class="form-control">
    	</div>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    		<select id="c_coslh" name="c_coslh" class="c-select" >
    		<option value="">Selecione</option>
    		    			<option value="19" >CNIG - Conselho Nacional de Imigração</option>
    		    			<option value="1" >COREN - Conselho Regional de Enfermagem</option>
    		    			<option value="2" >CRA - Conselho Regional de Administração</option>
    		    			<option value="3" >CRAS - Conselho Regional de Assistentes Sociais</option>
    		    			<option value="4" >CRB - Conselho Regional de Biblioteconomia</option>
    		    			<option value="23" >CRBIO - Conselho Regional de Biologia</option>
    		    			<option value="5" >CRC - Conselho Regional de Contabilidade</option>
    		    			<option value="7" >CREA - Conselho Regional de Engenharia Arquitetura e Agronomia</option>
    		    			<option value="8" >CRECI - Conselho Regional de Corretores de Imóveis</option>
    		    			<option value="6" >CRE - Conselho Regional de Estatística</option>
    		    			<option value="9" >CREFITO - Conselho Regional de Fisioterapia e Terapia Ocupacional</option>
    		    			<option value="20" >CRFA - Conselho Regional de Fonoaudiologia</option>
    		    			<option value="10" >CRF - Conselho Regional de Farmácia</option>
    		    			<option value="11" >CRM - Conselho Regional de Medicina</option>
    		    			<option value="18" >CRMV - Conselho Regional de Medicina Veterinária</option>
    		    			<option value="12" >CRN - Conselho Regional de Nutrição</option>
    		    			<option value="13" >CRO - Conselho Regional de Odontologia</option>
    		    			<option value="14" >CRP - Conselho Regional de Psicologia</option>
    		    			<option value="15" >CRPRE - Conselho Regional de Profissionais de Relações Públicas</option>
    		    			<option value="16" >CRQ - Conselho Regional de Química</option>
    		    			<option value="17" >CRRC - Conselho Regional de Representantes Comerciais</option>
    		    			<option value="21" >OUT - Outros Conselhos</option>
    		    		</select>
    	</div>
    	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    		<select id="c_uf_coslh" name="c_uf_coslh" class="c-select" >
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
    	<div class="col-sm-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-10">
      		<div class="checkbox">
        		<label><input type="checkbox" id="b_indcd_chfia" name="b_indcd_chfia" value="TRUE" > Função de Chefia</label><br>
        	</div>
    	</div>
  	</div>
  	    		

  		<div class="form-group">
    	<div class="col-sm-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-10">
      		<div class="checkbox">
        		<label><input type="checkbox" id="c_ind_atvdd" name="c_ind_atvdd" value="A" > Ativo</label><br>
        	</div>
    	</div>
  	</div>
  	  	
	<!-- Modal da tabela de procedimentos -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Selecione um profissional</h4>
	      </div>
	      <div class="modal-body">
	        
	
			<table id="tbGrid" class="table table-striped" style="width:100%" >
			  	<thead>
			       	<tr>
			            <th width="">Nome</th>
			            <th width="">CPF</th>
			            <th width="">Nascimento</th>
			        	<th width="50" class="text-center">&nbsp;</th>
			    	</tr>
				</thead>
			</table>
	
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal da tabela de procedimentos -->
	

  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="c_pssoa" name="c_pssoa" value="">
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="carregarTelaAjax('profissional-saude','');">Retornar</button>
  			<button type="submit" id="btnConfirmar" class="btn btn-primary">Confirmar</button>
    	</div>
  	</div>
</form>

<!-- Scripts of page -->


<script>
$(document).ready(function(){

	// Validação do formulário
   	$("#frmFormulario").validate({
   		errorElement: 'div',
		errorClass: 'has-error help-block',
		focusInvalid: false,
		rules: {
   			i_acao: {required: true}
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
	            url: "http://10.4.224.74/catalogo/profissional-saude/confirmarincluir",
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
	
	
			$( "#texto_nome" ).focus(function() {
			$('#myModal').modal('show');
		});

	    dataTableLanguageBR['sInfo'] = "_START_ até _END_ de _TOTAL_ registros";
	    dataTableLanguageBR['sInfoEmpty'] = "0 até 0 de 0 registros",
	    
		 $('#tbGrid').DataTable( {
		    	
		    	"aoColumns": [ null, null, { "bSortable": false, "bSearchable": false }, { "bSortable": false, "bSearchable": false } ] ,
				"iDisplayLength": mostrarRegistros,
				"aLengthMenu": dataTablePages,
			    "language": dataTableLanguageBR,
			    "lengthChange": false,
			    "pagingType": "simple",
		    	
		        "processing": true,
		        "serverSide": true,
		        "ajax": {
		            "url": "http://10.4.224.74/catalogo/profissional-saude/gridpessoas",
		            "type": "POST"
		        } 	        	
		    } );
		
});
</script> 

<?php }
}
