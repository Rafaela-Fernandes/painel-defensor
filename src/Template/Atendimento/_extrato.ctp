<div class="col-md-12 py-4 px-4" id="div-extrato">

	<h4 class="text-secondary mt-3 mb-1">Dados Pessoais</h4>
	<hr>

	<table class="table table-hover mt-4">
		<thead class="text-white bg-secondary">
			<tr>
				<th scope="col">NOME</th>
				<th scope="col">SEXO</th>
				<th scope="col">NASCIMENTO</th>
				<th scope="col">NÚMERO DE TRIAGEM</th>
				<th scope="col">NOME MÃE</th>
				<th scope="col">CPF</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>JORGE DIAS RUFINO</td>
				<td>Masculino</td>
				<td>11/02/1980</td>
				<td>00000123232323232</td>
				<td>MARIA JOAQUINA DE JESUS GOES</td>
				<td>055.985.123-96</td>

			</tr>
		</tbody>
	</table>


	<h4 class="text-secondary mt-5 mb-1">Historico</h4>

	<hr>


	<table class="table table-hover mt-4 ">
		<thead class="text-white bg-secondary">
			<tr>
				<th scope="col">DATA DE CADASTRO</th>
				<th scope="col">NÚMERO</th>
				<th scope="col">ESPECIALIZADA</th>
				<th scope="col">PROCEDIMENTO COMUM</th>
				<th scope="col">SITUAÇÃO</th>
				<th scope="col">VISUALIZAR</th>
			</tr>
		</thead>
		<tbody>

			<tr style="background: rgb(196, 240, 205);">
				<td colspan=6 class="text-left td-clique-01 mais">CÍVEL FAZENDO PÚBLICA</td>

			</tr>
			<div style="" class="tr-01">
				<tr class="tr-01">
					<td>13/01/2017 09:40:47</td>
					<td>AC2017383324000</td>
					<td>CÍVEL E FAZENDA PÚBLICA</td>
					<td>00000123232323232</td>
					<td>OUTRO(A)</td>
					<td>
						<a href="" data-toggle="modal" data-target="#modal-extrato"><img src="img/visualizar.png" alt=""></a>
					</td>

				</tr>
				<tr class="tr-01">
					<td>13/01/2017 09:40:47</td>
					<td>AC2017383324000</td>
					<td>CÍVEL E FAZENDA PÚBLICA</td>
					<td>00000123232323232</td>
					<td>OUTRO(A)</td>
					<td>
						<a href="" data-toggle="modal" data-target="#modal-extrato"><img src="img/visualizar.png" alt=""></a>
					</td>
				</tr>

			</div>





			<tr style="background: #c4f0cd;">
				<td colspan=6 class="text-left td-clique-02 mais">FAMILIA</td>

			</tr>

			<div>

				<tr class="tr-02">
					<td>13/01/2017 09:40:47</td>
					<td>AC2017383324000</td>
					<td>FAMILIA</td>
					<td>00000123232323232</td>
					<td>OUTRO(A)</td>
					<td>
						<a href="" data-toggle="modal" data-target="#modal-extrato"><img src="img/visualizar.png" alt=""></a>
					</td>

				</tr>
				<tr class="tr-02">
					<td>13/01/2017 09:40:47</td>
					<td>AC2017383324000</td>
					<td>FAMILIA</td>
					<td>00000123232323232</td>
					<td>OUTRO(A)</td>
					<td>
						<a href="" data-toggle="modal" data-target="#modal-extrato"><img src="img/visualizar.png" alt=""></a>
					</td>
				</tr>

			</div>
		</tbody>
	</table>
</div>






<style>
	.tr-01,
	.tr-02 {
		display: none;
	}
	
	.td-clique-01,
	.td-clique-02 {
		cursor: pointer;
		font-weight: 600;
		color: rgb(41, 52, 43);
		transition: all 2s;
	}
	
	.td-clique-01:hover,
	.td-clique-02:hover {
		background: rgb(162, 212, 173);
	}
	
	.mais::after {
		content: "+";
		font-size: 1.6rem;
		color: rgb(42, 96, 54);
		float: right;
		transition: all 0.3s
	}
	
	.menos::after {
		content: "-";
		font-size: 2rem;
		color: rgb(42, 96, 54);
		float: right;
		transition: all 0.3s;
	}
</style>








<script>
	$(".td-clique-01").click(function() {
		
			$('.td-clique-02').removeClass('menos');
		   $('.td-clique-02').addClass('mais');
		$('.tr-01').toggle('slow', function() {
			$('.td-clique-01').toggleClass('menos');
		})
		$('.tr-02').slideUp('slow',function(){
		
		})

	});

	$(".td-clique-02").click(function() {
		
		$('.td-clique-01').removeClass('menos');
		$('.tr-02').toggle('slow', function() {

			if ($(".tr-02").is(":visible")) {
				$('.td-clique-02').removeClass('mais')
				$('.td-clique-02').addClass('menos')
			} else {
				$('.td-clique-02').removeClass('menos')
				$('.td-clique-02').addClass('mais')
			}
		})
		$('.tr-01').slideUp('slow')

	});
</script>