<?php
class Core{

	public function run(){
		//$url = substr($_SERVER['PHP_SELF'],42);
		$url = explode("index.php", $_SERVER['PHP_SELF']);
		$url = end($url); //pega o ultimo registro

		$params = array();
		if(!empty($url)){//diferente de vazio
			$url= explode('/', $url);
			array_shift($url);//remove a primeira caracter
			$currentController = $url[0].'Controller';
			array_shift($url);//tira do array
			if(isset($url[0])){
				$currentAction = $url[0];
				array_shift($url);
			}else{
				$currentAction = 'index';
			}
			if(count($url > 0)){
				$params = $url;
			}
		}else{//caso nao tenha nada na url
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		
		if(file_exists('controllers/'.$currentController.'.php')){
		 	$c = new $currentController();
		}else{
		 	$c = new paginaController();
		 	$currentAction = 'index';
		 	$pNome = explode('Controller',$currentController);//tira a string Controller do valor recebido na variavel
		 	$pNome = $pNome[0]; //recebe o primeiro valor
		 	$params = array($pNome);
		}

		require_once 'core/controller.php';

		call_user_func_array(array($c, $currentAction), $params); //pegar os dados da url

		
	}
}
?>