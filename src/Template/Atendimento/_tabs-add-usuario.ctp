<div class="col-md-12 py-4 px-4">

	<nav>
		<div class="nav nav-tabs" id="nav-tab-cadastro" role="tablist">
			<a class="nav-item nav-link active" id="dados-pessoais" data-toggle="tab" href="#tab-dados-pessoais" role="tab" aria-controls="nav-home" aria-selected="true">
			 <img src="img/usuario-cad.png" alt="">
			<span>Dados Pessoais</span></a>
			<a class="nav-item nav-link m" id="contato" data-toggle="tab" href="#tab-contato" role="tab" aria-controls="nav-profile" aria-selected="false">
			 <img src="img/telefone.png" alt="">
			<span class="">Contato</span></a>
			<a class="nav-item nav-link " id="endereco" data-toggle="tab" href="#tab-endereco" role="tab" aria-controls="nav-contact" aria-selected="false">
				 <img src="img/endereco.png" alt="">
			<span class="ml-2">Endereço</span></a>
			<a class="nav-item nav-link " id="acao" data-toggle="tab" href="#tab-acao" role="tab" aria-controls="nav-contact" aria-selected="false">
			<img src="img/acao.png" alt="">
			<span class="ml-2">Incluir Ação</span></a>
		</div>
	</nav>
	<form action="" class="mt-5">
		<div class="tab-content" id="">
			<div class="tab-pane fade show active" id="tab-dados-pessoais" role="tabpanel" aria-labelledby="nav-home-tab">

				<?= $this->element('../Atendimento/_cadastro-dados-pessoais')?>
			</div>
			<div class="tab-pane fade" id="tab-contato" role="tabpanel" aria-labelledby="nav-profile-tab">
				<?= $this->element('../Atendimento/_cadastro-contato')?>
			</div>
			<div class="tab-pane fade" id="tab-endereco" role="tabpanel" aria-labelledby="nav-contact-tab">
				<?= $this->element('../Atendimento/_cadastro-endereco')?>
			</div>
			<div class="tab-pane fade" id="tab-acao" role="tabpanel" aria-labelledby="nav-contact-tab">
				<?= $this->element('../Atendimento/_cadastro-acao')?>
			</div>
		</div>
      <div class="form-row mt-3">
      	
		<div class="col-md-3 mb-5">
			<buttton class="btn btn-verde btn-block py-2"  type="" >Salvar</buttton>
		</div>
		<div class="col-md-3 mb-5 ml-2">
			<button class="btn btn-dark" type="submit"><img src="img/lista.png" alt=""> Listar Assistidos</button>
		</div>
      </div>

	</form>
</div>