
<?php
	if($productos){
	foreach ($productos->result() as $producto) { ?>
	<ul>
		<li><a href="<?= $producto->idProducto;?>/"><?= $producto->nombreProducto; ?></a></li>
	</ul>

	<?php }
	}else{

		echo"<p>Error en la aplicacion</p>";

	}
		?>
</body>
</html>
