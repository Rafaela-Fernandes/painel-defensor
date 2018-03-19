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
	 
	   $('#todos-modal').click(function(){
		  $('.retorno-modal').show('fade');
		  $('.inicial-modal').show('fade');
	 });
	 
	  $('#inicial-modal').click(function(){
		 $('.retorno-modal').hide('fade');
		  $('.inicial').show('fade');
	 });
	 
	   $('#retorno-modal').click(function(){
		 $('.retorno-modal').show('fade');
		  $('.inicial-modal').hide('fade');
	 });
	 
	 
	
 });

</script>

<style>
	/* css contadores inicial/retorno/todos */

	[type="radio"] {
		display: none;

	}
	.contadores label {
		margin-bottom: 0;
	}
	.contador-todos-modal label {
		background: linear-gradient(#20b9d1, #0d8ca0);
		color: white;
		text-align: center;
		font-weight: 400;
		border: none;
		border-bottom: solid #126c7b 3px;
		border-radius: 7px 0px 0px 7px;
		width: 66%;
		cursor: pointer;
		padding-top: .5rem


	}
	.contador-todos-modal span {
		background: white;
		color: #17a2b8;
		text-align: center;
		font-weight: 400;
		border-top: solid #20b9d1 1px;
		border-left: none;
		border-bottom: solid #126c7b 3px;
		border-right: solid #126c7b  3px;
		border-radius: 0px 7px 7px 0px;
		width: 34%;
	}
	
	:active+#todos-modal+span, #todos-modal:active{
		
		
	}
	#todos-modal:hover{
		background: #21bfd8;
	}
	input:checked+#todos-modal {
		border-bottom: solid #118598 2px;
		background: #21bfd8;
	}
	input:checked+#todos-modal+span {
		border-bottom: solid #118598 2px;
		border-right: solid  #118598   1px;
	}

	/*--------------------------------------------------------*/

	.contador-inicial-modal label{
		background: linear-gradient(#27ae60, #158b47);
		color: white;
		text-align: center;
		font-weight: 400;
		border: none;
		border-bottom: solid #196539 3px;
		border-radius: 7px 0px 0px 7px;
		width: 66%;
		cursor: pointer;
		padding-top: .5rem
	}

	.contador-inicial-modal span{
		background: white;
		color: #27b263;
		text-align: center;
		font-weight: 400;
		border-top: solid #27b263 1px;
		border-left: none;
		border-bottom: solid #196539 3px;
		border-right: solid #196539  3px;
		border-radius: 0px 7px 7px 0px;
		width: 34%;
	
	}
	
	:active+#inicial-modal+span, #inicial-modal:active{
		
		
	}
	#inicial:hover{
		background: #2dcc72;
	}
	input:checked+#inicial-modal {
		border-bottom: solid #21864c 2px;
		background: #2dc76e;
	}
	input:checked+#inicial-modal+span {
		border-bottom: solid #21864c 2px;
		border-right: solid #21864c  1px;
	}



/*--------------------------------------------------------*/
	
	.contador-retorno-modal label {
		background: linear-gradient(#fd8a2a,#d3701e);
		color: white;
		text-align: center;
		font-weight: 400;
		border: none;
		border-bottom: solid #b96117 3px;
		border-radius: 7px 0px 0px 7px;
		width: 66%;
		cursor: pointer;
		padding-top: .5rem
	}

	.contador-retorno-modal span{
		background: white;
		color: #fd8a2a;
		text-align: center;
		font-weight: 400;
		border-top: solid #fd8a2a 1px;
		border-left: none;
		border-bottom: solid  #b96117 3px;
		border-right: solid  #b96117 3px;
		border-radius: 0px 7px 7px 0px;
		width: 34%;
	}
	
		
	:active+#retorno-modal+span, #retorno-modal:active{
		
		
	}
	#retorno-modal:hover{
		background: #ff9237;
	}
	input:checked+#retorno-modal {
		border-bottom: solid #d9721a 2px;
		background: #f78d35;
	}
	input:checked+#retorno-modal+span {
		border-bottom: solid #d9721a 2px;
		border-right: solid #d9721a  1px;
	}
</style>
<!-- Fim modal agendamento -->