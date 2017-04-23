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
}