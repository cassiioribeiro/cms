<h1>Paginas</h1>

<a href="<?php echo BASE_URL; ?>painel/pagina_add">Adicionar Página</a><br/><br/>

<table border="0" width="100%">
	<tr>
		<td align="left">ID</td>
		<td align="left">URL</td>
		<td align="left">Titulo</td>
		<td align="left">Ações</td>
	</tr>
	<?php foreach($paginas as $pagina): ?>
		<tr>
			<td><?php echo $pagina['id']; ?></td>
			<td><?php echo utf8_encode($pagina['url']); ?></td>
			<td><?php echo utf8_encode($pagina['titulo']); ?></td>
			<td>
				<a href="<?php echo BASE_URL; ?>painel/pagina_edit/<?php echo $pagina['id']; ?>">Editar</a> - 
				<a href="<?php echo BASE_URL; ?>painel/pagina_del/<?php echo $pagina['id']; ?>">Excluir</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>