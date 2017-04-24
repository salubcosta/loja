<?php foreach($produtos as $prod): ?>
<a href="<?php echo URL;?>/produto/ver/<?php echo $prod['ID'];?>">
<div class="produto">
	<img src="<?php echo URL;?>/assets/images/prods/<?php echo $prod['IMAGEM'];?>" width="176" height="176" border="0">
	<strong><?php echo $prod['NOME'];?></strong><br />
	R$ <?php echo $prod['PRECO'];?>

</div>
</a>
<?php endforeach;?>

<div style="clear: both;"></div>