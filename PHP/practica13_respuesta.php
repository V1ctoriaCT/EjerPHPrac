<html>

<head>
  <title>Práctica 13</title>
</head>

<body>

  <?php
    echo "<h1>Práctica 13</h1>";

  echo $_POST['nombre'];
  if ($_POST['ingresos'] == 3) {
    echo " debe pagar impuestos.";
  } else {
    echo " no debe pagar impuestos a las ganancias.";
  }
  ?>

</body>

</html>