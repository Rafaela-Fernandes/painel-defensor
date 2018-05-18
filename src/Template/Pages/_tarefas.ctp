
<div class="col-md-6 py-4 px-5  mobile">
	<h5 class="text-secondary"> Cadastrar tarefas</h5>
	<form action="" method="" class="bg-light p-4 mb-3 mt-4" id="formulario-tarefas">

		<div class="form-row">
			<div class="input-group mb-3 col-md-12">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary" placeholder="">Titulo Tarefa</span>
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
						<span class="input-group-text text-secondary">Lembrar em:</span>
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
	 
	<!-- <hr>
	 <h5 class="text-secondary mt-3"> Vincular processo </h5> 
     <div class="form-row mt-3 ">
			<div class="input-group col-md-12">
				<div class="input-group-prepend">
					<label class="input-group-text text-secondary" for="">Ato a ser praticado</label>
				</div>
				<select class="custom-select">
					<option value=""></option>
			
					<option value="">Manifestação acerca revogação total ou parcial da gratuidade</option>
					<option value="">Condição suspensiva de exigibilidade para que o credor desmonstre a suficiância de recurso</option>
					<option value="">Impugnação à concessão da justiça gratuita</option>
					<option value="">recolhimento das custas após denegação ou revogação da gratuidade</option>
					<option value="">AÇÃO DE ALIMENTOS GRAVÍDICOS</option>
					<option value="">Exibição de procuração pelo advogado (prorrogável)</option>
				</select>
			</div>
		</div> -->
		
		<div class="form-row mt-3 mb-4">
			<div class="input-group  col-md-6">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary">Data 1ª prazo</span>
				</div>
				<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			<div class="input-group  col-md-6">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary">Prazo Defensoria</span>
				</div>
				<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>	
		</div>
		
		
		<hr>
		<div class="form-row">
		   	<div class="form-group col-md-12 mt-2 form-radio">
				 <span> Em substituição</span>
				 	<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="tarefas-sim" name="tarefas" class="custom-control-input">
					<label class="custom-control-label  bordas-radio" for="tarefas-sim">Sim</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="tarefas-nao" name="tarefas" class="custom-control-input">
					<label class="custom-control-label  bordas-radio" for="tarefas-nao">Não</label>
				</div>
			</div>	
		</div>
		<hr>
	<button type="submit" class="btn btn-verde btn-block mt-3"> Cadastrar</button>
	</form>
</div>


<div class="col-md-6 py-4 px-5  mobile">
	<h5 class="text-secondary"> Lista de tarefas</h5>
	<div class="mt-4 input-group contador-agendamento">
		<span class="w-75 py-2">Total Tarefas</span>
		<span class="w-25 py-2">3</span>
	</div>
	<form action="" method="" class="mt-4">
	<div class="input-group mt-3">
			<input type="text" class="form-control" placeholder=" " aria-label="Recipient's username" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn text-secondary" type="submit" style="border:solid #ced4da 1px; background:#e9ecef">Pesquisar</button>
			</div>
		</div>
	</form>
	<div class="table-responsive">
	<table class="table table-responsive-md  table-hover  mt-4">
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
</div>
