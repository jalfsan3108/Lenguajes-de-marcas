<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Datos del Usuario</title>
</head>
<body>
    <h1>Datos recibidos del formulario</h1>
    <p>Bienvenido, usuario: 
        <?php 
            echo "<b>" . htmlspecialchars($_GET["uname"]) . "</b>"; 
        ?>
    </p>
    <p>Tu clave es: 
        <?php 
            echo "<b>" . htmlspecialchars($_GET["pass"]) . "</b>"; 
        ?>
    </p>
</body>
</html>
