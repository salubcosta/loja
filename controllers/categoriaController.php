<?php

class categoriaController extends controller{

	public function ver($id = ''){
		if(!empty($id)){
			$dados = array(
				'categoria' => '',
				'produtos' => array()
				);

			$categoria = new categorias();
			$produtos = new produtos();
			$dados['produtos'] = $produtos->listarCategoria(addslashes($id));
			$dados['categoria'] = $categoria->getCategarias(addslashes($id));
			if(!empty($dados['categoria']) && !empty($dados['produtos'])){
				$this->carregarTemplate('categoria', $dados);
			}else{
				$this->carregarTemplate('naoencontrado',[]);	
			}
			
		}else{
			$this->carregarTemplate('naoencontrado',[]);
		}
	}
}