<?php use Cake\I18n\Time; ?>
<!-- Inicio informações do dia agendamentos -->
<div class="col-md-6 py-4 px-5 mobile">
	<div class="d-flex justify-content-between mt-4 contadores">
		<div class="input-group pr-3 contador-todos">
			<input type="radio" name="radio-contadores" id="label-todos" checked>
			<label for="label-todos" id="todos">Todos</label>
			<span class="py-2">100</span>
		</div>

		<div class="input-group pr-3 contador-inicial">
			<input type="radio" name="radio-contadores" id="label-inicial">
			<label for="label-inicial" id="inicial">Inicial</label>
			<span class="py-2">30</span>
		</div>

		<div class="input-group contador-retorno">
			<input type="radio" name="radio-contadores" id="label-retorno">
			<label for="label-retorno" id="retorno">Retorno</label>
			<span class="py-2">70</span>
		</div>
	</div>

	<!-- Filtros -->
	<form action="" class="mt-4">
		<div class="input-group mt-3 ">
			<input type="text" class="form-control data" value="<?= $today ?>" placeholder="Data Inicial">
			<input type="text" class="form-control data" value="<?= $today ?>" placeholder="Data Final">
			<div class="input-group-append">
				<button class="btn text-secondary btn-personalizado" type="button">Pesquisar</button>
			</div>
		</div>

		<div class="input-group mt-3">
			<input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn text-secondary btn-personalizado" type="submit">Pesquisar</button>
			</div>
		</div>
	</form>

<<<<<<< HEAD

    <div class="table-responsive">
	<table class="table table-hover mt-4">
=======
	<!-- Listagem -->
	<table class="table table-responsive-md table-hover mt-4">
>>>>>>> a737083e316451d3b5e88a8285cf64be2dbc35d6
		<thead class="bg-secondary text-white">
			<tr>
				<th scope="col">Data</th>
				<th scope="col">Hora</th>
				<th scope="col">Assistido</th>
				<th scope="col">Ação</th>
				<th scope="col">Opções</th>
				<th scope="col">Status</th>
			</tr>
		</thead>
		<tbody class="font-td text-center">
			<tr>
				<?php
					foreach($agendamentos as $agendamento):
						$class = 'inicial';
						$spam = '<span class="badge badge-pill text-white w-100 py-2" style="background:#2dc76e; font-size:0.7rem">Inicial</span>';

						if($agendamento['tipo_atendimento'])
						{
							$class = 'retorno';
							$spam = '<span class="badge badge-pill text-white w-100 py-2" style="background:#fd8a2a; font-size:0.7rem">Retorno</span>';
						}
				?>
					<tr class="<?= $class ?>">
						<td><?= Time::parse($agendamento['data'])->i18nFormat('d/M/Y'); ?></td>
						<td><?= $agendamento['hora'] ?></td>
						<td><?= $agendamento['assistido'] ?></td>
						<td><?= $agendamento['acao'] ?></td>
						<td>
							<a href="http://sigad.defensoria.ba.def.br/assistidos/extrato/<?= $agendamento['assistido_id'] ?>" target="_blank"> link Sigad</a>
						</td>
						<td><?= $spam ?></td>
					</tr>
				<?php endforeach; ?>
			</tr>
		</tbody>
	</table>
<<<<<<< HEAD
    </div>
=======
>>>>>>> a737083e316451d3b5e88a8285cf64be2dbc35d6
</div>
<!-- Fim Informações do dia agendamentos -->

