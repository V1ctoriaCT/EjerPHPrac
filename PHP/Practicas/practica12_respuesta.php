<html>

<head>
  <title>Práctica 12 </title>
</head>

<body>

  <?php
    echo "<h1>Práctica 12</h1>";

  $cant = 0;
  
  if (isset($_POST['check1'])) {
    $cant++;
  }
  if (isset($_POST['check2'])) {
    $cant++;
  }
  if (isset($_POST['check3'])) {
    $cant++;
  }
  if (isset($_POST['check4'])) {
    $cant++;
  }
  echo $_POST['nombre'];
  echo " practica $cant deportes."
  ?>

</body>

</html>