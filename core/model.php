<?php
class model{

	protected $db;

	public function __construct(){
		try{
			$this->db = new PDO(DSN,DBUSER,DBPASS);
			$this->db->exec('SET CHARACTER SET utf8');
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
}