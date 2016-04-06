
<?= form_open("/carrito/recibirArticulos") ?>
<?PHP
  $idArticulo = array(
    'name' => 'nombreArticulo',
    'placeholder' => 'Escriba el nombre',
  );
  $cantidadArticulos = array(
    'name' => 'cantidadArticulos',
    'placeholder' => 'Cantidad de articulos',
  );
  $precioArticulo = array(
    'name' => 'precioArticulos',
    'placeholder' => 'precio',
  );
    $total = array(
    'name' => 'total',
    'placeholder' => 'total',
  );

?>
<?= form_label('Nombre: ', 'nombreArticulo') ?>
<?= form_input($nombreArticulo) ?>
<br>
<?= form_label('Cantidad articulos: ', 'cantidadArticulos') ?>
  <?= form_input($cantidadArticulos) ?>
<br>
<?= form_label('Precio articulo: ', 'precioArticulo') ?>
  <?= form_input($precioArticulo) ?>
<br>
<?= form_label('Total: ', 'total') ?>
  <?= form_input($total) ?>
<br>
<?= form_submit('','Agregar producto') ?>
<?= form_close() ?>

</body>
</html>
