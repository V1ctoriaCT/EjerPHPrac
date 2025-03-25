<html>

<head>
    <title>34 Album</title>
</head>

<body>
    <h1> 34 Práctica </h1>
    <h3> Cargar archivo </h3>

    <form action='<?php echo $_SERVER['PHP_SELF'] ?>' method="post" enctype="multipart/form-data">
    <input type="file" name="archivo"><br> <br>
    <input type="submit" name="submit" value="Cargar archivo">
    </form>

<?php
$ruta = "img/"; 

if (!file_exists($ruta)) {
    mkdir($ruta, 0777, true); 
}


if (isset($_FILES['archivo']) && $_FILES['archivo']['size'] > 0) {
    $tamanyomax = 200000; 
    $nombretemp = $_FILES['archivo']['tmp_name'];
    $nombrearchivo = $_FILES['archivo']['name'];
    $tamanyoarchivo = $_FILES['archivo']['size'];
    $tipoarchivo = GetImageSize( $nombretemp );
    if ($tipoarchivo[2] == 1 || $tipoarchivo[2] == 2) { 
        if ($tamanyoarchivo <= $tamanyomax) { 
            if (move_uploaded_file($nombretemp, $ruta.$nombrearchivo)) {
                echo "<p>El archivo se ha cargado <b>con exito</b>. Tamaño de archivo: <b>$tamanyoarchivo</b> bytes, Nombre de imagen: <b>$nombrearchivo</b><br></p>";
            } else {
                echo "<p>No se ha podido cargar el archivo.</p>";
            }
        } else {
            echo "<p>El archivo tiene mas de <b>$tamanyomax bytes</b> y es demasiado grande.</p>";
        }
    } else {
        echo "<p>No es un archivo GIF o JPG valido.</p>";
    }
        echo "<form action='{$_SERVER['PHP_SELF']}' method='post'><input type='submit' value='OK'></form>";
}
$filehandle = opendir($ruta); 
    while ($file=readdir($filehandle)) {
        if ($file != "." && $file != "..") {
            $tamanyo = GetImageSize($ruta.$file);
            echo "<p><img src='$ruta$file' $tamanyo[3]><br></p>\n";
        }
    }
        closedir($filehandle); 
?>

</body>
</html>
