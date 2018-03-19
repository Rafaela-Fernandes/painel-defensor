<!-- Inicio informações do dia agendamentos -->
<div class="col-md-6 py-4 px-5 mobile">
	<!-- Indicadores -->
	<div class="d-flex justify-content-between mt-4">
		<div class="input-group contador-todos">
			<button class="w-75 py-2" type="submit">Todos</button>
			<span class="w-25 py-2"><?= $teste ?></span>
		</div>
		<span class="text-white"> sepe</span>
		<div class="input-group contador-inicial">
		    <button class="w-75 py-2" type="submit">Inicial</button>
			<span class="w-25 py-2">30</span>
		</div>
		<span class="text-white"> sepe</span>
		<div class="input-group contador-retorno">
		    <button class="w-75 py-2" type="submit">Retorno</button>
			<span class="w-25 py-2">70</span>
		</div>
	</div>

	<!-- Filtros -->
	<form action="" class="mt-4">
		<div class="input-group mt-3 ">
			<input type="text" class="form-control data" value="<?= $today ?>" placeholder="Data Inicial">
			<input type="text" class="form-control data" value="<?= $today ?>" placeholder="Data Final">
			<div class="input-group-append">
				<button class="btn text-secondary" type="button" style="border:solid #ced4da 1px; background:#e9ecef">Pesquisar</button>
			</div>
		</div>

		<div class="input-group mt-3">
			<input type="text" class="form-control" placeholder=" " aria-label="Recipient's username" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn text-secondary" type="submit" style="border:solid #ced4da 1px; background:#e9ecef">Pesquisar</button>
			</div>
		</div>
	</form>

	<!-- Listagem -->
	<table class="table table-responsive-md table-hover mt-4">
		<thead class="bg-secondary text-white">
			<tr>
				<th scope="col">Data</th>
				<th scope="col">Hora</th>
				<th scope="col">Assistido</th>
				<th scope="col">Tipo Ação</th>
				<th scope="col">Opções</th>
			</tr>
		</thead>
		<tbody class="font-td text-center">
			<tr>
				<?php foreach($agendamentos as $agendamento): ?>
					<?php d($agendamento); ?>
					<!-- <td>18/01/2018</td>
					<td>09:50</td>
					<td>PEDRO DA SILVA FERNANDES</td>
					<td>ALIMENTOS</td>
					<td>
						<!-- http://sigad.defensoria.ba.def.br/assistidos/extrato/524397 ->
						<a href="http://sigad20/assistidos" target="_blank"> link Sigad</a>

					</td> -->
				<?php endforeach; ?>
			</tr>
		</tbody>
	</table>
</div>
