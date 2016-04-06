<?php
  if($lineas){
  foreach($lineas->result() as $producto){?>
    <ul>
      <li><a href="<?= $producto->idProducto; ?>/"><?= $producto->nombreProducto; ?></a></li>
    </ul>
  <?PHP }
}else{
  echo "<p>Error en la aplicacion</p>";
}?>
</body>
</html>
