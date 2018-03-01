<div class="col-md-6 py-4 px-5 mobile">
	
	 <div class="input-group mb-3 mt-4">
		<div class="input-group-prepend">
			<label class="input-group-text text-secondary" for="inputGroupSelect01">Mês</label>
		</div>
		<select class="custom-select" id="inputGroupSelect01">
			<option selected disabled>Selecione um mês
			<option value="1">Janeiro</option>
			<option value="2">Fevereiro</option>
			<option value="3">Março</option>
			<option value="4">Abril</option>
			<option value="5">Maio</option>
			<option value="6">Junho</option>
			<option value="7">Julho</option>
			<option value="8">Agosto</option>
			<option value="9">Setembro</option>
			<option value="10">Outubro</option>
			<option value="11">Novembro</option>
			<option value="12">Dezembro</option>
		</select>
	</div>
	<div class=" mt-4" id="calendario-audiencias">
	</div>
</div>


<script>
	var eventoAudiencias = [{
			"date": "2018-01-10",
			"badge": true,

		}

	];




	$(document).ready(function() {

		$("#calendario-audiencias").zabuto_calendar({

			action: function() {
				return exibirModalAudiencias(this.id, false);
			},
			data: eventoAudiencias,
			modal: true,
			language: "pt",
			today: true,
			show_days: true,
			legend: [{
				type: "text",
				label: "Pendentes",
				badge: "Agendamentos",

			}, ]
		});


		function exibirModalAudiencias() {

			$("#modal-calendario-audiencias").modal();
		}



	});
</script>