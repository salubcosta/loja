<div class="produto_foto">
	<img src="<?php echo URL;?>/assets/images/prods/<?php echo $produto['IMAGEM'];?>" border="0" width="300" height="300">
</div>

<div class="produto_info">
	<h2><?php echo $produto['NOME']; ?></h2>
	<p><?php echo $produto['DESCRICAO']; ?></p>
	<h3>Preço R$ <?php echo $produto['PRECO']; ?></h3>
	<a href="<?php echo URL;?>/carrinho/add/<?php echo $produto['ID'];?>">Adicionar ao Carrinho</a>
</div>


<div style="clear: both;"></div>