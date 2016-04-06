<?= form_open("/tiendavirtual/recibirlineas/") ?>
<?PHP
  $nombreLinea = array(
    'name' => 'nombreLinea',
    'placeholder' => 'Escriba el nombre',
  );
  $cantidadArticulos = array(
    'name' => 'cantidadArticulos',
    'placeholder' => 'Cantidad de articulos',
  );

?>
<?= form_label('Nombre: ', 'nombreLinea') ?>
<?= form_input($nombreLinea) ?>
<br>
<?= form_label('Cantidad articulos: ', 'cantidadArticulos') ?>
  <?= form_input($cantidadArticulos) ?>
<br>
<?= form_submit('','Subir linea') ?>
<?= form_close() ?>
</body>
</html>
