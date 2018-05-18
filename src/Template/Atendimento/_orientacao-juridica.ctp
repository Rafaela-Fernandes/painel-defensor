<div class="col-md-12 py-4 px-4">
	<form action="http://localhost:8765/painel">
		<div class="form-row">
			<div class="col-md-12">
			    <label for="" class="text-secondary">Relato</label>
				<textarea class="form-control" aria-label="With textarea" placeholder="Relate o caso aqui" rows="5"></textarea>
			</div>

		</div>
		<div class="form-row mt-3">
			<div class="input-group col-md-5">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary" id="basic-addon1">CMC/NAP</span>
				</div>
				<select class="form-control">
				     <option></option>
					<option>CMC</option>
					<option>NAP</option>
				</select>
			</div>
			<div class="input-group col-md-5">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary" id="basic-addon1">Especializada</span>
				</div>
				<select class="form-control">
				    <option></option>
					<option>CIVEL</option>
					<option>FAMILIA</option>
				</select>
			</div>
			<div class="col-md-2">
				<button class="btn btn-verde btn-block">Encaminhar</button>
			</div>
		</div>
	</form>

</div>