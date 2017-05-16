<h1>carrinho de compras</h1>
<table border="0" width="100%">
	<tr>
		<th align="left" width="15%">Imagem</th>
		<th align="left">Nome</th>
		<th align="left">Valor</th>
		<th align="left">Ações</th>
	</tr>
	<?php $total = 0; ?>
	<?php foreach($produtos as $prod): ?>
	<?php $total+= $prod['PRECO']; ?>
	<tr>
		<td><img src="<?php echo URL;?>/assets/images/prods/<?php echo $prod['IMAGEM'];?>" border="0" width="60"></td>
		<td><?php echo $prod['NOME'];?></td>
		<td><?php echo 'R$ '.$prod['PRECO'];?></td>
		<td><a href="<?php echo URL;?>/carrinho/remove/<?php echo $prod['ID']?>">remover</a></td>
	</tr>
	<?php endforeach; ?>
	<tr>
		<td colspan="2" align="right">Sub-total: </td>
		<td align="left"><?php echo 'R$ '.$total; ?></td>
		<td><a href="<?php echo URL;?>/carrinho/finalizar">Finalizar Compra</a></td>
	</tr>
</table>