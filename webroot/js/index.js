$(document).ready(function () {
	exibirNotificacoes();
	exibirData();
	voltarInicioPagina();
	exibeInput();
	exibirMunicipios_exibirCampoOutros();
	exibicaoforms();
	exibirMenuLateral();
	mascarasInputs();
	contadoresAbaAgendamento(); /* só para desmostraçao visual, será apagado*/
	contadoresModalAgendamento(); /* só para desmostraçao visual, será apagado*/
	exibirTabelaGrafico();
	inputNovoAtendimento();
	exibirSelectsAtividades();
	selectUnidadeJudicial();
});




/* só para desmostraçao visual, será apagado*/
function contadoresModalAgendamento() {
	$('#todos-modal').click(function () {
		$('.retorno-modal').show('fade');
		$('.inicial-modal').show('fade');
	});

	$('#inicial-modal').click(function () {
		$('.retorno-modal').hide('fade');
		$('.inicial').show('fade');
	});

	$('#retorno-modal').click(function () {
		$('.retorno-modal').show('fade');
		$('.inicial-modal').hide('fade');
	});
}

/* só para desmostraçao visual, será apagado*/
function contadoresAbaAgendamento() {
	$('#todos').click(function () {
		$('.retorno').show('fade');
		$('.inicial').show('fade');
	});

	$('#inicial').click(function () {
		$('.retorno').hide('fade');
		$('.inicial').show('fade');
	});

	$('#retorno').click(function () {
		$('.retorno').show('fade');
		$('.inicial').hide('fade');
	});


}

function exibirTabelaGrafico() {

	$(".scroll-tabela").click(function (event) {
		event.preventDefault();
		$('.tabela-esconder').slideDown(500);
		$('html,body').animate({
			scrollTop: $(this.hash).offset().top
		}, 600);
	});


	$('.tabela-esconder').dblclick(function () {
		$('.tabela-esconder').hide('slow');
	});
}


function mascarasInputs() {

	$('.mask-processo').inputmask({
		mask: '9999999-99.9999.999.9999'
	});

	$('.data').inputmask({
		mask: '99/99/9999'
	});
}

function exibirMenuLateral() {

	$('main').on('click', function () {
		$('#sessao-menu').hide('slow');
		$('#nav-menu ul').hide();
	});


	$("#menu-suspenso").on('click', function () {
		$("#sessao-menu").toggle('slow', function () {
			$('#nav-menu ul').hide();
		});

	});


	$("#nav-menu p").click(function () {

		$("#nav-menu ul").slideUp('1000');

		if (!$(this).next().is(":visible")) {
			$(this).next().slideDown('1000');
			$("#nav-menu ul").addClass("");
		}
	});


}

function exibirNotificacoes() {


	$('main').mousemove(function () {

		$('#notificacoes').hide('slow');
		$('#nome-usuario').show('fade');

	});

	$("#icone-notificacao").on('click', function () {
		$('#sessao-menu').hide("fade");
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

function exibicaoforms() {

	$("#exibir-form-audiencias").on("click", function () {
		$("#formulario-cadastrar-audiencias").toggle("fade");

	});

	$("#exibir-form-processos").on("click", function () {
		$("#formulario-processos").toggle("fade");
	});


	$("#exibir-form-atividade-processos").on("click", function () {
		$("#formulario-atividade-processo").toggle("fade");

	});

	$("#exibir-form-acoes-ajuizadas").on("click", function () {
		$("#formulario-acoes-ajuizadas").toggle("fade");

	});

	$("#exibir-form-resolucao-extraJudicial").on("click", function () {
		$("#formulario-resolucao-extraJudicial").toggle("fade");

	});



}

function inputNovoAtendimento() {

	$('#form-pesquisar').submit(function (event) {
          event.preventDefault();
		$('.exibir-form-tabela').show('slow');
	});



	$('#atendimento').change(function () {

		if ($('[value=3]').is('option:selected')) {
			$('#tipo-especializada').show("slow");
			$('#area-atuacao').show("slow");
		} else {
			$('#tipo-especializada').hide("slow");
			$('#area-atuacao').hide("slow");
		}
	});
	
}

function exibeInput() {


	$('#tipo-resolucao-extra-judicial').change(function () {
		if ($('[value=orgaos-publicos]').is('option:selected')) {
			$('#tipo-orgao').show("slow");
		} else {
			$('#tipo-orgao').hide("slow");
			$('#lista-municipio').hide("slow");
			$('#outro-orgao').hide("slow");

		}

		if ($('[value=empresa]').is('option:selected')) {
			$('#tipo-empresa').show("slow");
		} else {

			$('#tipo-empresa').hide("slow");
			$('#outros-empresa').hide("slow");
		}



	});

	$('#tipo-resolucao-extra-judicial').change(function () {

		if ($('[value=orgaos-publicos]').is('option:selected') || $('[value=empresa]').is('option:selected')) {

			$('#forma-contato').show("slow");
		} else {

			$('#forma-contato').hide("slow");

		}
	});

}


function exibirMunicipios_exibirCampoOutros() {
	$('#tipo-orgao').change(function () {
		if ($('[value=municipio]').is('option:selected')) {
			$('#lista-municipio').show("slow");
		} else {
			$('#lista-municipio').hide("slow");
		}


		if ($('[value=outros-orgao]').is('option:selected')) {
			$('#outro-orgao').show("slow");
		} else {
			$('#outro-orgao').hide("slow");
		}
	});


	$('#tipo-empresa').change(function () {

		if ($('[value=outro-empresa]').is('option:selected')) {
			$('#outros-empresa').show("slow");
		} else {
			$('#outros-empresa').hide("slow");
		}
	})
}

function exibirSelectsAtividades() {

	$("input[value=interna]").on("click", function () {
		$("#select-at-interna").show('slow');
		$("#select-at-externa").hide('slow');
	});

	$("input[value=externa]").on("click", function () {
		$("#select-at-externa").show('slow');
		$("#select-at-interna").hide('slow');
	});

}

function selectUnidadeJudicial(){
	
	$("#opcoes-exibir-grafico").change(function(){
		if($('[value=1]').is('option:selected')){
			$("#select-unidade-judicial").show("slow");
		}else{
			$("#select-unidade-judicial").hide("slow");
		}
	})
}