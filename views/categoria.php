<h1><?php echo $categoria;?></h1>

<?php foreach($produtos as $prod): ?>
<a href="<?php echo URL;?>/produto/ver/<?php echo $prod['ID'];?>">
<div class="produto">
	<img src="" width="180" height="180" border="0">
	<strong><?php echo $prod['NOME'];?></strong><br />
	R$ <?php echo $prod['PRECO'];?>

</div>
</a>
<?php endforeach;?>

<div style="clear: both;"></div>