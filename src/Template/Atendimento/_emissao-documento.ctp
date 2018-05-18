
	<div class="form-row">
	
		<div class="input-group mb-4 pr-3 col-md-6">
			<div class="input-group-prepend">
				<span class="input-group-text text-secondary" placeholder="">Tipo de Oficio</span>
			</div>
			<select type="text" class="custom-select" aria-label="Default" aria-describedby="inputGroup-sizing-default">
				<option value=""> </option>

			</select>
		</div>
		<div class="input-group mb-4 pr-3 col-md-6">
			<div class="input-group-prepend">
				<span class="input-group-text text-secondary" placeholder="">Tipo de Petição</span>
			</div>
			<select type="text" class="custom-select" aria-label="Default" aria-describedby="inputGroup-sizing-default">
				<option value=""> </option>

			</select>
		</div>
		
	</div>
	<div class="form-row">
		
			<div class="input-group col-md-12">
		   <div class="input-group-prepend">
			   <span class="input-group-text text-secondary">Buscar por Nome/Descrição</span>
			</div>
			<input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-verde " type="submit">Pesquisar</button>
			</div>
		   </div>
	</div>
	
	
	<div class="form-row">
		<div class="col-md-12 mt-3">
		<textarea name="" id="documento" class="p-3">
			
		</textarea>
		
		</div>
	
	</div>





<script>
	

	
tinymce.init({
  selector: '#documento',
  height: 300,
  menubar: true,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help wordcount'
  ],
  toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});



</script>