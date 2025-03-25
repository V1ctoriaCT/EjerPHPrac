
<html>
    <head>
        <title>Práctica 15</title>
    </head>

    <body>
        <h1>Arreglo de días de la semana</h1>

        <?php 
        $dias[0] = "Domingo";
        $dias[1] = "Lunes";
        $dias[2] = "Martes";
        $dias[3] = "Miercoles";
        $dias[4] = "Jueves";
        $dias[5] = "Viernes";
        $dias[6] = "Sabado";

        echo" Hoy es $dias[3]";
        echo '<br>';
        echo'<br>';
//otra manera
        
        $dias2 = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
        $max =  count($dias2);

        echo "El primer día es: $dias2[0] <br><br>";
        echo "El último día es: {$dias2[$max - 1]}";
        
        ?>
    </body>
</html>