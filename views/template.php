<!DOCTYPE html>
<html>
<head>
	<title>Template da Loja</title>
	<link rel="stylesheet" href="<?php echo URL;?>/assets/css/template.css">
</head>
<body>
<div class="topo">
	<img src="<?php echo URL;?>/assets/images/logo.png" width="120">
</div>
<div class="menu">
	<div class="menuint">
		<ul>
			<a href="<?php echo URL;?>"><li>Home</li></a>
			<a href="<?php echo URL;?>/empresa"><li>Empresa</li></a>
			<?php foreach($menu as $menuitem):?>
				<a href="<?php echo URL;?>/categoria/ver/<?php echo $menuitem['ID'].'/'.$menuitem['TITULO'];?>"><li><?php echo $menuitem['TITULO'];?></li></a>
			<?php endforeach; ?>
			<a href="<?php echo URL;?>/contato"><li>Contato</li></a>
			<a href="<?php echo URL;?>/carrinho">
				<div class="carrinho">
					Carrinho: <br>
					<?php echo (isset($_SESSION['carrinho'])) ? count($_SESSION['carrinho']): '0'; ?>
				</div>
			</a>
		</ul>
	</div>
</div>
<div class="container">
	<?php $this->carregarView($view, $dados); ?>
</div>
<div class="rodape"></div>

</body>
</html>