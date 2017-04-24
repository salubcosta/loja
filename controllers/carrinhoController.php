<?php

class carrinhoController extends controller{

	public function index(){
		$dados = array();
		if(isset($_SESSION['carrinho'])){
			$prods = $_SESSION['carrinho'];
		}
		$produtos = new produtos();
		$dados['produtos'] = $produtos->getVariosProdutos($prods);
		$this->carregarTemplate('carrinho', $dados);
	}

	public function add($id = ''){
		if(!empty($id)){
			if(!isset($_SESSION['carrinho'])){
				$_SESSION['carrinho'] = array();
			}
			$_SESSION['carrinho'][] = $id;

			header('Location: '.URL.'/carrinho');
		}else{
			$this->carregarTemplate('naoencontrado',[]);
		}
	}
}