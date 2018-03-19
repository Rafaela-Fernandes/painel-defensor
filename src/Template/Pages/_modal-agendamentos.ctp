<!-- Modal agendamento -->
<div class="modal fade" id="modal-calendario-agendamento" tabindex="-1" role="dialog" aria-labelledby="modal-calendario" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-calendario">
			<div class="modal-header bg-dark">
				<h5 class="modal-title text-white"> Informações Diária - <span> 10/01/2018</span> </h5>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="text-white">&times;</span>
				</button>
			</div>
			<div class="modal-body bg-light p-4">

				<div class="d-flex justify-content-between mt-4 contadores">
					<div class="input-group pr-3 contador-todos-modal">
						<input type="radio" name="radio-contadores-modal" id="label-todos-modal" checked>
						<label for="label-todos-modal" id="todos-modal">Todos</label>
						<span class="py-2">100</span>
					</div>

					<div class="input-group pr-3 contador-inicial-modal">
						<input type="radio" name="radio-contadores-modal" id="label-inicial-modal">
						<label for="label-inicial-modal" id="inicial-modal">Inicial</label>
						<span class="py-2">30</span>
					</div>

					<div class="input-group contador-retorno-modal">
						<input type="radio" name="radio-contadores-modal" id="label-retorno-modal">
						<label for="label-retorno-modal" id="retorno-modal">Retorno</label>
						<span class="py-2">70</span>
					</div>
				</div>


				<form action="" class="mt-4">
					<div class="input-group mt-3 ">
						<input type="text" class="form-control data" placeholder="Data Inicial">
						<input type="text" class="form-control data" placeholder="Data Final">
						<div class="input-group-append">
							<button class="btn text-secondary" type="button" style="border:solid #ced4da 1px; background:#e9ecef">Pesquisar</button>
						</div>
					</div>

					<div class="input-group mt-3">
						<input type="text" class="form-control" placeholder=" " aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn text-secondary" type="submit" style="border:solid #ced4da 1px; background:#e9ecef">Pesquisar</button>
						</div>
					</div>
				</form>



				<table class="table table-responsive-md table-hover mt-4">
		<thead class="bg-secondary text-white">
			<tr>
				<th scope="col">Data</th>
				<th scope="col">Hora</th>
				<th scope="col">Assistido</th>
				<th scope="col">Ação</th>
				<th scope="col">Opções</th>
				<th scope="col">Status</th>
			</tr>
		</thead>
		<tbody class="font-td text-center">
			<tr class="retorno-modal">
				<td>18/01/2018</td>
				<td>09:50</td>
				<td>PEDRO DA SILVA FERNANDES</td>
				<td>ALIMENTOS</td>
				<td>
					<a href="http://sigad.defensoria.ba.def.br/assistidos/extrato/524397" target="_blank"> link Sigad</a>

				</td>
				<td><span class="badge badge-pill  text-white w-100 py-2" style="background:#fd8a2a; font-size:0.7rem">Retorno</span></td>
			</tr>
			<tr class="retorno-modal">
				<td>18/01/2018</td>
				<td>09:50</td>
				<td>PEDRO DA SILVA FERNANDES</td>
				<td>ALIMENTOS</td>
				<td>
					<a href="http://sigad.defensoria.ba.def.br/assistidos/extrato/524397" target="_blank"> link Sigad</a>

				</td>
				<td><span class="badge badge-pill  text-white w-100 py-2" style="background:#fd8a2a;font-size:0.7rem">Retorno</span></td>
			</tr>
			<tr class="inicial-modal">
				<td>18/01/2018</td>
				<td>09:50</td>
				<td>PEDRO DA SILVA FERNANDES</td>
				<td>ALIMENTOS</td>
				<td>
					<a href="http://sigad.defensoria.ba.def.br/assistidos/extrato/524397" target="_blank"> link Sigad</a>

				</td>
				<td><span class="badge badge-pill text-white w-100 py-2" style="background:#27ae60;font-size:0.7rem">Inicial</span></td>
			</tr>
			
			<tr class="inicial-modal">
				<td>18/01/2018</td>
				<td>09:50</td>
				<td>PEDRO DA SILVA FERNANDES</td>
				<td>ALIMENTOS</td>
				<td>
					<a href="http://sigad.defensoria.ba.def.br/assistidos/extrato/524397" target="_blank"> link Sigad</a>

				</td>
				<td><span class="badge text-white badge-pill w-100 py-2"style="background:#27ae60;font-size:0.7rem">Inicial</span></td>
			</tr>
		</tbody>
	</table>


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			</div>

		</div>
	</div>
</div>



<script>
 $(document).ready(function(){
	 
	 
	 
	 
	
 });

</script>

<style>
	/* css contadores Modal inicial/retorno/todos */

	
</style>
<!-- Fim modal agendamento -->