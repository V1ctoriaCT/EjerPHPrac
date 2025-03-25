<?php
$file = "results.txt";
$fp = fopen($file, "r");
$size = filesize($file);
if ($size > 0) {
    $vote = fread($fp, $size);
    $arr_vote = explode(",", $vote);
} else {
    $arr_vote = array(0, 0, 0); // Inicializar el arreglo con valores por defecto
}
fclose($fp);
?>
<html>
<head>
<title>Resultados de la encuesta</title>
</head>
<body>
<h1>Resultados de la encuesta</h1>
<p>Excelente, he aprendido mucho: <?php echo $arr_vote[0]; ?></p>
<p>Más o menos, es muy complicado: <?php echo $arr_vote[1]; ?></p>
<p>¡Bah!, para qué quiero aprender PHP: <?php echo $arr_vote[2]; ?></p>
</body>
</html>