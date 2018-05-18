$(document).ready(function(){
	
	exibirCamposAtendimento();
    exibirCamposCadastro();
    exibirCamposLozalizar();
	ocultarOpcoesAtendimento();
	
})





function exibirCamposAtendimento(){
	$("#mais-campos").click(function(){
		
		$("#outros-campos").toggle("slow");
	})
}




function exibirCamposCadastro(){
	
	$("#cadastro-assistido").click(function(){
		 $("#sessao-cadastro").toggle('fade');
		 $("#sessao-localizar").hide('fade');
		 $("#tabela-resultado").hide('fade');
			
	})
}


function exibirCamposLozalizar(){
	
	$("#localizar-assistido").click(function(){
		 $("#sessao-localizar").toggle('fade');
		 $("#sessao-cadastro").hide('fade');
			 $("#tabela-resultado").show('fade');	
	})
}

function ocultarOpcoesAtendimento(){
	$("#cadastro-link").blur(function(){
		$("#opcoes-atendimento").hide('fade');
	})
}