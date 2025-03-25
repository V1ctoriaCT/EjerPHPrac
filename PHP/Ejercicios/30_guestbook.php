<html>

<head>
    <title>30 Guestbook</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>

<body>
    <h1>30 Ejercicio Guestbook</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> Tu comentario:<br> 
        <textarea cols="55" rows="4" name="comment"></textarea><br><br> Tu nombre:<br>
        <input type="text" name="name"><br><br> Tu e-mail:<br>
        <input type="text" name="email"><br><br>

        <input type="submit" value="Publica:">
    </form>

<h3>Mostrar todos los comentarios</h3>

<?php

    $file ="guestbook.txt";

    if (isset($_POST['comment']) && isset($_POST['name']) != "" && $_POST['email'] != "") {
        $comment = $_POST['comment'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        if (!file_exists($file)) {
            $fp = fopen($file, 'w');
            fclose($fp);
        }

        $fp = fopen($file, "r+");
        $old = fread ($fp, filesize($file));
        $email = "<a href=\mailto:$email\">$email</a>";
        $dateOfEntry = date ("y-n-j");
        $comment = htmlspecialchars($comment);
        $comment = stripslashes($comment);
        $entry="<p><b>$name</b> ($email) wrote on <i>$dateOfentry</i>;<br>$comment</p>\n";
        rewind($fp);
        fputs($fp, "$entry \n $old");
        fclose($fp);
    }

readfile($file);
?>

</body>
</html>
