<?php

class carrinhoController extends controller{

	public function index(){
		$dados = array();
		if(isset($_SESSION['carrinho'])){
			$prods = $_SESSION['carrinho'];
		}
		$produtos = new produtos();
		$dados['produtos'] = $produtos->getVariosProdutos($prods);
		if(!empty($dados['produtos'])){
			$this->carregarTemplate('carrinho', $dados);
		}else{
			header('Location: '.URL.'/home');
		}
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

	public function remove($id='')
	{
		if(!empty($id)){
			foreach ($_SESSION['carrinho'] as $key => $value) {
				if($id == $value){
					unset($_SESSION['carrinho'][$key]);		
				}
			}
		}
		header('Location: '.URL.'/carrinho');
	}
}