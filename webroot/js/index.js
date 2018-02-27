$(document).ready(function () {
	exibirNotificacoes();
	exibirData();
	voltarInicioPagina();
	exibirFormTarefas();
	exibirMenu();
	exibirFormAcoesAjuizadas();
	exibirFormResolucaoExtraJudicial();
	exibeInput();
	exibirMunicipios_exibirCampoOutros();

	


});






function exibirNotificacoes() {
	$("#icone-notificacao").on('click', function () {

		$("#notificacoes").toggle('fade');
		$("#nome-usuario").toggle();

	});


}


function exibirData() {
	$(".data").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'dd/mm/yy',
		buttonImageOnly: true,

		dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
		monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
	});
}


function voltarInicioPagina() {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 200) {
			$('.voltar-ao-topo').fadeIn('fade');
		} else {
			$('.voltar-ao-topo').fadeOut('fade');
		}
	});

	// Faz animação para subir
	$('.voltar-ao-topo').click(function (event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, 300);
		
		    $('.tabela-esconder').hide('slow');
	});

}




function exibirFormTarefas() {
	$("#exibir-form").on("click", function () {
		$("#formulario-tarefas").toggle("fade");

	});

}

function exibirFormAcoesAjuizadas() {
	$("#exibir-form-acoes-ajuizadas").on("click", function () {
		$("#formulario-acoes-ajuizadas").toggle("fade");

	});

}

function exibirFormResolucaoExtraJudicial() {
	$("#exibir-form-resolucao-extraJudicial").on("click", function () {
		$("#formulario-resolucao-extraJudicial").toggle("fade");

	});

}


function exibirMenu() {

	$('#menu-suspenso').click(function () {

		$('#menu-esquerdo').toggle('fade');
	});

	$("main").mouseover(function () {
		$("#menu-esquerdo").hide();
	});


}



function exibeInput() {
	$('#tipo-resolucao-extra-judicial').change(function () {
		if ($('[value=orgaos-publicos]').is('option:selected')) {	
			$('#tipo-orgao').show("slow");
		} else {	
			$('#tipo-orgao').hide("slow");
		}
		
		if ($('[value=empresa]').is('option:selected')) {
			$('#tipo-empresa').show("slow");
		} else {
			
			$('#tipo-empresa').hide("slow");
		}
		
		
				
	});

	$('#tipo-resolucao-extra-judicial').change(function(){	 
	       
	   if($('[value=orgaos-publicos]').is('option:selected') || $('[value=empresa]').is('option:selected')){
			 
			  $('#forma-contato').show("slow");
		 } else{
			 
			  $('#forma-contato').hide("slow");
		 }
   });
			
}


function exibirMunicipios_exibirCampoOutros(){
	$('#tipo-orgao').change(function(){
		if($('[value=municipio]').is('option:selected')){
			 $('#lista-municipio').show("slow");
		}else{
			$('#lista-municipio').hide("slow");
		}
		
		
		if($('[value=outros-orgao]').is('option:selected')){
			 $('#outro-orgao').show("slow");
		}else{
			$('#outro-orgao').hide("slow");
		}
	});
	
	
	$('#tipo-empresa').change(function(){
		
		if($('[value=outro-empresa]').is('option:selected')){
			 $('#outros-empresa').show("slow");
		}else{
			$('#outros-empresa').hide("slow");
		}
	})
}
