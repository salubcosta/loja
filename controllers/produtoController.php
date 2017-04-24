<?php

class produtoController extends controller{

	public function ver($id = ''){
		if(!empty($id)){
			$dados = array();
			$produto  = new produtos();
			$dados['produto'] = $produto->getProduto($id);
			if(!empty($dados['produto'])){
				$this->carregarTemplate('produto', $dados);
			}else{
				$this->carregarTemplate('naoencontrado',[]);
			}
		}else{
			$this->carregarTemplate('naoencontrado',[]);
		}
	}
}