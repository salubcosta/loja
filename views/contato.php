<h1>Contato</h1>
<?php
if(isset($feedback) && !empty($feedback)):?>
	<div class="aviso"><?php echo $feedback;?></div>
<?php endif;?>
<form method="POST" class="contato">
	<p>
		<input type="text" name="nome" required placeholder="Informe seu nome">
	</p>
	<p>
		<input type="email" name="email" required placeholder="Informe seu e-mail">
	</p>
	<p>
		<textarea name="mensagem" placeholder="Deixe sua mensagem"></textarea>
	</p>
	<p>
		<input type="submit" value="Enviar">
	</p>
</form>
