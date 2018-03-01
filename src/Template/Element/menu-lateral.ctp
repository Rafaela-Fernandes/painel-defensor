<nav id="nav-menu">

	<div class="item">
		<input type="radio"  name="radio" id="check1">
		<label for="check1" id="check1">Agendamento</label>
		<ul class="list-unstyled">
			<li><a href="">Item 01</a></li>
			<li><a href="">Item 02</a></li>
		</ul>

	</div>
	<div class="item">
	 <input type="radio"  name="radio" id="check2">
		<label for="check2">Triagem</label>
		<ul class="list-unstyled t">
			<li><a href="">Item 01</a></li>
			<li><a href="">Item 02</a></li>
		</ul>
	</div>
	<div class="item">
		<input type="radio"  name="radio" id="check3">
		<label for="check3">Agendamento</label>
		<ul class="list-unstyled ">
			<li><a href="">Item 01</a></li>
			<li><a href="">Item 02</a></li>
		</ul>

	</div>
	<div class="item">
		<input type="radio"  name="radio" id="check4">
		<label for="check4">Consultas</label>
		<ul class="list-unstyled ">
			<li><a href="">Item 01</a></li>
			<li><a href="">Item 02</a></li>
		</ul>

	</div>
</nav>


<script>
$(document).ready(function () {
	
	$('main').mousemove(function(){
    
          $('#sessao-menu').hide('slow');
          $('input[type=radio]').prop('checked',false);
     });

	$("#menu-suspenso").on('click', function() {
     
	
     $("#sessao-menu").toggle('slow', function(){
      
        if($('#sessao-menu').is(':hidden')){
          $('input[type=radio]').prop('checked',false);
        }
     }); 
     
	});   
  
    
	
});


				

				
</script>

<style>
    
	#check1{
	 border-top: solid #404952 1px;
	}
	
	#sessao-menu{
	position: absolute;
 	left: 0;
 	z-index: 3;
 	display: none;
 	width: 25%;
	min-height: 100%;
	background: #343a40;
	}

	.item input {
		display: none;
	}

	.item label {
		display: block;
		padding: 15px;
		background: #343a40;
		font-size: 17px;
		cursor: pointer;
		color: #d9d9d9;
		border-bottom: solid #404952 1px;
		margin-bottom: 0;
	}

	.item label:hover {
		background: #404952;
		color:#FFF;

	}
	
	.item label:after{
		
		content: "▼";
		font-size: 1rem;
		float: right;
		
			
	}
	

	.item ul {
		width: 100%;
		overflow: hidden;
		max-height: 0;
		transition: all .5s linear;
		margin: 0;
		padding: 0;

	}

	.item input:checked~ul {

		height: auto;
		max-height: 200px;
		transform: all;

	}

	.item ul li a {
		width: 100%;
		height: 50px;
		padding: 10px;
		display: block;
		background:  #ecf0f1;
		text-decoration: none;
		color: #464444;
	
	}

	.item ul li a:hover {
		background: #d4d4d4;
		color: #404952 ;
	}
</style>