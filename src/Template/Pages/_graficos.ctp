
<div class="col-md-12 mobile">  
 
   	<a class="scroll-tabela text-secondary" href="#tabela" id="texto-exibitTabela">Exibir Tabela</a> 
	<div class="" id="container" height="100px"></div>

</div>
  
<div class="tabela-esconder col-md-12 pb-5  mobile">
	<table class=" table table-responsive-md table-hover mt-4" id="tabela">
		<thead class="text-white text-center bg-success">
			<tr>
				<th scope="col" colspan="2">Fevereiro</th>
			</tr>
		</thead>
		<tfoot class="font-weight-bold" style="font-size:0.8rem">
			<tr>
				<td>52</td>
				<td>40</td>
			</tr>
		</tfoot>
		<tbody class="font-td text-center">
			<tr class="bg-light">
				<th>Agendado</th>
				<th>Realizado</th>
			</tr>
			<tr>
				<td>20</td>
				<td>15</td>
			</tr>
			<tr>
				<td>15</td>
				<td>12</td>
			</tr>
			<tr>
				<td>18</td>
				<td>14</td>
			</tr>
			<tr>
				<td>10</td>
				<td>7</td>
			</tr>

		</tbody>
	</table>
	
	<img src="img/pdf.png" alt="" class="mt-3 float-right">

</div>



<script>
	$(document).ready(function() {

		Highcharts.chart('container', {
			chart: {
				type: 'line'
			},
			title: {
				text: 'Agendado X Realizados'
			},
			subtitle: {
				text: 'Gráfico de Tendência '
			},
			xAxis: {
				categories: ['1-5/Fev', '8-12/Fev', '12-16/Fev', '19-24/Fev']
			},
			yAxis: {
				title: {
					text: ''
				}
			},
			plotOptions: {
				line: {
					dataLabels: {
						enabled: true
					},
					enableMouseTracking: false
				}
			},
			series: [{
				name: 'Agendado',
				data: [20, 15, 18, 10]
			}, {
				name: 'Realizado',
				data: [15, 12, 14, 7, ]
			}]
		});

	});
</script>


