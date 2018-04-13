<div class="modal fade" id="modal-novoAtendimento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-atendimento">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title">Novo Atendimento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" id="form-pesquisar">
         	
          <div class="input-group mt-3">
			<input type="text" class="form-control" placeholder=" " aria-label="Recipient's username" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn text-secondary " type="submit" style="border:solid #ced4da 1px; background:#e9ecef">Pesquisar</button>
			</div>
		</div>
       </form>
         
       <div class="table-responsive exibir-form-tabela" style="display:none">
	   <table class="table table-responsive-md  table-hover mt-4 ">
		<thead class="bg-secondary text-white">
			<tr>
			    <th scope="col">Triagem</th>
				<th scope="col">Nome</th>
				<th scope="col">Data Nascimento</th>
				<th scope="col">Nome da Mãe</th>
			
				
			</tr>
		</thead>
		<tbody class="font-td">
			<tr>
				<td>000555553565650</td>
				<td>RAFAELA DA SILVA FERNANDES</td>
				<td>11/02/1992</td>
				<td>Maria José da Silva</td>
			</tr>
				
		</tbody>
	</table>
	
	<form action="" class="exibir-form-tabela"  style="display:none" >
		
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<label class="input-group-text text-secondary" for="atendimento">Tipo de Atendimento</label>
			</div>
			<select class="custom-select" id="atendimento">
				<option selected></option>o
				<option value="1">Agendamento</option>
				<option value="2">Atendimento Pleno</option>
				<option value="3">Especializada</option>
			</select>
		</div>
		
		
		<div class="input-group" id="tipo-especializada" style="display:none">
			<div class="input-group-prepend">
				<label class="input-group-text text-secondary" for="especializada">Tipo de Especializada</label>
			</div>
			<select class="custom-select" id="especializada">
				<option selected></option>
				<option value="1">cível</option>
				<option value="2">criminal</option>
				<option value="3">dh</option>
			</select>
		</div>
		
		<div class="input-group mt-3" id="area-atuacao" style="display:none">
			<div class="input-group-prepend">
				<label class="input-group-text text-secondary" for="select-area-atuacao">Área de Atuação</label>
			</div>
			<select class="custom-select" id="select-area-atuacao">
				<option selected></option>
				<option value="1">cível</option>
				<option value="2">criminal</option>
				<option value="3">dh</option>
			</select>
		</div>
	
	</form>
</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" data-dismiss="modal">Atender</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>