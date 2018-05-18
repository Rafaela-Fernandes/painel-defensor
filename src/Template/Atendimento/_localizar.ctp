<div class="col-md-12 py-4 px-4 ">
	<form action="" class="form-label" >
		<div class="form-row">
			<div class="input-group mb-3 col-md-12">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary" placeholder="">Tipo de Pessoa</span>
				</div>
				<select type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
					<option value="">Fisica</option>
					<option value="">Juridica</option>
					<option value="">Coletiva</option>
				</select>
			</div>
		</div>
		<div class="form-row">
			<div class="input-group mb-3 col-md-12">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary" placeholder="">Nome do Assistido</span>
				</div>
				<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
		</div>

        <div class="form-row">
        	<div class="input-group mb-3 col-md-6">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary" placeholder="">CPF</span>
				</div>
				<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			<div class="input-group mb-3 col-md-6">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary" placeholder="">RG</span>
				</div>
				<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
        </div>
		<div class="form-row" style="display:none" id="outros-campos">

			<div class="input-group mb-3 col-md-4">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary" placeholder="">Data Nascimento</span>
				</div>
				<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			<div class="input-group mb-3 col-md-4">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary" placeholder="">Nome da  Mãe</span>
				</div>
				<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			<div class="input-group mb-3 col-md-4">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary" placeholder="">Nome da  Pai</span>
				</div>
				<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>

		</div>

	</form>
	<div class="row d-flex justify-content-between">
		<div>
			<h6 class="text-secondary mt-2 ml-3"><img src="img/mais.png" alt="" id="mais-campos"> Exibir mais campos</h6>
		</div>
		<div class="input-group mb-3 col-md-2 mt-1">
			<button type="submit" class="btn btn-verde btn-block">Pesquisar</button>
		</div>
	</div>
</div>