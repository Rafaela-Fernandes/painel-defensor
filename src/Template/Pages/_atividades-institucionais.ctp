<div class="col-md-6 py-4 px-5  mobile">
	<h5 class="text-secondary"> Cadastrar atividades institucionais</h5>
	<form action="" method="" class="bg-light p-4 mb-3 mt-4" id="formulario-tarefas">

		<div class="form-row">
		  <div class="input-group mb-3 col-md-6">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary">Área</span>
				</div>
			    <select class="custom-select" >
					<option value="" selected></option>
					<option value="">Penal</option>
					<option value="">Não Penal</option>	
				</select>
			</div>
			<div class="input-group mb-3 col-md-6">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary">Data</span>
				</div>
				<input type="text" class="form-control data" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
		</div>
        <hr>
        <div class="form-row">
			<div class="form-group col-md-12 form-radio mt-2">
				<span>Tipo de Atividade</span>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio"  name="tipo-atividade" value="interna" class="custom-control-input" id="atividade-interna">
					<label class="custom-control-label  bordas-radio" for="atividade-interna">Interna</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio"  name="tipo-atividade" value="externa" class="custom-control-input" id="atividade-externa">
					<label class="custom-control-label  bordas-radio" for="atividade-externa">Externa</label>
				</div>
			</div>
		</div>
    	<hr>
    	<div class="form-row">
			<div class=" input-group col-md-12 mt-2" id="select-at-interna" style="display:none" >
			    <div class="input-group-prepend">
				<label class="input-group-text text-secondary" for="">Selecione Atividade Interna</label>
			    </div>
				<select class="custom-select" >
					<option value="" selected></option>
					<option value="">interna</option>
					<option value="">interna</option>
					<option value="">interna</option>
				
					
				</select>
			</div>
			
			<div class=" input-group col-md-12 mt-2" id="select-at-externa"  style="display:none" >
			    <div class="input-group-prepend">
				<label class="input-group-text text-secondary" for="">Selecione Atividade Externa</label>
			    </div>
				<select class="custom-select" >
					<option value="" selected></option>
					<option value="">externa</option>
					<option value="">externa</option>
					<option value="">externa</option>	
				</select>
			</div>
		</div>
    	
	    <div class="form-row">
			<div class="input-group mb-3 col-md-12 mt-3">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary">Público Total Atingido</span>
				</div>
				<input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
		</div>
		  <div class="form-row">
			<div class="input-group mb-3 col-md-12">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary">Anexar Lista de Presença</span>
				</div>
				<input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
		</div>
		<div class="form-row">
			<div class=" input-group col-md-12" id="tipo-resolucao-extra-judicial" >
			    <div class="input-group-prepend">
				<label class="input-group-text text-secondary" for="">Grupo Vulnerável</label>
			    </div>
				<select class="custom-select" >
					<option value="" selected></option>
					<option value="">AAAAAAAAAAA</option>
					<option value="">AAAAAAAAAAA</option>
					<option value="">Mediação</option>
					
				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-verde btn-block mt-3" name="botao-at-institucional"> Cadastrar</button>
	</form>
</div>


<div class="col-md-6 py-4 px-5  mobile">
	<h5 class="text-secondary"> Atividades institucionais</h5>
	<div class="mt-4 input-group contador-agendamento">
		<span class="w-75 py-2">Total Atividades</span>
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
	<table class="table table-hover mt-4">
		<thead class="bg-secondary text-white" style="font-size:">
			<tr>
				<th scope="col">Data</th>
				<th scope="col">Público Total Atingido</th>
				<th scope="col">Grupo Vulnerável</th>
			
			</tr>
		</thead>
		<tbody class="font-td">
			<tr>
				<td>20/02/2018</td>
				<td>50</td>
				<td>ABCDEFGHIJLMNOPQRSTUVXZWED</td>
			</tr>
				<tr>
				<td>20/02/2018</td>
				<td>50</td>
				<td>ABCDEFGHIJLMNOPQRSTUVXZWED</td>
			</tr>
				<tr>
				<td>20/02/2018</td>
				<td>50</td>
				<td>ABCDEFGHIJLMNOPQRSTUVXZWED</td>
			</tr>
		
		</tbody>
	</table>
</div>
</div>




