<!DOCTYPE html>
<html lang="es">

<head>
  
  <title>Práctica 21</title>
</head>

<body>

  <?php
    echo "<h1>Práctica 21</h1><br><br>";

    $conexion = mysqli_connect("localhost", "root", "", "phpfacil") or
        die("Problemas con la conexión: " . mysqli_connect_error());

  $sql = "SELECT codigo, nombrecur FROM cursos";
    $resultado = mysqli_query($conexion, $sql);

  if ($resultado) {
        echo "<table border='1'>";
        echo "<tr><th>Código</th><th>Nombre del Curso</th></tr>";

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['codigo'] . "</td>";
        echo "<td>" . $fila['nombrecur'] . "</td>";
        echo "</tr>";
    }

        echo "</table>";
    } else {
        echo "Problemas en la consulta: " . mysqli_error($conexion);
    }
        mysqli_close($conexion);
  ?>

</body>

</html>