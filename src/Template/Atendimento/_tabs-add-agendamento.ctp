

<div class="col-md-12 py-4 px-4">
<form action="" class="">        
      <div class="row">
	 	<div class="input-group mb-4  col-md-12">
			<div class="input-group-prepend">
				<span class="input-group-text text-secondary custom-select-lg " placeholder="">Posto de Atendimento</span>
			</div>
			<select type="text" class="custom-select custom-select-lg " aria-label="Default" aria-describedby="inputGroup-sizing-default">
				<option value=""> </option>

			</select>
		</div>
	 </div>
	<nav>
		<div class="nav nav-tabs" id="nav-tab-agendamento" role="tablist">
			<a class="nav-item nav-link active" id="link-agendamento" data-toggle="tab" href="#tab-agendamento" role="tab" aria-controls="nav-home" aria-selected="true">
			 <img src="img/agendar-assistido.png" alt="">
			<span>Cadastrar Agendamento</span></a>
			<a class="nav-item nav-link m" id="link-documento" data-toggle="tab" href="#tab-documento" role="tab" aria-controls="nav-profile" aria-selected="false">
			 <img src="img/emissao-doc.png" alt="">
			<span class="">Emisssão documento</span></a>
			<a class="nav-item nav-link " id="link-partes" data-toggle="tab" href="#tab-partes" role="tab" aria-controls="nav-contact" aria-selected="false">
				 <img src="img/partes.png" alt="">
			<span class="">Partes</span></a>
		</div>
	</nav>
	
	
	<div class="tab-content mt-5" id="">
		<div class="tab-pane fade show active" id="tab-agendamento" role="tabpanel" aria-labelledby="nav-home-tab">
			     <?= $this->element('../Atendimento/_cadastro-agendamento')?>
		</div>
		<div class="tab-pane fade" id="tab-documento" role="tabpanel" aria-labelledby="nav-profile-tab">
                 <?= $this->element('../Atendimento/_emissao-documento')?>
		</div>
		<div class="tab-pane fade" id="tab-partes" role="tabpanel" aria-labelledby="nav-contact-tab">
                 <?= $this->element('../Atendimento/_cadastro-partes')?>
		</div>
	</div>
	
	 <div class="row mt-3">
		 <div class="col-md-12">
              	<button class="btn btn-verde">Agendar</button>
		 </div>
	
	 </div>	
	 </form>
</div>
