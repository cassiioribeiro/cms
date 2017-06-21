<ul>
	<?php foreach ($menu as $menuitem): ?>
		<a href="<?php echo BASE_URL.$menuitem['url']; ?>"><li><?php echo utf8_encode($menuitem['nome']); ?></li></a>
	<?php endforeach?> 
</ul>