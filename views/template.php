<!DOCTYPE html>
<html>
<head>
	<title>Template da Loja</title>
	<link rel="stylesheet" href="<?php echo URL;?>/assets/css/template.css">
</head>
<body>
<div class="topo"></div>
<div class="menu">
	<div class="menuint">
		<ul>
			<a href="<?php echo URL;?>"><li>Home</li></a>
			<a href="#"><li>Empresa</li></a>
			<?php foreach($menu as $menuitem):?>
				<a href="<?php echo URL;?>/categoria/ver/<?php echo $menuitem['ID'];?>"><li><?php echo $menuitem['TITULO'];?></li></a>
			<?php endforeach; ?>
			<a href="#"><li>Contato</li></a>
		</ul>
	</div>
</div>
<div class="container">
	<?php $this->carregarView($view, $dados); ?>
</div>
<div class="rodape"></div>

</body>
</html>