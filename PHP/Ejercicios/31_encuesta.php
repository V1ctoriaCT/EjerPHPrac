<?php setcookie("check", 1);
if (isset($_POST['submit'])) { 
    setcookie("vote", 1);
}
?>

<html>
<head>
    <title>31 Encuesta</title>
    <meta http-equiv="content-type" content="text/html" charset="iso-8859-1">
</head>
<body>
    <h1>Encuesta</h1>
    <h3>¿Qué opinas de este curso de PHP?</h3>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="radio" name="reply" value="0"> Excelente, he aprendido mucho.<br>
        <input type="radio" name="reply" value="1"> Más o menos, es muy complicado.<br>
        <input type="radio" name="reply" value="2"> ¡Bah!, para qué quiero aprender PHP.<br><br>

        <?php
      
        if(empty($_COOKIE['voted'])) {
            echo '<input name="submit" type="submit" value="¡Vota!">';
        } else {
            echo "<p>Gracias por tu voto.</p>";
        }
        ?>
    </form>

    <?php
    if(isset($_POST['submit']) && isset($_POST['reply']) && empty($_COOKIE['voted'])) {
        $file = "results.txt";

        if (!file_exists($file)) {
            file_put_contents($file, "0,0,0"); 
        }

        $fp = fopen($file, "r+");
        $size = filesize($file);
        $arr_vote = ($size > 0) ? explode(",", fread($fp, $size)) : [0, 0, 0];

        $reply = intval($_POST['reply']); 
        $arr_vote[$reply]++;

        rewind($fp);
        fputs($fp, implode(",", $arr_vote));
        fclose($fp);

        echo "<p>¡Voto registrado correctamente!</p>";
    }
    ?>

    <p>[ <a href="results.php" target="_blank">Ver resultados de la encuesta</a> ]</p>
</body>
</html>
