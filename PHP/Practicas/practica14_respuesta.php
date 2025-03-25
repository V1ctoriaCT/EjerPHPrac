<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $ciudad = htmlspecialchars($_POST["ciudad"]);
    $empresa = htmlspecialchars($_POST["empresa"]);
    $senior = htmlspecialchars($_POST["senior"]);
    $calle = htmlspecialchars($_POST["calle"]);
    $usted = htmlspecialchars($_POST["usted"]);
    $domicilio = htmlspecialchars($_POST["domicilio"]);
} else {
  
    echo "<p>Error: No se han recibido datos.</p>";
    exit; 
}
?>

<html>
    <head>
        <title>Práctica 14 -  respuesta</title>
        
    </head>
    <body>
        
    <a href="practica14.php">Volver al formulario</a>

    <center>
        <h1>Contrato con sus datos personales</h1>
        <p>
            En la ciudad de <?php echo"$ciudad";?>, se acuerda entre la Empresa <?php echo"$empresa";?>representada por el Sr. <?php echo"$senior";?> en su carácter
de Apoderado, con domicilio en la calle <?php echo"$calle";?> y el Sr. <?php echo"$usted";?>, futuro empleado con domicilio en <?php echo"$domicilio";?>,
celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los articulos 90, 92, 93,
94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.
        </p>
        
    </center>
    </body>
</html>