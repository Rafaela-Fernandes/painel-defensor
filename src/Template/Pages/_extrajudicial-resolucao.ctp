<div class="col-md-6 py-4 px-5  mobile">


	<h5 class="text-secondary">Resolução extrajudicial <img src="../img/mais.png" alt="" id="exibir-form-resolucao-extraJudicial"> </h5>
	<!-- Formulário Cadastrar tarefa -->
	<form class="bg-light p-3 mb-3" id="formulario-resolucao-extraJudicial">
	    
	     <div class="form-row">
			<div class="input-group mb-3 col-md-12">
				<div class="input-group-prepend">
					<span class="input-group-text text-secondary" placeholder="">Nome</span>
				</div>
				<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
		</div>
		<div class="form-row" >
			<div class=" input-group col-md-12 mb-3" id="tipo-resolucao-extra-judicial" >
			    <div class="input-group-prepend">
				<label class="input-group-text text-secondary" for="">Tipo Resolução</label>
			    </div>
				<select id="" class="custom-select" >
					<option value="" selected></option>
					<option value="">Conciliação</option>
					<option value="">Mediação</option>
					<option value="">Arbitragem</option>
					<option value="orgaos-publicos">Contato com Órgãos Públicos</option> 	
					<option value="empresa">Contato com Empresas</option>			
				</select>
			</div>
		</div>
	
		<div class="form-row" id="tipo-orgao" style="display:none">
			<div class="input-group mt-3 col-md-12">
			    <div class="input-group-prepend">
				<label class="input-group-text text-secondary" for="">Órgão</label>
			    </div>
				<select id="" class="custom-select">
					<option value="" selected></option>
					<option value="">Estado da Bahia</option>
					<option value="municipio">Municipio</option>
					<!-- Outro input -->
					<option value="">DETRAN</option>
					<option value="">UNEB</option>
					<option value="">UEFS</option>
					<option value="">UESC</option>
					<option value="">UESB</option>
					<option value="">FUNDAC</option>
					<option value="outros-orgao">Outros</option>
					<!-- Outro input -->
				</select>
			</div>		
		</div> <!-- item D -->
		
			<div class="form-row" id="outro-orgao" style="display:none">
			<div class="form-group col-md-12 mt-3">
				<textarea class="form-control" rows="2" placeholder="Nome Órgão"></textarea>
			</div>
			</div>	
	 
		
		<div class="form-row" id="lista-municipio" style="display:none">
	        <div class="input-group mt-3 col-md-12">
		      <div class="input-group-prepend">
				<label class="input-group-text text-secondary" for="">Selecione Municipio</label>
			    </div>
				<select id="" class="custom-select">
					<option value="" selected></option>
					<option value="">Camaçari</option>
					<option value="">Lauro de Freitas</option>
					<option value="">Vitoria da Conquista</option>
				</select>
			</div>
		</div>
		
		<div class="form-row" id="tipo-empresa" style="display:none">
			<div class="input-group mt-3 col-md-12"> 
			  <div class="input-group-prepend">
				<label class="input-group-text text-secondary" for="inputGroupSelect01">Empresa</label>
			    </div>
				<select id="" class="custom-select">
					<option value="" selected></option>
					<option value="">COELBA</option>
					<option value="">EMBASA</option>
					<option value="">SULAMÉRICA</option>
					<option value="">Hapvida</option>
					<option value="">Bradesco Saúde</option>
					<option value=""> Golden Cross</option>
					<option value="">Itaú UNIBANCO</option>
					<option value="">Qualicorp</option>
					<option value="">Banco do Brasil</option>
					<option value="outro-empresa">Outros</option>
					<!-- Outro input-->
				</select>
			</div>
		</div>   <!-- item E -->
		  <div class="form-row" id="outros-empresa" style="display:none">
			<div class="form-group col-md-12 mt-3">
				<textarea class="form-control" rows="2" placeholder="Nome Empresa"></textarea>
			</div>
			</div> 
		
		   <div class="form-row" id="forma-contato" style="display:none">
		    <div class="input-group mt-3 col-md-12">
		          <div class="input-group-prepend">
				<label class="input-group-text text-secondary" for="">Forma Contato</label>
			    </div>
				<select  class="custom-select">
					<option value="" selected></option>
					<option value="">E-mail</option>
					<option value="">Telefone</option>
					<option value="">Arbitragem</option>
					<option value="">Encaminhamento</option> 	
					<option value="">Ofício</option>
					<opition value="">Reunião</opition>			
				</select>
			</div>		
		</div>
		
		 <hr>
		<div class="form-row">
		   	<div class="form-group col-md-12 form-radio">
				 <span> Houve êxito na tentativa de resoluçao extrajudicial</span>
				 	<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="resolucao-sim" name="resolucao-extraJudicial" class="custom-control-input">
					<label class="custom-control-label" for="resolucao-sim">Sim</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="resolucao-nao" name="resolucao-extraJudicial" class="custom-control-input">
					<label class="custom-control-label" for="resolucao-nao">Não</label>
				</div>
			</div>
			<div class="form-group col-md-12 form-radio">
				<span> Em substituição</span>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="substituicao-resolucao-sim" name="substituicao-resolucao" class="custom-control-input">
					<label class="custom-control-label" for="substituicao-resolucao-sim">Sim</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="substituicao-resolucao-nao" name="substituicao-resolucao" class="custom-control-input">
					<label class="custom-control-label" for="substituicao-resolucao-nao">Não</label>
				</div>
			</div>
			
		</div>
		<hr>
		<button type="submit" class="btn btn-success btn-block mt-3"> Cadastrar</button>
	</form>


	<!-- Formulário Cadastrar tarefa -->

	<div class="mt-3 input-group contador-agendamento">
		<span class="w-50 py-2">Resolução Extra Judicial</span>
		<span class="w-50 py-2"> 4</span>
	</div>

	<table class="table table-responsive-md  table-hover mt-4 tabela-responsiva">
		<thead class="bg-secondary text-white" style="font-size:">
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">Tipo</th>
				<th scope="col">Resoluçao</th>
				<th scope="col">Detalhes</th>
				
			</tr>
		</thead>
		<tbody class="font-td">
			<tr>
				<td>Rafaeala da silva Fernandes</td>
				<td>Conciliação</td>
				<td>Sim</td>
				<td><a href=""></a></td>
			</tr>
				<tr>
				<td>Rafaeala da silva Fernandes</td>
				<td>Contato com Empresa</td>
				<td>Não</td>
				<td><a href="" data-toggle="modal" data-target="#modal-empresa">Exibir</a></td>
			</tr>
				<tr>
				<td>Rafaeala da silva Fernandes</td>
		        <td>Contato Órgão Público</td>
		        <td>Não</td>
				<td><a href=""  data-toggle="modal" data-target="#modal-orgao">Exibir</a></td>
			</tr>
		</tbody>
	</table>
</div>