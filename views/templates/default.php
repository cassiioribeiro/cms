<!DOCTYPE html>
<html>
<head>
	<title><?php echo $this->config['site_title']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/default.css" />
</head>
<body>

	<div class="topo"></div>

	<div class="menu">
		<?php 
			$this->loadMenu();
		?>
	</div>

	<div class="container">
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</div>

	<div class="rodape"></div>

</body>
</html>