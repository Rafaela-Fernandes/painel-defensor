<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
	<!-- jquery  -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="css/jquery-ui.min.css">
  
    
    <!-- css e js jasny -->
    <link type="text/css" href="css/jasny-bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
	<!-- Bootstrap CSS e js-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
  
	<!-- css e js calendaio -->
	<link rel="stylesheet" href="css/zabuto_calendar.min.css">
	<script src="js/zabuto_calendar.min.js"></script>

	<!-- meu css e js -->
	<link rel="stylesheet" href="css/index.css">
	<script src="js/index.js"></script>
	<!-- css e js date table
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>-->

	<!-- Js higcharts (graficos)-->
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>

  <script type="text/javascript" src="js/popper.min.js"></script>
	<title>Projeto-Painel</title>
</head>

<body>
	<div class="container-fluid">

		
		<header>
		 <?= $this->element('header') ?>
		 	<section id="sessao-menu">
			 <?= $this->element('menu-lateral') ?>
		</section>
		 <?= $this->element('usuario-logado');?>
		  <section class="col-md-4" id="notificacoes">
			      <?= $this->element('notificacoes');?>
		  </section>
		</header>
		
			<main> 
                 <?= $this->element('alertas');?> 
				
                <section>
                 	<?= $this->element('../Pages/_conteudo-principal')?>
				</section>
				
				<!-- Modais informações do dia-->
				<?= $this->element('../Pages/_modal-audiencias')?>
			    <?= $this->element('../Pages/_modal-agendamentos')?>
			    
			     <!-- Modais informações da tabela extrajudicial resoluçao-->
			     <?= $this->element('../Pages/_modal-maisInformacao-orgao')?>
			     <?= $this->element('../Pages/_modal-maisInformacao-empresa')?>
			    
			</main>
		<footer>
				<div class="row mx-3">
					<div class="col-md-12 p-5">
						<a href="#" class="voltar-ao-topo"><img src="img/top.png" alt=""></a>
					</div>
				</div>
		</footer>
			
	</div>
</body>

</html>