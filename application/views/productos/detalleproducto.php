<?php
	if($productos){
	foreach ($productos->result() as $producto) { ?>
	<ul>
		<li><?= $producto->nombreProducto; ?><?= $producto->precioProducto; ?><?= $producto->descripcionProducto; ?></li>
		<li><a href="productos.php"</a><p>regresar</p></li>
	</ul>
	
	<?php } 
	}else{

		echo"<p>Error en la aplicacion</p>";

	}

		?>
</body>
</html>