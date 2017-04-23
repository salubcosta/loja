<?php

class controller extends model{

	public function __construct(){
		parent::__construct(); // conectar com banco de dados
	}

	public function carregarTemplate($view, $dados){
		$menu = array();

		$sql = "SELECT ID, TITULO FROM CATEGORIAS";
		$sql = $this->db->query($sql);
		
		if($sql->rowCount()>0){
			$menu = $sql->fetchAll();
		}

		include DIRETORIO.'/views/template.php';
	}

	public function carregarView($view, $dados){
		extract($dados);
		include DIRETORIO.'/views/'.$view.'.php';
	}
}