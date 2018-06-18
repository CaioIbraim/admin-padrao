var Utilidades = 
{
	verificaData: function(data) 
	{
	    dia = (data.substring(0,2));
	    mes = (data.substring(3,5));
	    ano = (data.substring(6,10));
	
	    situacao = "";
	    // verifica o dia valido para cada mes
	    if ((dia < '01')||(dia < '01' || dia > '30') && (  mes == '04' || mes == '06' || mes == '09' || mes == '11' ) || dia > '31') {
	        return false;
	    }
	
	    // verifica se o mes e valido
	    if (mes < '01' || mes > '12' ) {
	        return false;
	    }
	
	    // verifica se e ano bissexto
	    if (mes == 2 && ( dia < 01 || dia > 29 || ( dia > 28 && (parseInt(ano / 4) != ano / 4)))) {
	        return false;
	    }
	
	    if (data == "") {
	       return false;
	    }
	    return true;
	}
	,
	verificaEmail: function (mail)
	{
		var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
		if(typeof(mail) == "string"){
			if(er.test(mail)){ return true; }
		}else if(typeof(mail) == "object"){
			if(er.test(mail.value)){
						return true;
					}
		}else{
			return false;
        }
	}
	,
	verificaCPF: function(CPF)
	{
		// Verifica se o campo � nulo
		if (CPF == '') 
		{
			return false;
		}
		
		// Aqui come�a a checagem do CPF
		var POSICAO, I, SOMA, DV, DV_INFORMADO;
		var DIGITO = new Array(10);
		DV_INFORMADO = CPF.substr(9, 2); // Retira os dois �ltimos d�gitos do n�mero informado
		
		// Desemembra o n�mero do CPF na array DIGITO
		for (I=0; I<=8; I++) 
		{
		  DIGITO[I] = CPF.substr( I, 1);
		}
		
		// Calcula o valor do 10� d�gito da verifica��o
		POSICAO = 10;
		SOMA = 0;
		for (I=0; I<=8; I++) 
		{
			SOMA = SOMA + DIGITO[I] * POSICAO;
			POSICAO = POSICAO - 1;
		}
		DIGITO[9] = SOMA % 11;
		if (DIGITO[9] < 2) 
		{
			DIGITO[9] = 0;
		}
		else
		{
			DIGITO[9] = 11 - DIGITO[9];
		}
		
		// Calcula o valor do 11� d�gito da verifica��o
		POSICAO = 11;
		SOMA = 0;
		for (I=0; I<=9; I++) 
		{
			SOMA = SOMA + DIGITO[I] * POSICAO;
		  POSICAO = POSICAO - 1;
		}
		DIGITO[10] = SOMA % 11;
		if (DIGITO[10] < 2) 
		{
			DIGITO[10] = 0;
		}
		else 
		{
			DIGITO[10] = 11 - DIGITO[10];
		}
		
		// Verifica se os valores dos d�gitos verificadores conferem
		DV = DIGITO[9] * 10 + DIGITO[10];
		if (DV != DV_INFORMADO) 
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	,
	verificaNIP: function(NIP)
	{
		if (NIP == '') 
		{
			return false;
		}
		
		if (NIP.length != 8)
		{
			return false;
		}
		
		var DIGITO = new Array(8);
		j = 0;
		valor = -1;
		SOMA = 0;
		RESTO = 0;
		
		for (i = 8; i > 0; i--)
		{
			DIGITO[j] = (NIP.substr(j, 1) * i);
			j++;
		}

		for (i = 0; i < 7; i++)
		{
			SOMA = SOMA + DIGITO[i];
		}
		
		RESTO = SOMA % 11;
		
		if (RESTO == 1)
		{
			valor = 0;
		}
		else if (RESTO == 0)
		{
			valor = 1;
		}
		else if (RESTO > 1)
		{
			valor = 11 - RESTO;
		}
		else
		{
			valor = -1;
		}
    
		if (DIGITO[7] == valor)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	,
	abrirJanela: function(strUrl,strNome,tamanho)
	{
		parametros = 'location=no,resizable=no, scrollbars=no,left=100,top=100';
		if (tamanho == 1)
		{
			parametros = parametros+',height=10,width=10';
		}
		if (tamanho == 2)
		{
			parametros = parametros+',height=325,width=600';
		}
		if (tamanho == 3)
		{
			parametros = parametros+',height=300,width=720';
		}
		
		window.open(strUrl,strNome,parametros);
	}
	
	
};


/// VARIAVEIS DE CONFIGURAÃ‡ÃƒO PARA O DATA-TABLE
var mostrarRegistros = 10;

var dataTableLanguageBR = {
		        "sEmptyTable": "Nenhum registro encontrado",
		        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
		        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
		        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
		        "sInfoPostFix": "",
		        "sInfoThousands": ".",
		        "sLengthMenu": "_MENU_ resultados por página",
		        "sLoadingRecords": "Carregando...",
		        "sProcessing": "Processando...",
		        "sZeroRecords": "Nenhum registro encontrado",
		        "sSearch": "Pesquisar",
		        "oPaginate": {
		            "sNext": "Próximo",
		            "sPrevious": "Anterior",
		            "sFirst": "Primeiro",
		            "sLast": "Último"
		        },
		        "oAria": {
		            "sSortAscending": ": Ordenar colunas de forma ascendente",
		            "sSortDescending": ": Ordenar colunas de forma descendente"
		        }
		    };


//var dataTablePages = [[10, 25, -1], [10, 25, "Todos"]];
var dataTablePages = [[10, 25], [10, 25]];

var datepickerBR = {
	dateFormat: 'dd/mm/yy',
	dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
    nextText: 'Próximo',
    prevText: 'Anterior'
}