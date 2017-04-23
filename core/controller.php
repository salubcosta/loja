<?php

class controller{

	public function carregarTemplate($view, $dados){
		include DIRETORIO.'/views/template.php';
	}

	public function carregarView($view, $dados){
		extract($dados);
		include DIRETORIO.'/views/'.$view.'.php';
	}
}