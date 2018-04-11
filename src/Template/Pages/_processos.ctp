<div class="col-md-6  py-4 px-5 mobile">

	<h5 class="text-secondary"> Lista de processos judiciais <img src="img/mais.png" alt="" id="exibir-form-processos"></h5>

	<form class="bg-light p-3 mb-3" id="formulario-processos">
         
		<div class="form-row">
			<div class="form-group col-md-12 form-radio mt-2">
				<span>Polo</span>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio"  name="polo" class="custom-control-input" id="polo-ativo">
					<label class="custom-control-label  bordas-radio" for="polo-ativo">Ativo</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio"  name="polo" class="custom-control-input" id="polo-passivo">
					<label class="custom-control-label  bordas-radio" for="polo-passivo">Passivo</label>
				</div>
			</div>
		</div>
		<hr>
		<div class="form-row mt-3">
			<div class="input-group  col-md-12">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary">Nome Assistido</span>
				</div>
				<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
		</div>
		<div class="form-row mt-3">
			<div class="input-group  col-md-12">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary">Nº Processo</span>
				</div>
				<input type="text" class="form-control .mask-processo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
		</div>
		<div class="form-row mt-3">
			<div class="input-group col-md-12">
				<div class="input-group-prepend">
					<label class="input-group-text text-secondary" for="">Tipo Ação</label>
				</div>
				<select class="custom-select">
					<option value=""></option>
					<option value="">Ação penal</option>
					<option value="">Ação Revisional de contrato de financiamento</option>
					<option value="">Ação Revisional de contrato de plano de saúde</option>
					<option value="">AÇÃO CIVIL PÚBLICA </option>
					<option value="">AÇÃO DE ALIMENTOS GRAVÍDICOS</option>
					<option value="">ACIDENTÁRIA</option>
				</select>
			</div>
		</div>
		<div class="form-row mt-3">
			<div class="input-group col-md-6 mb-3">
				<div class="input-group-prepend">
					<label class="input-group-text text-secondary" for="">Comarca</label>
				</div>
				<select class="custom-select">
					<option value=""></option>
					<option value="">SALVADOR</option>
					<option value="">CAMAÇARI</option>
					<option value="">lAURO DE FREITAS</option>

				</select>
			</div>
				<div class="input-group col-md-6 mb-3">
				<div class="input-group-prepend">
					<label class="input-group-text text-secondary" for="">Vara</label>
				</div>
				<select class="custom-select">
					<option value=""></option>
					<option value="">AAAAAAAA</option>
					<option value="">BBBBBBBB</option>
					<option value="">CCCCCCc</option>

				</select>
			</div>
			
		</div>
		<hr>
		<div class="form-row">
			<div class="form-group col-md-12 form-radio mt-2">
				<span> Em substituição</span>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="processos-sim" name="processos" class="custom-control-input">
					<label class="custom-control-label  bordas-radio" for="processos-sim">Sim</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="processos-nao" name="processos" class="custom-control-input">
					<label class="custom-control-label  bordas-radio" for="processos-nao">Não</label>
				</div>
			</div>
		</div>
		<hr>
		<button type="submit" class="btn btn-success btn-block mt-3"> Cadastrar</button>
	</form>


	<div class="d-flex justify-content-between mt-4 contador-processo">
		<div class="input-group contador-agendamento pr-3">
			<span class="w-75 py-2">Total Processos</span>
			<span class="w-25 py-2">100</span>
		</div>
	
		<div class="input-group contador-agendamento">
			<span class="w-75 py-2">1º Vara Civel Salvador</span>
			<span class="w-25 py-2">100</span>
		</div>
	</div>



	<form action="" method="" class="mt-4">
		<div class="input-group">
			<div class="input-group-prepend">
				<label class="input-group-text text-secondary" for="inputGroupSelect01">Unidade Judicial</label>
			</div>
			<select class="custom-select" id="inputGroupSelect01">
				<option selected></option>o
				<option value="1">1º Vara AAA</option>
				<option value="2">2º Vara AAA</option>
				<option value="3">3º Vara AAA</option>

			</select>
		</div>

		<div class="input-group mt-3">
			<input type="text" class="form-control" placeholder=" " aria-label="Recipient's username" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn text-secondary" type="submit" style="border:solid #ced4da 1px; background:#e9ecef">Pesquisar</button>
			</div>
		</div>

	</form>
    <div class="table-responsive">
	<table class="table table-hover mt-4 ">
		<thead class="bg-secondary text-white" style="font-size:">
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">Nº Processos</th>
				<th scope="col">Vara</th>
				<th scope="col">Opções</th>
			</tr>
		</thead>
		<tbody class="font-td">
			<tr>
				<td>FLAVIA BARRETO GOMES DIAS</td>
				<td>000100065656568</td>
				<td>1ª VARA ABCDE</td>
				<td>
					<a href="http://sigad.defensoria.ba.def.br/assistidos/extrato/524397" target="_blank"> link Sigad</a>
				</td>
			</tr>
			<tr>
				<td>FLAVIA BARRETO GOMES DIAS</td>
				<td>000100065656568</td>
				<td>1ª VARA ABCDE</td>
				<td>
					<a href="http://sigad.defensoria.ba.def.br/assistidos/extrato/524397" target="_blank"> link Sigad</a>
				</td>
			</tr>
			<tr>
				<td>FLAVIA BARRETO GOMES DIAS</td>
				<td>000100065656568</td>
				<td>1ª VARA ABCDE</td>
				<td>
					<a href="http://sigad.defensoria.ba.def.br/assistidos/extrato/524397" target="_blank"> link Sigad</a>
				</td>
			</tr>
			<tr>
				<td>FLAVIA BARRETO GOMES DIAS</td>
				<td>000100065656568</td>
				<td>1ª VARA ABCDE</td>
				<td>
					<a href="http://sigad.defensoria.ba.def.br/assistidos/extrato/524397" target="_blank"> link Sigad</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
</div>
