<h1>Editar Pagina</h1>
<form method="POST">
	Nome da pagina:<br/>
	<input type="text" name="titulo" value="<?php echo utf8_encode($pagina['titulo']); ?>"><br/><br/>

	URL da pagina:<br/>
	<input type="text" name="url" value="<?php echo utf8_encode($pagina['url']); ?>"><br/><br/>

	Corpo da pagina:<br/>
	<textarea name="corpo" id="corpo"><?php echo utf8_encode($pagina['corpo']); ?></textarea>
	<br/><br/>

	<input type="submit" value="Salvar">
</form>

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script type="text/javascript">
	window.onload = function(){
		CKEDITOR.replace("corpo");
	}
</script>