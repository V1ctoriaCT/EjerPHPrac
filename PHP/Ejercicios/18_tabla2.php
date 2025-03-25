<html>

<head>
    <title>Tabla condicional 2</title>
</head>

<body>
    <h1>Tabla condicional 2</h1>


<!--Crearemos una tabla de valores de seno y coseno de 0 a 2
en incrementos de 0.01. Los valores negativos que resulten los queremos mostrar en rojo, y los valores positivos en azul */
/* Variacion. Un color diferente cada fila que se imprima --> 

<?php
function muestra($valor, $nrenglon) {
    if ($nrenglon % 2)
        $fondo = "#eeeeee";
    else
        $fondo = "#dddddd";

    if ($valor < 0.5)
        $color = "red";
    else
        $color = "blue";
        echo "<td style='background-color: $fondo; color: $color'>$valor</td>\n";
    return $nrenglon + 1;
    }
?>

<table border="1">

<?php

$nrenglon = 0;
    for ($x=0; $x<=2; $x+=0.01){ 
        echo "<tr>";
    $nrenglon = muestra($x, $nrenglon);
    $nrenglon = muestra(sin($x), $nrenglon);
    $nrenglon = muestra(cos($x), $nrenglon);
        echo "</tr>";
    }
?>

</body>
</html>
