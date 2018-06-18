<?php
/* Smarty version 3.1.30, created on 2017-09-06 09:55:55
  from "C:\xampp\htdocs\produtividade\views\basico\relatorios\guias\guias-por-ose.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aff05b203942_67302693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61956782ce479b5b651cb90e517eb34a379a8ed3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\produtividade\\views\\basico\\relatorios\\guias\\guias-por-ose.html',
      1 => 1504529260,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59aff05b203942_67302693 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-title">
	   	<div class="title_left">
      		
		<ol class="breadcrumb">
		  <li><a href="http://10.4.225.62/produtividade/"><i class="fa fa-home"></i> Principal</a></li>
		  		  <li class="active">Regulação</li>
		  		  <li class="active">Consultas geradas por OM</li>
		  		</ol>
      		
    	</div>
    		</div>
<div class="clearfix"></div>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!-- script e css da tela -->
<link href="http://10.4.225.62/produtividade/views/_jquery/jquery.dataTables/datatables.min.css" rel="stylesheet">
<script src="http://10.4.225.62/produtividade/views/_jquery/jquery.dataTables/datatables.min.js"></script>
<!-- script e css da tela -->
<!-- bootstrap-daterangepicker -->
<link href="http://10.4.225.62/produtividade/views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<!-- bootstrap-datetimepicker -->
<link href="http://10.4.225.62/produtividade/views/_gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<!-- bootstrap-select -->
<link href="http://10.4.225.62/produtividade/views/_css/bootstrap-select/bootstrap-select.css" rel="stylesheet">





<div class="row">
	<div class="col-md-12">
		<form>
			<div class='row'>
				
				<div class="col-md-3 col-sm-3 col-xs-12">
					<select name="foo" id="ano">
<option value="2017" id="ano-0">2017</option>
<option value="2016" selected="selected" id="ano-1">2016</option>
<option value="2015" id="ano-2">2015</option>
<option value="2014" id="ano-3">2014</option>
<option value="2013" id="ano-4">2013</option>
</select>

				</div>
				
				<div class="col-md-3">
					<select name="foo" id="om">
<option value="661" id="om-0">UMESQ</option>
</select>
   
				</div>
				
				
				
				<div class="col-md-3">
					<select name="foo" id="cbos">
<option value="15" id="cbos-0">Gerente de serviços sociais</option>
<option value="13" id="cbos-1">Gerente de nutrição em unidades de saúde</option>
<option value="14" id="cbos-2">Gerente de serviços de saúde</option>
<option value="17" id="cbos-3">Geneticista</option>
<option value="30" id="cbos-4">Biomédico</option>
<option value="31" id="cbos-5">MÉDICOS</option>
<option value="33" id="cbos-6">Médico acupunturista</option>
<option value="34" id="cbos-7">Médico alergista</option>
<option value="35" id="cbos-8">Médico alergista e imunologista</option>
<option value="36" id="cbos-9">Médico imunologista</option>
<option value="37" id="cbos-10">Médico anatomopatologista</option>
<option value="38" id="cbos-11">Patologista</option>
<option value="39" id="cbos-12">Anestesiologista</option>
<option value="40" id="cbos-13">Anestesista</option>
<option value="42" id="cbos-14">Médico anestesiologista</option>
<option value="43" id="cbos-15">Médico anestesista</option>
<option value="44" id="cbos-16">Angiologista</option>
<option value="46" id="cbos-17">Médico angiologista</option>
<option value="48" id="cbos-18">Cardiologista</option>
<option value="49" id="cbos-19">Médico cardiologista</option>
<option value="52" id="cbos-20">Cirurgião cardiovascular</option>
<option value="54" id="cbos-21">Médico cirurgião cardiovascular</option>
<option value="58" id="cbos-22">Cirurgião de cabeça e pescoço</option>
<option value="62" id="cbos-23">Médico cirurgião de cabeça e pescoço</option>
<option value="64" id="cbos-24">Cirurgião do aparelho digestivo</option>
<option value="65" id="cbos-25">Cirurgião gastroenterológico</option>
<option value="68" id="cbos-26">Médico cirurgião do aparelho digestivo</option>
<option value="71" id="cbos-27">Cirurgião geral</option>
<option value="74" id="cbos-28">Médico cirurgião</option>
<option value="75" id="cbos-29">Médico cirurgião geral</option>
<option value="78" id="cbos-30">Cirurgião pediátrico</option>
<option value="79" id="cbos-31">Médico cirurgião pediátrico</option>
<option value="80" id="cbos-32">Cirurgião plástico</option>
<option value="81" id="cbos-33">Médico cirurgião plástico</option>
<option value="83" id="cbos-34">Cirurgião torácico</option>
<option value="84" id="cbos-35">Médico cirurgião torácico</option>
<option value="87" id="cbos-36">Médico citopatologista</option>
<option value="89" id="cbos-37">Clínico geral</option>
<option value="90" id="cbos-38">Médico clínico</option>
<option value="91" id="cbos-39">Médico clínico geral</option>
<option value="92" id="cbos-40">Médico especialista em clínica médica</option>
<option value="93" id="cbos-41">Médico especialista em medicina interna</option>
<option value="94" id="cbos-42">Médico internista</option>
<option value="95" id="cbos-43">Médico comunitário</option>
<option value="97" id="cbos-44">Médico de saúde da família</option>
<option value="101" id="cbos-45">Dermatologista</option>
<option value="103" id="cbos-46">Hansenólogo</option>
<option value="104" id="cbos-47">Médico dermatologista</option>
<option value="105" id="cbos-48">Médico do trabalho</option>
<option value="107" id="cbos-49">Médico em eletroencefalografia</option>
<option value="108" id="cbos-50">Médico em endoscopia</option>
<option value="109" id="cbos-51">Médico endoscopista</option>
<option value="114" id="cbos-52">Intensivista</option>
<option value="115" id="cbos-53">Médico em medicina intensiva</option>
<option value="116" id="cbos-54">Médico em medicina nuclear</option>
<option value="117" id="cbos-55">Médico nuclear</option>
<option value="119" id="cbos-56">Imagenologista</option>
<option value="121" id="cbos-57">Médico angioradiologista</option>
<option value="122" id="cbos-58">Médico densitometrista</option>
<option value="123" id="cbos-59">Médico em diagnóstico por imagem</option>
<option value="124" id="cbos-60">Médico em radiologia e diagnóstico por imagem</option>
<option value="125" id="cbos-61">Médico neuroradiologista</option>
<option value="126" id="cbos-62">Médico radiologista</option>
<option value="127" id="cbos-63">Médico radiologista intervencionista</option>
<option value="128" id="cbos-64">Radiologista</option>
<option value="129" id="cbos-65">Ultra-sonografista</option>
<option value="131" id="cbos-66">Médico endocrinologista</option>
<option value="132" id="cbos-67">Médico endocrinologista e metabologista</option>
<option value="133" id="cbos-68">Médico metabolista</option>
<option value="134" id="cbos-69">Metabolista</option>
<option value="135" id="cbos-70">Metabologista</option>
<option value="138" id="cbos-71">Fisiatra</option>
<option value="139" id="cbos-72">Médico fisiatra</option>
<option value="140" id="cbos-73">Foniatra</option>
<option value="141" id="cbos-74">Médico foniatra</option>
<option value="142" id="cbos-75">Médico gastroenterologista</option>
<option value="148" id="cbos-76">Médico alopata</option>
<option value="149" id="cbos-77">Médico em medicina interna</option>
<option value="150" id="cbos-78">Médico generalista</option>
<option value="152" id="cbos-79">Médico geneticista</option>
<option value="153" id="cbos-80">Geriatra</option>
<option value="154" id="cbos-81">Gerontologista</option>
<option value="155" id="cbos-82">Gerontólogo</option>
<option value="156" id="cbos-83">Médico geriatra</option>
<option value="157" id="cbos-84">Cirurgião ginecológico</option>
<option value="158" id="cbos-85">Ginecologista</option>
<option value="160" id="cbos-86">Médico ginecologista</option>
<option value="161" id="cbos-87">Médico ginecologista e obstetra</option>
<option value="162" id="cbos-88">Médico obstetra</option>
<option value="164" id="cbos-89">Hematologista</option>
<option value="165" id="cbos-90">Médico hematologista</option>
<option value="167" id="cbos-91">Hemoterapeuta</option>
<option value="168" id="cbos-92">Médico em hemoterapia</option>
<option value="169" id="cbos-93">Médico hemoterapeuta</option>
<option value="170" id="cbos-94">Médico homeopata</option>
<option value="171" id="cbos-95">Infectologista</option>
<option value="172" id="cbos-96">Médico de doenças infecciosas e parasitárias</option>
<option value="173" id="cbos-97">Médico infectologista</option>
<option value="176" id="cbos-98">Médico legista</option>
<option value="179" id="cbos-99">Cirurgião mastologista</option>
<option value="180" id="cbos-100">Mastologista</option>
<option value="181" id="cbos-101">Médico mastologista</option>
<option value="183" id="cbos-102">Médico nefrologista</option>
<option value="184" id="cbos-103">Médico neurocirurgião</option>
<option value="295" id="cbos-104">Psicoterapeuta</option>
<option value="185" id="cbos-105">Médico neurocirurgião pediátrico</option>
<option value="186" id="cbos-106">Neurocirurgião</option>
<option value="187" id="cbos-107">Neurocirurgião pediátrico</option>
<option value="190" id="cbos-108">Médico neurofisiologista</option>
<option value="191" id="cbos-109">Neurofisiologista</option>
<option value="195" id="cbos-110">Médico neurologista</option>
<option value="196" id="cbos-111">Médico neuropediatra</option>
<option value="197" id="cbos-112">Neurologista</option>
<option value="198" id="cbos-113">Neuropediatra</option>
<option value="199" id="cbos-114">Médico nutrologista</option>
<option value="200" id="cbos-115">Médico nutrólogo</option>
<option value="201" id="cbos-116">Nutrologista</option>
<option value="202" id="cbos-117">Cirurgião oftalmológico</option>
<option value="205" id="cbos-118">Médico oftalmologista</option>
<option value="206" id="cbos-119">Oftalmologista</option>
<option value="208" id="cbos-120">Médico cancerologista</option>
<option value="209" id="cbos-121">Médico oncologista</option>
<option value="210" id="cbos-122">Oncologista</option>
<option value="211" id="cbos-123">Cirurgião de mão</option>
<option value="212" id="cbos-124">Cirurgião ortopedista</option>
<option value="213" id="cbos-125">Cirurgião traumatologista</option>
<option value="214" id="cbos-126">Médico cirurgião de mão</option>
<option value="215" id="cbos-127">Médico de medicina esportiva</option>
<option value="216" id="cbos-128">Médico ortopedista</option>
<option value="217" id="cbos-129">Médico ortopedista e traumatologista</option>
<option value="218" id="cbos-130">Médico traumatologista</option>
<option value="219" id="cbos-131">Ortopedista</option>
<option value="220" id="cbos-132">Traumatologista</option>
<option value="221" id="cbos-133">Cirurgião otorrinolaringologista</option>
<option value="222" id="cbos-134">Médico otorrinolaringologista</option>
<option value="224" id="cbos-135">Otorrinolaringologista</option>
<option value="225" id="cbos-136">Médico laboratorista</option>
<option value="226" id="cbos-137">Médico patologista</option>
<option value="227" id="cbos-138">Médico patologista clínico</option>
<option value="228" id="cbos-139">Patologista clínico</option>
<option value="234" id="cbos-140">Médico pediatra</option>
<option value="235" id="cbos-141">Neonatologista</option>
<option value="236" id="cbos-142">Pediatra</option>
<option value="238" id="cbos-143">Médico perito</option>
<option value="239" id="cbos-144">Médico pneumologista</option>
<option value="240" id="cbos-145">Médico pneumotisiologista</option>
<option value="241" id="cbos-146">Pneumologista</option>
<option value="242" id="cbos-147">Pneumotisiologista</option>
<option value="243" id="cbos-148">Tisiologista</option>
<option value="244" id="cbos-149">Cirurgião proctologista</option>
<option value="245" id="cbos-150">Médico proctologista</option>
<option value="246" id="cbos-151">Proctologista</option>
<option value="248" id="cbos-152">Médico psicanalista</option>
<option value="249" id="cbos-153">Médico psicoterapeuta</option>
<option value="250" id="cbos-154">Médico psiquiatra</option>
<option value="251" id="cbos-155">Neuropsiquiatra</option>
<option value="253" id="cbos-156">Psiquiatra</option>
<option value="255" id="cbos-157">Médico em radioterapia</option>
<option value="256" id="cbos-158">Médico radioterapeuta</option>
<option value="257" id="cbos-159">Médico reumatologista</option>
<option value="258" id="cbos-160">Reumatologista</option>
<option value="259" id="cbos-161">Epidemiologista</option>
<option value="260" id="cbos-162">Médico de saúde pública</option>
<option value="261" id="cbos-163">Médico epidemiologista</option>
<option value="262" id="cbos-164">Médico higienista</option>
<option value="263" id="cbos-165">Médico sanitarista</option>
<option value="264" id="cbos-166">Andrologista</option>
<option value="266" id="cbos-167">Cirurgião urológico</option>
<option value="267" id="cbos-168">Cirurgião urologista</option>
<option value="268" id="cbos-169">Médico urologista</option>
<option value="271" id="cbos-170">Urologista</option>
<option value="32" id="cbos-171">CIRURGIÕES-DENTISTAS</option>
<option value="63" id="cbos-172">Cirurgião dentista - clínico geral</option>
<option value="66" id="cbos-173">Dentista</option>
<option value="69" id="cbos-174">Odontologista</option>
<option value="70" id="cbos-175">Odontólogo</option>
<option value="82" id="cbos-176">Cirurgião dentista - endodontista</option>
<option value="85" id="cbos-177">Odontólogo-endodontista</option>
<option value="100" id="cbos-178">Cirurgião dentista - epidemiologista</option>
<option value="111" id="cbos-179">Cirurgião dentista - estomatologista</option>
<option value="130" id="cbos-180">Cirurgião dentista - implantodontista</option>
<option value="143" id="cbos-181">Cirurgião dentista - odontogeriatra</option>
<option value="144" id="cbos-182">Dentista de idosos</option>
<option value="163" id="cbos-183">Cirurgião dentista - odontologista legal</option>
<option value="174" id="cbos-184">Cirurgião dentista - odontopediatra</option>
<option value="177" id="cbos-185">Odontopediatra</option>
<option value="188" id="cbos-186">Cirurgião dentista - ortopedista e ortodontista</option>
<option value="192" id="cbos-187">Ortodontista</option>
<option value="193" id="cbos-188">Ortodontólogo</option>
<option value="194" id="cbos-189">Ortopedista maxilar</option>
<option value="207" id="cbos-190">Cirurgião dentista - patologista bucal</option>
<option value="229" id="cbos-191">Cirurgião dentista - periodontista</option>
<option value="237" id="cbos-192">Periodontista</option>
<option value="247" id="cbos-193">Cirurgião dentista - protesiólogo bucomaxilofacial</option>
<option value="252" id="cbos-194">Protesista bucomaxilofacial</option>
<option value="265" id="cbos-195">Cirurgião dentista - protesista</option>
<option value="269" id="cbos-196">Odontólogo protesista</option>
<option value="270" id="cbos-197">Protesista</option>
<option value="273" id="cbos-198">Cirurgião dentista - radiologista</option>
<option value="274" id="cbos-199">Odontoradiologista</option>
<option value="277" id="cbos-200">Cirurgião dentista - reabilitador oral</option>
<option value="278" id="cbos-201">Cirurgião dentista - traumatologista bucomaxilofacial</option>
<option value="279" id="cbos-202">Cirurgião oral e maxilofacial</option>
<option value="280" id="cbos-203">Odontólogo (cirurgia e traumatologia bucomaxilofacial)</option>
<option value="281" id="cbos-204">Cirurgião dentista de saúde coletiva</option>
<option value="282" id="cbos-205">Dentista de sáude coletiva</option>
<option value="283" id="cbos-206">Odontologista social</option>
<option value="284" id="cbos-207">Odontólogo de saúde coletiva</option>
<option value="285" id="cbos-208">Odontólogo de saúde pública</option>
<option value="59" id="cbos-209">Farmacêutico</option>
<option value="60" id="cbos-210">Farmacêutico homeopata</option>
<option value="61" id="cbos-211">Farmacêutico hospitalar</option>
<option value="182" id="cbos-212">Enfermeiro nefrologista</option>
<option value="47" id="cbos-213">PROFISSIONAIS DA FISIOTERAPIA E AFINS</option>
<option value="72" id="cbos-214">Fisioterapeuta</option>
<option value="73" id="cbos-215">Fisioterapeuta acupunturista</option>
<option value="136" id="cbos-216">Peripatologista</option>
<option value="137" id="cbos-217">Terapeuta ocupacional</option>
<option value="51" id="cbos-218">NUTRICIONISTAS</option>
<option value="98" id="cbos-219">Nutricionista</option>
<option value="99" id="cbos-220">Nutricionista (saúde pública)</option>
<option value="53" id="cbos-221">FONOAUDIÓLOGOS</option>
<option value="102" id="cbos-222">Fonoaudiólogo</option>
<option value="286" id="cbos-223">Psicopedagogo</option>
<option value="287" id="cbos-224">PSICÓLOGOS E PSICANALISTAS</option>
<option value="288" id="cbos-225">Psicólogo da educação</option>
<option value="289" id="cbos-226">Psicólogo educacional</option>
<option value="290" id="cbos-227">Psicólogo escolar</option>
<option value="293" id="cbos-228">Psicólogo clínico</option>
<option value="294" id="cbos-229">Psicólogo da saúde</option>
<option value="296" id="cbos-230">Terapeuta</option>
<option value="298" id="cbos-231">Psicólogo desportivo</option>
<option value="300" id="cbos-232">Psicólogo hospitalar</option>
<option value="304" id="cbos-233">Psicólogo social</option>
<option value="306" id="cbos-234">Psicólogo do trabalho</option>
<option value="308" id="cbos-235">Neuropsicólogo</option>
<option value="309" id="cbos-236">Psicanalista</option>
<option value="291" id="cbos-237">Assistente social</option>
<option value="314" id="cbos-238">Acupunturista</option>
<option value="332" id="cbos-239">Protético dentário</option>
<option value="333" id="cbos-240">Médico oncologista cirúrgico</option>
</select>
   
				</div>
				
				
				
				<div class="col-md-3 col-sm-3 col-xs-12 pull-right">
					<a class="btn btn-success" id="btn-pesq-aut"><i class="fa fa-search"></i></a>
				</div>
				
			</div>
		</form>
	</div>
</div>
<hr>

<div class="row">
<div id="b"></div>
</div>

<!-- bootstrap-daterangepicker -->
<script src="http://10.4.225.62/produtividade/views/_js/bootstrap-select/bootstrap-select.min.js"></script>
<script src="http://10.4.225.62/produtividade/views/_gentelella/vendors/moment/min/moment.min.js"></script>
<script src="http://10.4.225.62/produtividade/views/_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<script>
$('document').ready(function(){
	
	//$("#b").html();
	$("#btn-pesq-aut").click(function(){
		 $("#b").html('');
		var ano  = $("#ano").val();
		var cbos = $("#cbos").val();
		var om   = $("#om").val();
		
		getData(ano, cbos, om);
	});
	
	function getData(ano, cbos, om){
		
		$.ajax({
			  method: "POST",
			  url: "guias/restConsultaGuiasPorOse",
			  data: {ano : ano, cbos : cbos, om : om},
			  dataType: "html",
			  beforeSend: function(){
	          		$("#b").html(imagemAjax);
	           },
	           success: function(data){
	                //this.append(data);
	                $("#b").html(data);	            
	           }
		});
	}
	
	$('#ano').selectpicker({
	   liveSearch: true,
	   maxOptions: 1
	});
	

	$('#om').selectpicker({
	   liveSearch: true,
	   maxOptions: 1
	});
	
	$('#cbos').selectpicker({
	   liveSearch: true,
	   maxOptions: 1
	});
	
});
</script>

<?php }
}
