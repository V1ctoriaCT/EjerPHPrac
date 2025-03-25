<html>

<head>
  <title>Práctica 23 - Respuestas</title>
</head>
<body>
  
<?php
  echo "<h1>Práctica 23 - Respuesta</h1><br><br>";

  $conexion = mysqli_connect("localhost", "root", "", "phpfacil") 
    or die("Error de conexión");

  if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nombrecur'])) {
    $nombrecur = trim($_POST['nombrecur']); 

    $sql = "SELECT codigo FROM cursos WHERE nombrecur = ?";
    $stmt = mysqli_prepare($conexion, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $nombrecur);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            mysqli_stmt_close($stmt); 
            
            $sql_delete = "DELETE FROM cursos WHERE nombrecur = ?";
            $stmt_delete = mysqli_prepare($conexion, $sql_delete);
            mysqli_stmt_bind_param($stmt_delete, "s", $nombrecur);
            mysqli_stmt_execute($stmt_delete);
            mysqli_stmt_close($stmt_delete);

              echo "Se eliminó el curso '$nombrecur'.";
          } else {
            echo "No existe un curso con el nombre '$nombrecur'.";
        }
      } else {
          echo "Error en la consulta.";
    }
  } else {
    echo "Por favor, ingrese un nombre de curso.";
  }
  mysqli_close($conexion);
?>

</body>
</html>