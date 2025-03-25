<html>

<head>
  <title>Práctica 17</title>
</head>

<body>

  <?php
    echo "<h1>Práctica 17</h1>";

    $ar = fopen("datos.txt", "r") or
    die("No se pudo abrir el archivo");
    while (!feof($ar)) {
        $linea = fgets($ar);
        $lineasalto = nl2br($linea);
            echo $lineasalto;
    }
    fclose($ar);
  ?>

</body>
</html>