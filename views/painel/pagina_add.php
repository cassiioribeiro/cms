<h1>Adicionar Pagina</h1>
<form method="POST">
	Nome da pagina:<br/>
	<input type="text" name="titulo" ><br/><br/>

	URL da pagina:<br/>
	<input type="text" name="url"><br/><br/>

	Criar menu <strong>automaticamente:</strong><br/>
	<input type="checkbox" name="add_menu" value="sim"><br/><br/>
 
	Corpo da pagina:<br/>
	<textarea name="corpo" id="corpo"></textarea>
	<br/><br/>

	<input type="submit" value="Salvar">
</form>

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script type="text/javascript">
	window.onload = function(){
		CKEDITOR.replace("corpo");
	}
</script>