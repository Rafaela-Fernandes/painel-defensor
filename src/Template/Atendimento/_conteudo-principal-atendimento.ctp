
<nav class="mt-5" id="nav-principal-atendimento">
  <div class="nav nav-tabs" id="tabs-ancora-atendimento" role="tablist">
    <a class="nav-item nav-link active" id="cadastro-link" data-toggle="tab" href="#cadastro" role="tab" aria-controls="nav-home" aria-selected="true"><p>CADASTRAR ASSISTIDO</p></a>
    <a class="nav-item nav-link" id="orientacao-link" data-toggle="tab" href="#orient-juridica" role="tab" aria-controls="nav-profile" aria-selected="false"><p>ORIENTAÇÃO JURIDICA</p></a> 
    <a class="nav-item nav-link" id="agendamento-link" data-toggle="tab" href="#agendamento-atendimento" role="tab" aria-controls="nav-profile" aria-selected="false"><p>CADASTRAR AGENDAMENTO</p></a>
    <a class="nav-item nav-link" id="processo-link" data-toggle="tab" href="#processo-atendimento" role="tab" aria-controls="nav-profile" aria-selected="false"><p>CADASTRAR PROCESSOS</p></a>
    <a class="nav-item nav-link" id="tela-link" data-toggle="tab" href="#tela-atendimento" role="tab" aria-controls="nav-profile" aria-selected="false"><p>TELA ESPECIFICA</p></a>
   <a class="nav-item nav-link" id="anexo-link" data-toggle="tab" href="#anexo-atendimento" role="tab" aria-controls="nav-profile" aria-selected="false"><p class="ml-2">INSERIR ANEXOS</p></a>
    <a class="nav-item nav-link" id="extrato-link" data-toggle="tab" href="#extrato-atendimento" role="tab" aria-controls="nav-profile" aria-selected="false"><p class="ml-2">EXIBIR EXTRATO</p></a>
  
  </div>
</nav>



	<div class="d-flex justify-content-start mt-5" id="opcoes-atendimento">
		<span class="text-secondary h4" id="localizar-assistido">
			<img src="img/localizar.png" alt=""> Localizar Assistido
		</span>

		<span href="" class="text-secondary h4 ml-5" id="cadastro-assistido">
			<img src="img/adicionar.png" alt=""> Novo Assistido
		</span>
		<span href="" class="text-secondary h4 ml-5" id="cadastro-assistido">
			<img src="img/editar-usuario-atendimento.png" alt=""> Editar Assistido
		</span>
	</div>
	
<div class="tab-content" id="">
  <div class="tab-pane fade show active" id="cadastro" role="tabpanel" aria-labelledby="nav-home-tab">
  	
  	
  	<section class="row mt-3 background-sessao" id="sessao-localizar">
		<?= $this->element('../Atendimento/_localizar')?>
				
	</section>
	
 	<section class="row mt-5  background-sessao" style="display:none" id="sessao-cadastro">
 		<?= $this->element('../Atendimento/_tabs-add-usuario')?>
 	
 	</section>
 	
  	<section class="row mt-5  background-sessao d-none" id="tabela-resultado ">
  		<?= $this->element('../Atendimento/_tabela-resultados-assistido')?>
  	</section>
  	
  </div>
  <div class="tab-pane fade" id="orient-juridica" role="tabpanel" aria-labelledby="nav-contact-tab">
  	<section class="row mt-5  background-sessao">
  		<?= $this->element('../Atendimento/_orientacao-juridica')?>
  	</section>
  	
  </div>
  <div class="tab-pane fade" id="agendamento-atendimento" role="tabpanel" aria-labelledby="nav-contact-tab">
  	<section class="row mt-5  background-sessao">
     	<?= $this->element('../Atendimento/_tabs-add-agendamento')?>
  	</section>
  	
  </div> 
  
  <div class="tab-pane fade" id="processo-atendimento" role="tabpanel" aria-labelledby="nav-contact-tab">
  	<section class="row mt-5  background-sessao">
  	  <?= $this->element('../Atendimento/_cadastro-processos')?>
  	</section>
  	
  </div>
   <div class="tab-pane fade" id="tela-atendimento" role="tabpanel" aria-labelledby="nav-contact-tab">
  	<section class="row mt-5  background-sessao">
  	
  	</section>
  	
  </div>
   <div class="tab-pane fade" id="anexo-atendimento" role="tabpanel" aria-labelledby="nav-contact-tab">
  	<section class="row mt-5  background-sessao">
  	  <?= $this->element('../Atendimento/_anexos')?>
  	</section>
  	
  </div>
  <div class="tab-pane fade" id="extrato-atendimento" role="tabpanel" aria-labelledby="nav-contact-tab">
  	<section class="row mt-5  background-sessao">
  	    <?= $this->element('../Atendimento/_extrato')?>
  	</section>
  	
  </div>
</div>


