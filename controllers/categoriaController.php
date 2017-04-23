<?php

class categoriaController extends controller{

	public function ver($id){
		$dados = array(
			'categoria' => '',
			'produtos' => array()
			);

		$categoria = new categorias();
		$produtos = new produtos();
		$dados['produtos'] = $produtos->listarCategoria(addslashes($id));
		$dados['categoria'] = $categoria->getCategarias(addslashes($id));

		$this->carregarTemplate('categoria', $dados);
	}
}