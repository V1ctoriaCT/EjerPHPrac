<html>

<head>
    <title>33 SEGURIDAD</title>
</head>

<body>
    <h2>Agujero de seguridad en register_globals = On</h2>
    <form action="<?php echo "33_seguridad.php"; ?>" method="post"> 
        Contraseña: <input type="password" name="pass">
        <input type="submit" value="Enviar">
    </form>

<?php
    if (isset($_POST['pass']) && $_POST['pass'] == "abc_xyz_123") {
        $login = true;
    }
    
    if (isset($login) && $login) {
        echo "<p>Aqui empieza el arma secreta.</p>";
    }
?>

</body>
</html>
