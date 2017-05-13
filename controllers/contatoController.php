<?php

class contatoController extends controller{

	public function index(){
		$array = array();

		if(isset($_POST['nome']) && !empty($_POST['nome'])){
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$mensagem = $_POST['mensagem'];

			$html = "Nome: ".$nome."<br>E-mail: ".$email."<br>Mensagem: ".$mensagem;

			$headers = 'From: contato@salumao.com.br'."\r\n";
			$headers.= 'Reply-To: '.$email."\r\n";
			$headers.= 'X-Mailer: PHP/'.phpversion();

			mail('contato@salumao.com.br', 'Contato pela Loja'.date('d/m/Y'), $html, $headers);

			$array['feedback'] = 'E-mail enviado com sucesso! #sqn';
		}

		$this->carregarTemplate('contato', $array);
	}
}