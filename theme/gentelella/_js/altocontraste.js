
$( document ).ready(function() {
	
	$('.contraste').attr( "aaa",false );
					
	$(".contraste").click(function() {
		
		if ($('.contraste').attr( "aaa") == 'true'){
			$('.contraste').attr( "aaa",false );
			altoContraste($(this),'false');
		} else {
			$('.contraste').attr( "aaa",true );
			altoContraste($(this),'true');
		}
		
		//return false;
	});
					
	function altoContraste(objeto,situacao){
		//console.log(objeto + ' a a' + situacao);

		if (situacao == 'true'){
			$(".container").css("background-color","#000");
			$("body").css("background-color","#191919");
			$(".header").css("background-color","#0C0C0C");
			$(".alert-info").css("background-color","#0C0C0C");
			$(".alert").css("color","#fff");
			$(".panel-body").css("background-color","#0C0C0C");
			$(".panel-body").css("color","#fff");
			$(".panel-heading").css("background-color","#191919");
			$(".panel-heading").css("color","#fff");
			$(".form-control").css("background-color","#191919");
			$(".form-control").css("color","#fff");
			$("footer").css("background-color","#191919");
			$(".header").css("border-top-color","#191919");
			$(".estilo_ie7,.titulo_header").css("background-color","#191919");
			$(".pager li > a").css("background-color","#191919");
			$(".pager li > a").css("color","#fff");
			$(".espaco_titulo").css("background-color","#191919");
			$(".espaco_titulo").css("color","#fff");
			$("thead th").css("color","#fff");
			$("thead th,td").css("background-color","#191919");
			$("thead th").css("border-color","#232323");
			$("td").css("color","#fff");
			$("td a").css("color","#E2D8FF");

			//objeto.attr('id','false');
			//$(this).attr('rel','false');
		} else {
			$(".container").css("background-color","");
			$("body").css("background-color","");
			$(".header").css("background-color","");
			$(".alert-info").css("background-color","");
			$(".alert").css("color","");
			$(".panel-body").css("background-color","");
			$(".panel-body").css("color","");
			$(".panel-heading").css("background-color","");
			$(".form-control").css("background-color","");
			$(".form-control").css("color","");
			$("footer").css("background-color","");
			$(".header").css("border-top-color","");
			$(".estilo_ie7,.titulo_header").css("background-color","");
			$(".pager li > a").css("background-color","");
			$(".pager li > a").css("color","");
			$(".espaco_titulo").css("background-color","");
			$(".espaco_titulo").css("color","");
			$("thead th").css("color","");
			$("thead th,td").css("background-color","");
			$("thead th").css("border-color","");
			$("td").css("color","");
			$("td a").css("color","");
			
			//objeto.attr('id','true');
			//$(this).attr('rel','false');
							
		}
	}
});