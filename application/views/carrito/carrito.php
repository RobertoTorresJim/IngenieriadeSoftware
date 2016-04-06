
<?php
	if($carrito){
	foreach ($carrito->result() as $carrito) { ?>
	<ul>
		<li><?= $carrito->nombreArticulo; ?><?= $carrito->cantidadArticulos; ?><?= $carrito->precioArticulo; ?><?= $carrito->total; ?></li>
		<li><a href="carrito/formulario.php"</a><p>agregar</p></li>
	</ul>

	<?php }
	}else{

		echo"<p>Error en la aplicacion</p>";

	}
		?>
</body>
</html>
