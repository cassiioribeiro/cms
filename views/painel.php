<!DOCTYPE html>
<html>
<head>
	<title>Painel Administrativo</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/painel.css" />
</head>
<body>

	<div class="menu">
		<ul>
			<a href="<?php echo BASE_URL?>painel"><li>Páginas</li></a>
			<a href="<?php echo BASE_URL?>painel/menus"><li>Menus</li></a>
			<a href="<?php echo BASE_URL?>painel/config"><li>Configurações</li></a>
			<a href="<?php echo BASE_URL?>painel/logout"><li>Sair</li></a>
		</ul>
	</div>

	<div class="container">
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</div>

</body>
</html>