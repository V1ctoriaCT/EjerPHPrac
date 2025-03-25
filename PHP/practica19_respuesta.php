<html>

<head>
  <title>Práctica 19</title>
</head>

<body>

    <?php
    echo "<h1>Práctica 19 - Respuesta<h/1>";
    echo "<br><br>";

    function verificarClaves($cla1, $cla2) {
        if ($cla1 != $cla2){
            echo "<h3>Las claves ingresadas son distintas.</h3>";
        } else {
            echo "<h3>Las claves coinciden correctamente.</h3>";
        }
    }
           
        verificarClaves($_POST['clave1'], $_POST['clave2']);
    ?>
  
</body>

</html>