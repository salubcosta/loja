<h1>Finalizar Compra</h1>
<form method="POST">
	<fieldset>
		<legend>Informações do Usuário</legend>
		<p><input type="text" name="nome" placeholder="Informe seu nome"></p>
		<p><input type="email" name="email" placeholder="Informe seu e-mail"></p>
		<p><input type="password" name="senha" placeholder="Informe sua senha"></p>
	</fieldset>
	<fieldset>
		<legend>Informações de Endereço</legend>
		<textarea name="endereco"></textarea>
	</fieldset>

	<fieldset>
		<legend>Resumo da Compra</legend>
		Total: R$ <?php echo $total; ?>
	</fieldset>

	<fieldset>
		<legend>Informações de Pagamentos</legend>
		<?php foreach($pagamentos as $pg): ?>
			<input type="radio" name="pg" value="<?php echo $pg['ID'];?>"><?php echo $pg['NOME']; ?><br>
		<?php endforeach; ?>
	</fieldset>

	<input type="submit" value="Efetuar Pagamento">
</form>