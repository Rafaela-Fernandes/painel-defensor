<nav class="mt-5" id="nav-principal">
	<div class="nav nav-tabs d-flex justify-content-between " role="tablist" id="tabs-ancoras" >
       
        <!-- ------------ AGENDAMENTOS ------------ -->
		<a class="nav-item nav-link active " data-toggle="tab" href="#sessao-agendamentos" role="tab" aria-controls="nav" aria-selected="true" id="agendamentos">
			<p>AGENDAMENTOS</p>
		</a>
		
		 <!-- --------- EXTRAJUDICIAL ------------- -->
		<a class="nav-item nav-link " data-toggle="tab" href="#sessao-extra-judicial" role="tab" aria-controls="nav" aria-selected="false" id="extra-judicial">
			<p>EXTRAJUDICIAL</p>
		</a>
        
         <!-- ------------ AUDIENCIAS ------------- -->
		<a class="nav-item nav-link " data-toggle="tab" href="#sessao-audiencias" role="tab" aria-controls="nav" aria-selected="false" id="audiencias">
			<p>AUDIÊNCIA JUDICIAL</p>
		</a>

         <!-- --------- PROCESSOS JUDICIAIS ------- -->
		<a class="nav-item nav-link " data-toggle="tab" href="#sessao-processos" role="tab" aria-controls="nav" aria-selected="false" id="processos">
			<p>PROCESSO JUDICIAL</p>
		</a>
		
		<!-- ------------ TAREFAS/PRAZOS --------- -->
		<a class="nav-item nav-link " data-toggle="tab" href="#sessao-tarefa" role="tab" aria-controls="nav" aria-selected="false" id="prazos-tarefas">
			<p>TAREFAS/PRAZOS</p>
		</a>
		
		<!-- ------------ ATIVIDADES INSTITUCIONAIS --------- -->
		
		<a class="nav-item nav-link " data-toggle="tab" href="#sessao-institucional" role="tab" aria-controls="nav" aria-selected="false" id="institucional">
			<p>ATIVIDADE INSTITUCIONAL</p>
		</a>
		<!-- ------------ PETIÇÕES --------------- -->
		<a class="nav-item nav-link " data-toggle="tab" href="#sessao-peticoes" role="tab" aria-controls="nav" aria-selected="false" id="peticoes">
			<p>PETIÇÕES</p>
		</a>
		
		<!-- ------------ GRÁFICOS --------------- -->
		<a class="nav-item nav-link " data-toggle="tab" href="#sessao-graficos" role="tab" aria-controls="nav" aria-selected="false" id="graficos">
			<p>GRÁFICOS</p>
		</a>
	</div>
</nav>

<div class="tab-content" id="nav-tabContent">
    
     <!-- ------------ CONTEUDO AGENDAMENTOS/ CALENDARIO-AGENDAMENTO -------------- -->
	<div class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-tab" id="sessao-agendamentos">
		<section class="row mt-5 background-sessao ">
			<?= $this->element('../Pages/_agendamentos')?>
			<?= $this->element('../Pages/_calendario-agendamentos')?>
		</section>
	</div>
	
	 <!-- ------------ CONTEUDO EXTRAJUDICIAL ACOES AJUIZADAS/ EXTRAJUDICIAL RESOLUCAO -------------- -->
	<div class="tab-pane fade" role="tabpanel" aria-labelledby="nav-tab" id="sessao-extra-judicial">
		<section class="row mt-5  background-sessao">
			<?= $this->element('../Pages/_extrajudicial-acoes-ajuizadas')?>
			<?= $this->element('../Pages/_extrajudicial-resolucao')?>
		</section>
	</div>
	
	 <!-- ------------ CONTEUDO AUEDIENCIAS/ CALENDARIO-AUDIENCIAS -------------- -->
	<div class="tab-pane fade" role="tabpanel" aria-labelledby="nav-tab" id="sessao-audiencias">
		<section class="row mt-5  background-sessao">
			<?= $this->element('../Pages/_audiencias')?>
				<?= $this->element('../Pages/_calendario-audiencias')?>
		</section>
	</div>
     <!-- ------------ CONTEUDO PROCESSOS/ CADASTRAR ATIVIDADE PROCESSOS -------------- -->
	<div class="tab-pane fade" role="tabpanel" aria-labelledby="nav-tab" id="sessao-processos">
		<section class="row  mt-5 background-sessao">
			    <?= $this->element('../Pages/_processos')?>
				<?= $this->element('../Pages/_cadastroAtividadeProcessos')?>
		</section>
	</div>
	
	 <!-- ------------ CONTEUDO TAREFAS-------------- -->
	<div class="tab-pane fade" role="tabpanel" aria-labelledby="nav-tab" id="sessao-tarefa">
		<section class="row  mt-5 background-sessao">
			<?= $this->element('../Pages/_tarefas')?>

		</section>
	</div> 
	
	 <!-- ------------ CONTEUDO ATIVIDADE INSTITUCIONAL-------------- -->
	<div class="tab-pane fade" role="tabpanel" aria-labelledby="nav-tab" id="sessao-institucional">
		<section class="row  mt-5 background-sessao">
			
            <?= $this->element('../Pages/_atividades-institucionais')?>
		</section>
	</div> 
	
	 <!-- ------------ CONTEUDO PETICOES -------------- -->
	<div class="tab-pane fade" role="tabpanel" aria-labelledby="nav-tab" id="sessao-peticoes">
		<section class="row  mt-5 background-sessao">
			<?= $this->element('../Pages/_peticoes')?>
		</section>
	</div>
	
	 <!-- ------------ CONTEUDO GRAFICOS -------------- -->
	<div class="tab-pane fade" role="tabpanel" aria-labelledby="nav-tab" id="sessao-graficos">
		
		<div class="input-group col-md-5 p-0 mt-5">
		<div class="input-group-prepend">
			<label class="input-group-text text-secondary" for="inputGroupSelect01">Exibir Gráfico de</label>
		</div>
		<select class="custom-select" id="inputGroupSelect01">
			
			<option value="1">Judicial</option>
			<option value="2">Extrajudicial</option>
			<option value="3">Audiências</option>
			<option value="4">Processos</option>
		</select>
		</div>
		
		<section class="row mt-3 background-sessao">
			<?= $this->element('../Pages/_graficos')?>
		</section>
	</div>
</div>

