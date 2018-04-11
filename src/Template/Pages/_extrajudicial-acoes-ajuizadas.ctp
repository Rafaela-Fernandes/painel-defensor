<div class="col-md-6 py-4 px-5  mobile">


	<h5 class="text-secondary">Ações ajuizadas <img src="img/mais.png" alt="" id="exibir-form-acoes-ajuizadas"> </h5>
	
	<form class="bg-light p-3 mb-3" id="formulario-acoes-ajuizadas">
		 <div class="form-row">
			<div class="input-group mb-3 col-md-12">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary">Nome Assistido</span>
				</div>
				<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
		</div>
		 <div class="form-row">
			<div class="input-group mb-3 col-md-12">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary">Nº Processo</span>
				</div>
				<input type="text" class="form-control mask-processo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
		</div>
		

		<div class="form-row">
			<div class="input-group mb-3 col-md-12">
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
					<option value="">AÇÃO DE OFERTA DE ALIMENTOS CUMULADA COM REGULAMENTAÇÃO DE VISITAS</option>
					<option value="">AÇÃO MONITÓRIA</option>
					<option value="">AÇÃO ORDINÁRIA COM PEDIDO DE TUTELA DE URGÊNCIA</option>
					<option value="">AÇÃO PÚBLICA CONDICIONADA</option>
					<option value="">AÇÃO PÚBLICA INCONDICIONADA</option>
					<option value="">AÇÃO RESCISÓRIA</option>
					<option value="">AÇÃO SOCIOEDUCATIVA PÚBLICA - ASP</option>
					<option value="">ABERTURA DE REGISTRO</option>
					<option value="">ABUSO DE PODER</option>
					<option value="">Acidentária - Concessão de Benefício</option>
					<option value="">Acidentária - Revisão de Benefício</option>
					<option value="">ACIDENTÁRIA</option>
				</select>
			</div>
		</div>
		<hr>
		<div class="form-row">
		   	<div class="form-group col-md-12 mt-2 form-radio">
				 <span> Em substituição</span>
				 	<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="acoes-ajuizadas-sim" name="acoesAjuizadas-extraJudicial" class="custom-control-input">
					<label class="custom-control-label  bordas-radio bordas-radio" for="acoes-ajuizadas-sim">Sim</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="acoes-ajuizadas-nao" name="acoesAjuizadas-extraJudicial" class="custom-control-input">
					<label class="custom-control-label  bordas-radio bordas-radio" for="acoes-ajuizadas-nao">Não</label>
				</div>
			</div>	
		</div>
		<hr>
			<button type="submit" class="btn btn-success btn-block mt-3"> Cadastrar</button>
	</form>


	<!-- Formulário Cadastrar tarefa -->

	<div class="mt-3 input-group contador-agendamento">
		<span class="w-75 py-2">Ações ajuizadas</span>
		<span class="w-25 py-2"> 4</span>
	</div>
   <div class="table-responsive">
	<table class="table table-hover mt-4 ">
		<thead class="bg-secondary text-white">
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">Nº Processo</th>
				<th scope="col">Ação</th>
			</tr>
		</thead>
		<tbody class="font-td">
			<tr>
				<td>Rafaeala da silva Fernandes</td>
				<td>123456789</td>
				<td>Ação Penal</td>
			</tr>
			<tr>
				<td>Rafaeala da silva Fernandes</td>
				<td>123456789</td>
				<td>Ação Penal</td>
			</tr>
			<tr>
				<td>Rafaeala da silva Fernandes</td>
				<td>123456789</td>
				<td>Ação Penal</td>
			</tr>
			<tr>
				<td>Rafaeala da silva Fernandes</td>
				<td>123456789</td>
				<td>Ação Penal</td>
			</tr>

		</tbody>
	</table>
	</div>
</div>




