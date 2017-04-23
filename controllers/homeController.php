<?php

class homeController extends controller{

	public function index(){
		$dados = array();

		$produtos = new produtos();

		$dados['produtos'] = $produtos->listar(8);

		$this->carregarTemplate('home',$dados);
	}
}