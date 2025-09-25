<?php
    session_start();
    // Si se pulsa el botón reiniciar
    if (isset($_POST["reiniciar"])) {
        session_unset();     // eliminar variables de sesión
        session_destroy();   // destruir la sesión
        header("Location: 12.php"); // redirigir a la misma página
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_SESSION['cesta']) && !empty($_SESSION['cesta'])) {
            echo "<h2>Productos en la cesta:</h2>";
            echo "<ul>";
            foreach ($_SESSION['cesta'] as $producto) {
                echo "<li>" . htmlspecialchars($producto) . "</li>";
            }
            echo "</ul>";
            echo '<form method="POST">
                <button type="submit" name="reiniciar">Vaciar Cesta</button>
            </form>';            
        }else {
            echo "<p>La cesta está vacía.</p>";
        }   
    ?>
    <a href="12.php">Volver</a>
</body>
</html>