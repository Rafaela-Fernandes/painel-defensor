<nav id="nav-menu">

	<div class="item">

		<p>Triagem</p>
		<ul class="list-unstyled esconder-ul">
			<li><a href="">Item 01</a></li>
			<li><a href="">Item 02</a></li>
		</ul>

	</div>
	<div class="item">

		<p>Agenda</p>
		<ul class="list-unstyled esconder-ul">
			<li><a href="">Item 01</a></li>
			<li><a href="">Item 02</a></li>
		</ul>
	</div>
	<div class="item">

		<p>Relatório</p>
		<ul class="list-unstyled esconder-ul">
			<li><a href="">Item 01</a></li>
			<li><a href="">Item 02</a></li>
		</ul>

	</div>
	<div class="item">

		<p>Administração</p>
		<ul class="list-unstyled esconder-ul">
			<li><a href="">Item 01</a></li>
			<li><a href="">Item 02</a></li>
		</ul>

	</div>

</nav>



<style>

  #sessao-menu {
		position: absolute;
		left: 0;
		z-index: 3;
		display: none;
		width: 33.3%;
		min-height: 100%;
		background: #343a40;
	}
	
	#nav-menu div:first-child p {
		border-top: solid #404952 1px
	}
	.item p{
		cursor: pointer;
		color: #FFF; 
		padding: 1rem 1.3rem;
		margin: 0;
	}
	
	.item p:hover{
		background: #404952;
	    border-left: solid #7c8690 5px;
	}

	.item a{
		margin-left: 2.3rem;
		color: #FFF;
		text-decoration: none;
	}
   
	.item li{
		background: #404952 ;
		padding: 0.7rem 0;
	}
	
	.item li:hover{
		border-left: solid #7c8690 5px;
	}
	
	.item ul{
		margin: 0 !important;
		padding: 0 !important;
		display: none;
	}
	
	
	
	
</style>