<div class="col-md-6 py-4 px-5  mobile">
	<h5 class="text-secondary"> Lista de tarefas</h5>
	<div class="mt-4 input-group contador-agendamento">
		<span class="w-50 py-2">Total Tarefas</span>
		<span class="w-50 py-2">3</span>
	</div>
	<form action="" method="" class="mt-4">
	<div class="input-group mt-3">
			<input type="text" class="form-control" placeholder=" " aria-label="Recipient's username" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn text-secondary" type="submit" style="border:solid #ced4da 1px; background:#e9ecef">Pesquisar</button>
			</div>
		</div>
	</form>
	<table class="table table-responsive-md  table-hover tabela-responsiva mt-4">
		<thead class="bg-secondary text-white" style="font-size:">
			<tr>
				<th scope="col">Prazo</th>
				<th scope="col">Nº Processo</th>
				<th scope="col">Descrição Tarefa</th>
				<th scope="col">Opção</th>
			</tr>
		</thead>
		<tbody class="font-td">
			<tr>
				<td>20/02/2018</td>
				<td>123466789</td>
				<td>Verificar docuementação do assistido Rogerio</td>
				<td class="d-flex">
					<a href="#"><img src="" alt=""><img src="img/editar.png"></a>
					<a href="#"><img src="" alt=""><img src="img/excluir.png"></a>
				</td>
			</tr>
			<tr>
				<td>20/02/2018</td>
				<td>123466789</td>
				<td>Verificar docuementação do assistido Rogerio</td>
				<td class="d-flex">
					<a href="#"><img src="" alt=""><img src="img/editar.png"></a>
					<a href="#"><img src="" alt=""><img src="img/excluir.png"></a>
				</td>
			</tr>
			<tr>
				<td>20/02/2018</td>
				<td>123466789</td>
				<td>Verificar docuementação do assistido Rogerio</td>
				<td class="d-flex">
					<a href="#"><img src="" alt=""><img src="img/editar.png"></a>
					<a href="#"><img src="" alt=""><img src="img/excluir.png"></a>
				</td>
			</tr>
		</tbody>
	</table>
</div>




<div class="col-md-6 py-4 px-5  mobile">
	<h5 class="text-secondary"> Cadastrar tarefas</h5>
	<form action="" method="" class="bg-light p-4 mb-3 mt-4" style="border: solid #cdd3d9 1px;">

		<div class="form-row">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary" placeholder="">Prazo</span>
				</div>
				<input type="text" class="form-control data" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
		</div>
		<div class="form-row ">

			<div class="form-group col-md-12">
				<textarea class="form-control" rows="4" placeholder="Descrição"></textarea>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text text-secondary">Lembrete</span>
					</div>
					<input type="number" class="form-control"> 
					<select class="custom-select" id="inputGroupSelect01">
						<option selected disabled>Selecione uma unidade
							<option value="1">Hora</option>
							<option value="2">Dia</option>
							<option value="3">Semana</option>

					</select>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-success btn-block"> Cadastrar</button>
	</form>
</div>