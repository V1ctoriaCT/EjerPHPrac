<html>

<head>
  <title>Práctica 10.1</title>
</head>

<body>

  <?php
    echo "<h1>Práctica 10.1 </h1>";

    echo "Tabla del 2 con el For <br>";
    for ($f = 2; $f <= 20; $f = $f + 2) {
        echo "2x ".($f/2)." = $f <br>";
    }
        echo "<br>";


    echo "Tabla del 2 con el While <br>";
        $f = 2;
    while ($f <= 20) {
        echo "2x ".($f/2)." = $f <br>";
        $f = $f + 2;
    }
        echo "<br>";


    echo "Tabla del 2 con el Do / While <br>";
        $f = 2;
    do {
        echo "2x ".($f/2)." = $f <br>";
        $f = $f + 2;
    } 

    while ($f <= 20);
    ?>

</body>
</html>