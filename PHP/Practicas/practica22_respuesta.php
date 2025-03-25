


<html>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Práctica 22 R</title>
</head>

<body>
  <h1>Práctica 22 - Respuesta</h1>

  <?php
  
  if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nombre'])) {

   
    $nombre = htmlspecialchars($_POST['nombre']);

    $conexion = mysqli_connect("localhost", "root", "", "alumnos") or
      die("Problemas con la conexión: " . mysqli_connect_error());

    $sql = "SELECT codigo, nombre, codigocurso FROM alumnos WHERE nombre = ?";
    $stmt = mysqli_prepare($conexion, $sql);

    if ($stmt) {
      
      mysqli_stmt_bind_param($stmt, "s", $nombre);

      if (mysqli_stmt_execute($stmt)) {
       
        $resultado = mysqli_stmt_get_result($stmt);

        $cant = 0;
        while ($reg = mysqli_fetch_assoc($resultado)) {
          echo "Nombre: " . $reg['nombre'] . "<br>";
          echo "Curso: ";
          switch ($reg['codigocurso']) {
            case 1:
              echo "PHP";
              break;
            case 2:
              echo "ASP";
              break;
            case 3:
              echo "JSP";
              break;
            default:
              echo "Curso no reconocido";
              break;
          }
          $cant++;
          echo "<hr>";
        }

        if ($cant == 0) {
          echo "No existen alumnos con dicho nombre.";
        }
      } else {
        echo "Problemas en la consulta: " . mysqli_error($conexion);
      }

      mysqli_stmt_close($stmt);
    } else {
      echo "Error al preparar la consulta: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
  } else {
    echo "Por favor, ingrese un nombre para buscar.";
  }
  ?>
</body>

</html>