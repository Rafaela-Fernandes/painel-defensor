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

	<form action="" class="mt-4">
		<div class="input-group mt-3 ">
			<input type="text" class="form-control data" placeholder="Data Inicial">
			<input type="text" class="form-control data" placeholder="Data Final">
			<div class="input-group-append">
				<button class="btn text-secondary btn-personalizado" type="button" s>Pesquisar</button>
			</div>
		</div>

		<div class="input-group mt-3">
			<input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn text-secondary btn-personalizado" type="submit">Pesquisar</button>
			</div>
		</div>
	</form>


    <div class="table-responsive">
	<table class="table table-hover mt-4">
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
		<tbody class="font-td text-center span-status">
			<tr class="retorno">
				<td>18/01/2018</td>
				<td>09:50</td>
				<td>PEDRO DA SILVA FERNANDES</td>
				<td>ALIMENTOS</td>
				<td>
					<a href="http://sigad.defensoria.ba.def.br/assistidos/extrato/524397" target="_blank"> link Sigad</a>

				</td>
				<td><span class="badge badge-pill  text-white w-100 py-2">Retorno</span></td>
			</tr>
			<tr class="retorno">
				<td>18/01/2018</td>
				<td>09:50</td>
				<td>PEDRO DA SILVA FERNANDES</td>
				<td>ALIMENTOS</td>
				<td>
					<a href="http://sigad.defensoria.ba.def.br/assistidos/extrato/524397" target="_blank"> link Sigad</a>

				</td>
				<td><span class="badge badge-pill  text-white w-100 py-2">Retorno</span></td>
			</tr>
			<tr class="inicial">
				<td>18/01/2018</td>
				<td>09:50</td>
				<td>PEDRO DA SILVA FERNANDES</td>
				<td>ALIMENTOS</td>
				<td>
					<a href="http://sigad.defensoria.ba.def.br/assistidos/extrato/524397" target="_blank"> link Sigad</a>

				</td>
				<td><span class="badge badge-pill text-white w-100 py-2">Inicial</span></td>
			</tr>
			
			<tr class="inicial">
				<td>18/01/2018</td>
				<td>09:50</td>
				<td>PEDRO DA SILVA FERNANDES</td>
				<td>ALIMENTOS</td>
				<td>
					<a href="http://sigad.defensoria.ba.def.br/assistidos/extrato/524397" target="_blank"> link Sigad</a>

				</td>
				<td><span class="badge text-white badge-pill w-100 py-2">Inicial</span></td>
			</tr>
		</tbody>
	</table>
    </div>
</div>
<!-- Fim Informações do dia agendamentos -->

