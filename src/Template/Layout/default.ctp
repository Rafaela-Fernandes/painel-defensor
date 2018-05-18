<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jquery  -->
	<script src="js/jquery.js"></script>
	
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
	<link rel="stylesheet"  href="css/atendimento.css">
	<script src="js/atendimento.js"></script>
	<script src="js/index.js"></script>
	<!-- css e js date table
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>-->

	<!-- Js higcharts (graficos)-->
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
  
     <script type="text/javascript" src="js/tinymce.min.js"></script>
     <script type="text/javascript" src="js/pt_BR.js"></script>

   
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    

</head>
<body>
     <div class="container-fluid">
    <header>
		 <?= $this->element('header') ?>
		
		 	<section id="sessao-menu">
			 <?= $this->element('menu-lateral') ?>
		  </section>
		  <div class="row p-2" style="background:#27ae60"></div>

		  <section class="col-md-4" id="notificacoes">
			      <?= $this->element('notificacoes');?>
		  </section>
   </header>
     
      <?= $this->Flash->render() ?>
   
   
       <?= $this->fetch('content') ?>
   
	</div>
    <footer>
       <div class="row mx-3">
		<div class="col-md-12 p-5">
		<a href="#" class="voltar-ao-topo"><img src="img/top.png" alt=""></a>
		</div>
		</div>
    </footer>
    
    
    <script src="js/jquery-ui.min.js"></script>
</body>
</html>
