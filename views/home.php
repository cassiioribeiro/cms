<div class="home_banner" style="background-image: url('<?php echo BASE_URL.'assets/images/'.$this->config['home_banner']; ?>')"></div>

<div class="home_banner_txt"><?php echo $this->config['home_welcome']; ?></div>

<div class="home_depo">
	<h3>Depoimentos de Clientes satisfeitos</h3><br/>
	<?php foreach ($depoimentos as $depitem): ?>
		<strong><?php echo utf8_encode($depitem['nome']); ?></strong><br/>
		<?php echo utf8_encode($depitem['texto']);?>
		<hr/>
	<?php endforeach;?>
</div>

<div class="home_cta">
	Deseja conferir nossos serviços<br/>
	<a href="<?php echo BASE_URL.'servicos'; ?>"><div>Conferir nossos servicos</div></a>
</div>