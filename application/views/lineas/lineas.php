<?php
  if($lineas){
  foreach($lineas->result() as $linea){?>
    <ul>
      <li><a href="<?= $linea->idLineas; ?>/"><?= $linea->nombreLinea; ?></a></li>
    </ul>

  <?PHP }
}else{
  echo "<p>Error en la aplicacion</p>";
}?>
</body>
</html>
