<?php  

class pagamentos extends model{

	public function getPagamentos(){
		$pagamentos = array();

		$sql = "SELECT ID, NOME FROM PAGAMENTOS";
		$sql = $this->db->query($sql);
		if($sql->rowCount()>0){
			$pagamentos = $sql->fetchAll();
		}
		return $pagamentos;
	}
}
