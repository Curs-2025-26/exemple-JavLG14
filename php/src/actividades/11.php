<?php
    session_start();

    // Si se pulsa el botón reiniciar
    if (isset($_POST["reiniciar"])) {
        session_unset();     // eliminar variables de sesión
        session_destroy();   // destruir la sesión
        header("Location: " . $_SERVER['PHP_SELF']); // redirigir a la misma página
        exit;
    }

    // Contador de visitas
    if (isset($_SESSION["visitas"])) {
        $_SESSION["visitas"]++;
    } else {
        $_SESSION["visitas"] = 1;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <p><?= "Número de visitas: " . $_SESSION["visitas"]; ?></p>

    <form method="POST">
        <button type="submit" name="reiniciar">Reiniciar contador</button>
    </form>
</body>
</html>