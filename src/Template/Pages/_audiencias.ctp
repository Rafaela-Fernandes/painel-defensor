<!-- Inicio informações do dia audiências-->
<div class="col-md-6 py-4 px-5 mobile">

	<h5 class="text-secondary">Cadastrar audiências <img src="img/mais.png" alt="" id="exibir-form-audiencias"> </h5>
	<form class="bg-light p-3 mb-3" id="formulario-cadastrar-audiencias">
		<div class="form-row">
			<div class="input-group mb-3 col-md-12">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary">Nome Assistido</span>
				</div>
				<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
		</div>
		<div class="form-row">
			<div class="input-group mb-3 col-md-6">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary">Data</span>
				</div>
				<input type="text" class="form-control data" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			<div class="input-group mb-3 col-md-6">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary">Hora</span>
				</div>
				<input type="" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
		</div>
		<div class="form-row">
			<div class="input-group mb-3 col-md-12">
				<div class="input-group-prepend">
					<label class="input-group-text text-secondary" for="">Tipo</label>
				</div>
				<select class="custom-select">
				    <option value="9" selected ></option>
					<option value="9">ADMONITÓRIA</option>
					<option value="13">AUDIÊNCIAS CONCENTRADAS</option>
					<option value="1">CONCILIAÇÕES</option>
					<option value="11">EXTRAJUDICIAL</option>
					<option value="5">INSTRUÇÃO</option>
					<option value="6">INSTRUÇÃO E JULGAMENTO</option>
					<option value="12">JUDICIAL</option>
					<option value="7">JUSTIFICAÇÃO</option>
					<option value="10">MEDIAÇÃO</option>
					<option value="8">OUTRAS</option>
					<option value="3">PRELIMINAR</option>
					<option value="2">SESSÕES</option>
				</select>
			</div>
		</div>
		
		<div class="form-row">
			<div class="input-group col-md-12 ">
				<div class="input-group-prepend">
					<label class="input-group-text text-secondary" for="">Resultado Audiência</label>
				</div>
				<select class="custom-select">
				    <option value="9" selected ></option>
					<option value="9">Provida</option>
					<option value="9">Improvida</option>
				</select>
			</div>
		</div>
		<hr>
		<div class="form-row">
			<div class="form-group col-md-12 mt-2 form-radio">
				<span> Em substituição</span>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="substituicao-sim" name="substituicao-audiencias" class="custom-control-input">
					<label class="custom-control-label  bordas-radio" for="substituicao-sim">Sim</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="substituicao-nao" name="substituicao-audiencias" class="custom-control-input">
					<label class="custom-control-label  bordas-radio" for="substituicao-nao">Não</label>
				</div>
			</div>
		</div>
		<hr>
		<button type="submit" class="btn btn-verde btn-block mt-3"> Cadastrar</button>
	</form>

	<div class="mt-4 input-group contador-agendamento">
		<span class="w-75 py-2">Total Audiências</span>
		<span class="w-25 py-2">100</span>
	</div>

	<form action="" class="mt-4">
		<div class="input-group mt-3 ">
			<input type="text" class="form-control data" placeholder="Data Inicial">
			<input type="text" class="form-control data" placeholder="Data Final">
			<div class="input-group-append">
				<button class="btn text-secondary btn-personalizado" type="submit">Pesquisar</button>
			</div>
		</div>

		<div class="input-group mt-3">
			<input type="text" class="form-control" placeholder=" " aria-label="Recipient's username" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn text-secondary btn-personalizado" type="submit">Pesquisar</button>
			</div>
		</div>
	</form>


   <div class="table-responsive">
	<table class="table  table-hover mt-4">
		<thead class="bg-secondary text-white">
			<tr>
				<th scope="col">Data</th>
				<th scope="col">Hora</th>
				<th scope="col">Local</th>
				<th scope="col">Assistido</th>
				<th scope="col">Resultado</th>
				<th scope="col">Opções</th>
				<th scope="col">Data do Cadastro</th>
			</tr>
		</thead>
		<tbody class="font-td">

			<tr>
				<td>01/03/2018</td>
				<td>09:50</td>
				<td>Forum AA</td>
				<td>Celia Maria Dantas</td>
				<td>Provida</td>
				<td><a href="#"><img src="img/editar.png" alt=""></a></td>
				<td>01/03/2018</td>
			</tr>
			<tr>
				<td>01/03/2018</td>
				<td>09:50</td>
				<td>Forum AA</td>
				<td>Celia Maria Dantas</td>
				<td>Improvida</td>
				<td><a href="#"><img src="img/editar.png" alt=""></a></td>
					<td>01/03/2018</td>
			</tr>
			<tr>
				<td>01/03/2018</td>
				<td>09:50</td>
				<td>Forum AA</td>
				<td>Celia Maria Dantas</td>
				<td>Provida</td>
				<td><a href="#"><img src="img/editar.png" alt=""></a></td>
					<td>01/03/2018</td>
			</tr>
			<tr>
				<td>01/03/2018</td>
				<td>09:50</td>
				<td>Forum AA</td>
				<td>Celia Maria Dantas</td>
				<td>Improvida</td>
				<td><a href="#"><img src="img/editar.png" alt=""></a></td>
					<td>01/03/2018</td>
			</tr>

		</tbody>
	</table>
</div>
</div>
<!-- Fim Informações do dia audiências-->