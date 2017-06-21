<h1>Editar Menu</h1>
<form method="POST">
	Nome do menu:<br/>
	<input type="text" name="nome" value="<?php echo utf8_encode($menus['nome']); ?>"><br/><br/>

	URL do Menu:<br/>
	<input type="text" name="url" value="<?php echo utf8_encode($menus['url']); ?>"><br/><br/>

	<input type="submit" value="Salvar">
</form>