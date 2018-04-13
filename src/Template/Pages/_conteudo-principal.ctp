<nav class="mt-5" id="nav-principal">
	<div class="nav nav-tabs d-flex justify-content-between " role="tablist" id="tabs-ancoras">

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
			<p>TAREFAS</p>
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
			<p>RELATÓRIOS</p>
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
		<form action="" class="mt-5">
			<div class="form-row">
				<div class="input-group mb-3 col-md-3">
					<div class="input-group-prepend">
						<label class="input-group-text text-secondary" for="opcoes-exibir-grafico">Exibir Gráfico de</label>
					</div>
					<select class="custom-select" id="opcoes-exibir-grafico">
                        <option value="0"></option>
						<option value="1">Judicial</option>
						<option value="2">Extrajudicial</option>
						<option value="3">Audiências</option>
						<option value="4">Processos</option>
						<option value="4">Atividades</option>
					</select>
				</div>
				<div class="input-group mb-3 col-md-3" id="select-unidade-judicial" style="display:none">
					<div class="input-group-prepend">
						<label class="input-group-text text-secondary" for="select-unidade-judicial">Unidade Judicial</label>
					</div>
					<select class="custom-select">
						<option value="3"></option>
						<option value="4"></option>
						<option value="4"></option>
					</select>
				</div>
				<div class="input-group mb-3 col-md-4">
					<div class="input-group-prepend">
						<span class="input-group-text text-secondary" id="">Período</span>
					</div>
					<input type="text" class="form-control data" placeholder="Data inicial">
					<input type="text" class="form-control data" placeholder="Data final">
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-success btn-block">Pesquisar</button>
				</div>
			</div>
			
		</form>


		<section class="row mt-3 background-sessao">
			<?= $this->element('../Pages/_graficos')?>
		</section>
	</div>
</div>