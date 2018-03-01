
<div class="col-md-12 mobile">  
 
   	<a class="scroll-tabela text-secondary" href="#tabela" style="position: absolute; top:7%; right:6%; z-index:3; cursor:pointer" >Exibir Tabela</a> 
	<div class="" id="container" height="100px"></div>

</div>
  
<div class=" tabela-esconder col-md-12 pb-5  mobile">
	<table class=" table table-responsive-md table-hover mt-4 " id="tabela">
		<thead class="text-white text-center" style="background:#27ae60">
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

 <style>

 .tabela-esconder{
	display: none;
}

</style>

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



<script>

  $(document).ready(function(){
	 
	  	$(".scroll-tabela").click(function (event) {
		 event.preventDefault();
			
			 $('.tabela-esconder').toggle('slow');
			 $('html,body').animate({scrollTop:$(this.hash).offset().top}, 700);
		
	        
	});

  });
	
 $('.tabela-esconder').dblclick(function() {
    $('.tabela-esconder').hide('slow');
});
	
</script>