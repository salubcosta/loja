<?php

class empresaController extends controller{

	public function index(){
		$array = array();

		$this->carregarTemplate('empresa', $array);
	}
}