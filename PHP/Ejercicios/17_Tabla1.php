<html>

<head>
    <title>Tabla condicional</title>
</head>

<body>
    <h1>Tabla condicional 1</h1>
  
    
<!-- Crearemos una tabla de valores de seno y coseno de 0 a 2
en incrementos de 0.01. Los valores negativos que resulten los queremos mostrar en rojo, y los valores positivos en azul */
/* En primer lugar vamos a crear una funcion con las condicionales
Aqui estamos usando la sentencion de FUNCTION al que le pasamos un valor dependiendo de este valor, ejecutamos una condicion IF..ELSE...
y asignamos un color al tipo de letra para generar la tabla -->

<?php
    function muestra($valor) { 
    if ($valor < 0)
        $color = "red"; 
    else
        $color = "blue";
    return "<td><font color='$color'>$valor</font></td>\n";
    }

    if (function_exists('sin') && function_exists('cos')) {
?>

<table border="1">

<?php
    for ($x=0; $x<=2; $x+=0.01) { 
        echo "<tr>";
        echo muestra($x); 
        echo muestra(sin($x)); 
        echo muestra(cos($x)); 
        echo "</tr>";
    }
?>

</table>

<?php
    } else {
        echo "La función sin() o cos() no está disponible.";
    }
?>
    
    </body>
    </html>
    