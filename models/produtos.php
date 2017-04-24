<?php

class produtos extends model{

	public function __construct(){
		parent::__construct();
	}

	public function listar($limit = 5){
		$produtos = array();
		$sql = "SELECT * FROM PRODUTOS ORDER BY RAND() LIMIT ".$limit;
		$sql = $this->db->query($sql);

		if($sql->rowCount()>0){
			$produtos = $sql->fetchAll();
		}
		return $produtos;
	}

	public function listarCategoria($categoria){
		$produtos = array();
		$sql = "SELECT * FROM PRODUTOS WHERE ID_CATEGORIA = :ID_CATEGORIA";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':ID_CATEGORIA',$categoria);
		$sql->execute();

		if($sql->rowCount()>0){
			$produtos = $sql->fetchAll();
		}
		return $produtos;
	}

	public function getProduto($id){
		$produtos = array();
		$sql = "SELECT * FROM PRODUTOS WHERE ID = :ID";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':ID',addslashes($id));
		$sql->execute();

		if($sql->rowCount()>0){
			$produtos = $sql->fetch();
		}
		return $produtos;
	}

	public function getVariosProdutos($ids = array()){
		$produtos = array();
		$sql = "SELECT * FROM PRODUTOS WHERE ID IN (".implode(',', $ids).");";
		$sql = $this->db->query($sql);
		
		if($sql->rowCount()>0){
			$produtos = $sql->fetchAll();
		}
		return $produtos;
	}
}