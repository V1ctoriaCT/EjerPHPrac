<html>

<head>
  <title>Practica 11</title>
</head>

<body>

  <?php
    echo "<h1>Práctica 11</h1>";

    echo $_POST['nombre'];
        echo "<br>";
    if ($_POST['radio1'] == "sin") {
        echo "Sin estudios.";
    }

    if ($_POST['radio1'] == "primario") {
        echo "Estudios primarios.";
    }
    if ($_POST['radio1'] == "secundario") {
        echo "Estudios secundarios.";
    }
  ?>

</body>

</html>