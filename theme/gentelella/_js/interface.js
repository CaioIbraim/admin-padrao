(function($){
	"use strict";
	// console.log('docs.js carregado');

	// Contraste
	$('#contraste').click(function(){   
		$('body').toggleClass('contraste-ativo');
	});
	
	// Select Personalizado (.c-select)
	$('.c-select').after('<span><i class="c-sigsaude"></i></span>');

	// Componente Personalizado Tab Progress Bar
	$(document).find('.progress').parent().each(function(){
		// C
		if(!$(this).hasClass('tab-progress-bar')) {
			console.log($(this).attr('class'));
		}
		else {
			var steps = 0;
			var progressBarFullWidth = 100;
			$('.nav-tabs').find('li').each(function(index, element){
				steps += index;
				$(element).find('a').click(function (e) {
					e.preventDefault();
					var minWidth = progressBarFullWidth / steps;
					var barWidth = (minWidth * (index+1));
					var $progressBar = $(this).parents('.tab-progress-bar').find('.progress-bar');
					$progressBar.text('Passo ' + (index+1) + ' de ' + steps + ' completados')
								.css('width', barWidth + '%');
					if(barWidth == 100 && $progressBar.hasClass('progress-bar-info')) {
						$progressBar.removeClass('progress-bar-info').addClass('progress-bar-success');
					}
					else {
						$progressBar.removeClass('progress-bar-success').addClass('progress-bar-info');
					}
				});
				return steps;
			});
			//console.log('número de passos: ' + steps);
			$(this).find('.progress-bar').text('Passo 1 de ' + steps + ' completados');
		}
	});
})(jQuery);