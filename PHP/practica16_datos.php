<html>

<head>
  <title>Práctica 16 - Datos</title>
</head>

<body>

  <?php
  echo "<h1> Práctica 16 </h1>";

  $ar = fopen("datos.txt", "a") or
    die("Problemas en la creacion");
  fputs($ar, "Nombre: ");
  fputs($ar, $_POST['nombre']);
  fputs($ar, "\n");
  fputs($ar, "Dirección: ");
  fputs($ar, $_POST['direccion']);
  fputs($ar, "\n");

  if (isset($_POST['jamonqueso'])) {
    fputs($ar, "Cantidad de Jamón y Queso: ");
    fputs($ar, $_POST['cantjamonqueso']);
    fputs($ar, "\n");
  }

  if (isset($_POST['napolitana'])) {
    fputs($ar, "Cantidad de Napolitana: ");
    fputs($ar, $_POST['cantnapolitana']);
    fputs($ar, "\n");
  }

  if (isset($_POST['muzzarella'])) {
    fputs($ar, "Cantidad de Muzzarella: ");
    fputs($ar, $_POST['cantmuzzarella']);
    fputs($ar, "\n");
  }

  fputs($ar, "--------------------------------------------------------");
  fputs($ar, "\n");
  fclose($ar);
  echo "El pedido se cargó correctamente.";
  ?>

</body>

</html>