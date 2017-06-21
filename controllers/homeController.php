<?php
class homeController extends controller{
	
	public function index(){

		$dados = array(
			'depoimentos' => array()
		);
		//codigo para pegar os depoimentos
		$depo = new Depoimentos();
		$dados['depoimentos'] = $depo->getDepoimentos(2);//2 e quantos depoimentos vai ser retornado do banco

		$this->loadTemplate('home', $dados);
	}
}