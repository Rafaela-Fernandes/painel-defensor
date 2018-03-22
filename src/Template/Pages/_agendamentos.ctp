<?php use Cake\I18n\Time; ?>
<!-- Inicio informações do dia agendamentos -->
<div class="col-md-6 py-4 px-5 mobile">
	<div class="d-flex justify-content-between mt-4 contadores">
		<div class="input-group pr-3 contador-todos">
			<input type="radio" name="radio-contadores" id="label-todos" checked>
			<label for="label-todos" id="todos">Todos</label>
			<span class="py-2">100</span>
		</div>

		<div class="input-group pr-3 contador-inicial">
			<input type="radio" name="radio-contadores" id="label-inicial">
			<label for="label-inicial" id="inicial">Inicial</label>
			<span class="py-2">30</span>
		</div>

		<div class="input-group contador-retorno">
			<input type="radio" name="radio-contadores" id="label-retorno">
			<label for="label-retorno" id="retorno">Retorno</label>
			<span class="py-2">70</span>
		</div>
	</div>

	<!-- Filtros -->
	<form action="" class="mt-4">
		<div class="input-group mt-3 ">
			<input type="text" class="form-control data" value="<?= $today ?>" placeholder="Data Inicial">
			<input type="text" class="form-control data" value="<?= $today ?>" placeholder="Data Final">
			<div class="input-group-append">
				<button class="btn text-secondary btn-personalizado" type="button">Pesquisar</button>
			</div>
		</div>

		<div class="input-group mt-3">
			<input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn text-secondary btn-personalizado" type="submit">Pesquisar</button>
			</div>
		</div>
	</form>

	<!-- Listagem -->
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
			<tr>
				<?php
					foreach($agendamentos as $agendamento):
						$class = 'inicial';
						$spam = '<span class="badge badge-pill text-white w-100 py-2" style="background:#2dc76e; font-size:0.7rem">Inicial</span>';

						if($agendamento['tipo_atendimento'])
						{
							$class = 'retorno';
							$spam = '<span class="badge badge-pill text-white w-100 py-2" style="background:#fd8a2a; font-size:0.7rem">Retorno</span>';
						}
				?>
					<tr class="<?= $class ?>">
						<td><?= Time::parse($agendamento['data'])->i18nFormat('d/M/Y'); ?></td>
						<td><?= $agendamento['hora'] ?></td>
						<td><?= $agendamento['assistido'] ?></td>
						<td><?= $agendamento['acao'] ?></td>
						<td>
							<a href="http://sigad.defensoria.ba.def.br/assistidos/extrato/<?= $agendamento['assistido_id'] ?>" target="_blank"> link Sigad</a>
						</td>
						<td><?= $spam ?></td>
					</tr>
				<?php endforeach; ?>
			</tr>
		</tbody>
	</table>
</div>
<!-- Fim Informações do dia agendamentos -->


<script>
 $(document).ready(function(){

	   $('#todos').click(function(){
		  $('.retorno').show('fade');
		  $('.inicial').show('fade');
	 });

	  $('#inicial').click(function(){
		 $('.retorno').hide('fade');
		  $('.inicial').show('fade');
	 });

	   $('#retorno').click(function(){
		 $('.retorno').show('fade');
		  $('.inicial').hide('fade');
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
	.contador-todos label {
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
	.contador-todos span {
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

	:active+#todos+span, #todos:active{


	}
	#todos:hover{
		background: #21bfd8;
	}
	input:checked+#todos {
		border-bottom: solid #118598 2px;
		background: #21bfd8;
	}
	input:checked+#todos+span {
		border-bottom: solid #118598 2px;
		border-right: solid  #118598   1px;
	}

	/*--------------------------------------------------------*/

	.contador-inicial label{
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

	.contador-inicial span{
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

	:active+#inicial+span, #inicial:active{


	}
	#inicial:hover{
		background: #2dcc72;
	}
	input:checked+#inicial {
		border-bottom: solid #21864c 2px;
		background: #2dc76e;
	}
	input:checked+#inicial+span {
		border-bottom: solid #21864c 2px;
		border-right: solid #21864c  1px;
	}



/*--------------------------------------------------------*/

	.contador-retorno label {
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

	.contador-retorno span{
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


	:active+#retorno+span, #retorno:active{


	}
	#retorno:hover{
		background: #ff9237;
	}
	input:checked+#retorno {
		border-bottom: solid #d9721a 2px;
		background: #f78d35;
	}
	input:checked+#retorno+span {
		border-bottom: solid #d9721a 2px;
		border-right: solid #d9721a  1px;
	}
</style>
