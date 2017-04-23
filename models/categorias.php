<?php

class categorias extends model{

	public function getCategarias($id){
		$sql = "SELECT TITULO FROM CATEGORIAS WHERE ID=:ID";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':ID',$id);
		$sql->execute();

		if($sql->rowCount()>0){
			$sql = $sql->fetch();
			return $sql['TITULO'];
		}
		return 'CATEGORIA';
	}
}