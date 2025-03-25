<!DOCTYPE html>
<html lang="es">

<head>
  
  <title>Práctica 20R</title>
</head>

<body>
  <?php
    echo "<h1>Práctica 20 - Respuesta</h1><br><br>";

 
  if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nombrecurso'])) {
    $nombrecurso = htmlspecialchars($_POST['nombrecurso']);


    $conexion = mysqli_connect("localhost", "root", "", "phpfacil") or
      die("Problemas con la conexión: " . mysqli_connect_error());

    
    $sql = "INSERT INTO cursos (nombrecur) VALUES (?)";
    $stmt = mysqli_prepare($conexion, $sql);

    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "s", $nombrecurso);

      if (mysqli_stmt_execute($stmt)) {
        echo "El curso fue dado de alta correctamente.";
      } else {
        echo "Problemas al insertar el curso: " . mysqli_error($conexion);
      }

      mysqli_stmt_close($stmt);
    } else {
      echo "Error al preparar la consulta: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
  } else {
    echo "Por favor, complete el formulario correctamente.";
  }
  ?>
</body>

</html>