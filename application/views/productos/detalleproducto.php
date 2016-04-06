<?php
	if($productos){
	foreach ($productos->result() as $producto) { ?>

	<TABLE BORDER=0 WIDTH=1000>

<TR>
<TD WIDTH=100 HEIGHT=600 VALIGN=TOP>
	<p>PRODUCTO</p>
	<?= $producto->nombreProducto; ?>
</TD>

<TD WIDTH=100 HEIGHT=600 VALIGN=TOP>
	<p>PRECIO</p>
	<?= $producto->precio; ?>
</TD>

<TD WIDTH=100 HEIGHT=600 VALIGN=TOP>
	<p>DESCRIPCION</p>
	<?= $producto->descripcion; ?>
</TD>
</TR>

<TR>
<TD WIDTH=200>
</TD>

<TD WIDTH=200 VALIGN=MIDDLE ALIGN=RIGHT>
	<a href=""</a><p>agregar al carrito</p>
</TD>

<TD WIDTH=200 VALIGN=MIDDLE ALIGN=RIGHT>
	<a href=""</a><p>atras</p>
</TD>
</TR>

</TABLE>
	<?php }
	}else{

		echo"<p>Error en la aplicacion</p>";

	}

		?>
</body>
</html>
