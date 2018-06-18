<?php
/* Smarty version 3.1.30, created on 2017-02-08 14:28:53
  from "D:\www\catalogo\views\centro-atividade-om\formulario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589b47455c6508_07674904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f37a2ed08c8aaa1945d6f7b03d7d19314298e3c' => 
    array (
      0 => 'D:\\www\\catalogo\\views\\centro-atividade-om\\formulario.html',
      1 => 1484742050,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_589b47455c6508_07674904 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- script e css da tela -->
<script src="http://localhost/catalogo/views/_jquery/jquery.mask.min.js"></script>
<script src="http://localhost/catalogo/views/_jquery/jquery.validate/jquery.validate.min.js"></script>
<script src="http://localhost/catalogo/views/_jquery/jquery.validate/localization/messages_pt_BR.js"></script>
<!-- script e css da tela -->

<div id="msgAjax"></div>
<div class="page-header sigsaude"><h2>Centro de Atividades da OM <small><i class="fa fa-angle-double-right"></i> Alterar dados</small></h2></div>

<form class="form-horizontal" method="post" id="frmFormulario" action="">
	<div class="form-group">
    	<label for="c_categ_ctro_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Categoria</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
    		<select id="c_categ_ctro_atvdd" name="c_categ_ctro_atvdd" class="c-select"  required>
    		<option value="">Selecione</option>
    		    			<option value="3" >Administrativo</option>
    		    			<option value="1" selected>Clínica</option>
    		    			<option value="2" >Enfermagem</option>
    		    			<option value="4" >Laboratório</option>
    		    			<option value="5" >Serviço</option>
    		    		</select>
    	</div>
  	</div>
  	
  	<div class="form-group">
    	<label for="c_categ_ctro_atvdd" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">Centro de Atividade</label>
    	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 obrigatorio">
    		<select id="c_ctro_atvdd" name="c_ctro_atvdd" class="c-select"  required>
    		<option value="">Selecione</option>
    		    			<option value="1" >Acupuntura</option>
    		    			<option value="2" >Alergia e Imunologia</option>
    		    			<option value="3" >Anestesiologia</option>
    		    			<option value="4" >Angiologia</option>
    		    			<option value="6" >Cardiologia</option>
    		    			<option value="56" >CATI</option>
    		    			<option value="7" >Cirurgia Cardiovascular</option>
    		    			<option value="8" >Cirurgia da Mão</option>
    		    			<option value="9" >Cirurgia de Cabeça e Pescoço</option>
    		    			<option value="10" >Cirurgia do Aparelho Digestivo</option>
    		    			<option value="83" >Cirurgia e Traumatologia bucomaxilofacial</option>
    		    			<option value="11" >Cirurgia Geral</option>
    		    			<option value="12" >Cirurgia Pediátrica</option>
    		    			<option value="13" >Cirurgia Plástica</option>
    		    			<option value="14" >Cirurgia Torácica</option>
    		    			<option value="15" >Cirurgia Vascular</option>
    		    			<option value="16" >Clínica Médica</option>
    		    			<option value="17" >Coloproctologia</option>
    		    			<option value="86" >Dentística</option>
    		    			<option value="18" >Dermatologia</option>
    		    			<option value="87" >Disfunção temporomandibular e dor orofacial</option>
    		    			<option value="19" >Endocrinologia e Metabologia</option>
    		    			<option value="69" >Endodontia</option>
    		    			<option value="20" >Endoscopia</option>
    		    			<option value="70" >Epidemiologia</option>
    		    			<option value="71" >Estomatologia</option>
    		    			<option value="61" >Fisioterapia</option>
    		    			<option value="54" >Fonoaudiologia</option>
    		    			<option value="55" >GAAPE</option>
    		    			<option value="21" >Gastroenterologia</option>
    		    			<option value="22" >Genética Médica</option>
    		    			<option value="23" >Geriatria</option>
    		    			<option value="24" >Ginecologia e Obstetrícia</option>
    		    			<option value="25" >Hematologia e Hemoterapia</option>
    		    			<option value="26" >Homeopatia</option>
    		    			<option value="72" >Implantodontia</option>
    		    			<option value="27" >Infectologia</option>
    		    			<option value="28" >Mastologia</option>
    		    			<option value="29" >Medicina de Família e Comunidade</option>
    		    			<option value="31" >Medicina de Tráfego</option>
    		    			<option value="30" >Medicina do Trabalho</option>
    		    			<option value="32" >Medicina Esportiva</option>
    		    			<option value="33" >Medicina Física e Reabilitação</option>
    		    			<option value="34" >Medicina Intensiva</option>
    		    			<option value="35" >Medicina Legal e Perícia Médica</option>
    		    			<option value="36" >Medicina Nuclear</option>
    		    			<option value="37" >Medicina Preventiva e Social</option>
    		    			<option value="38" >Nefrologia</option>
    		    			<option value="39" >Neurocirurgia</option>
    		    			<option value="40" >Neurologia</option>
    		    			<option value="41" >Nutrologia</option>
    		    			<option value="73" >Odontogeriatria</option>
    		    			<option value="85" >Odontologia do trabalho</option>
    		    			<option value="74" >Odontologia legal</option>
    		    			<option value="88" >Odontologia para pacientes com necessidades especiais</option>
    		    			<option value="75" >Odontopediatria</option>
    		    			<option value="42" >Oftalmologia</option>
    		    			<option value="67" >Oncologia Cirúrgica</option>
    		    			<option value="68" >Oncologia Clínica</option>
    		    			<option value="66" >Oncologia Pediátrica</option>
    		    			<option value="76" >Ortopedia e ortodontia</option>
    		    			<option value="43" >Ortopedia e Traumatologia</option>
    		    			<option value="44" >Otorrinolaringologia</option>
    		    			<option value="45" >Patologia</option>
    		    			<option value="77" >Patologia bucal</option>
    		    			<option value="46" >Patologia Clínica/Medicina Laboratorial</option>
    		    			<option value="47" >Pediatria</option>
    		    			<option value="78" >Periodontia</option>
    		    			<option value="48" >Pneumologia</option>
    		    			<option value="80" >Prótese ondontológica</option>
    		    			<option value="79" >Protesiologia bucomaxilofacial</option>
    		    			<option value="57" >Psicologia</option>
    		    			<option value="49" selected>Psiquiatria</option>
    		    			<option value="50" >Radiologia e Diagnóstico por Imagem</option>
    		    			<option value="81" >Radiologia ondontológica</option>
    		    			<option value="51" >Radioterapia</option>
    		    			<option value="82" >Reabilitação oral ondontológica</option>
    		    			<option value="52" >Reumatologia</option>
    		    			<option value="84" >Saúde coletiva ondontológica</option>
    		    			<option value="53" >Urologia</option>
    		    		</select>
    	</div>
  	</div>
	
  		<div class="form-group">
    	<div class="col-sm-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-10">
      		<div class="checkbox">
        		<label><input type="checkbox" id="c_ind_atvdd" name="c_ind_atvdd" value="A" checked> Ativo</label><br>
        	</div>
    	</div>
  	</div>
  	  	
  	<div class="form-group" id="btnBoxFooter">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
    		<input type="hidden" id="c_oms_ctro_atvdd" name="c_oms_ctro_atvdd" value="163">
    		<button type="button" id="btnCancelar" class="btn btn-default" onclick="carregarTelaAjax('centro-atividade-om','');">Retornar</button>
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
	            url: "http://localhost/catalogo/centro-atividade-om/confirmaralterar",
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
	
   	$('#c_categ_ctro_atvdd').change(function(){
        $('#c_ctro_atvdd').load('http://localhost/catalogo/centro-atividade-om/atualizaComboCentros/'+$('#c_categ_ctro_atvdd').val() );
    });

   	
});
</script> 

<?php }
}
