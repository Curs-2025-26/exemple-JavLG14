<?php
    session_start();
    // Guardar los productos seleccionados en la sesión
    if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['cesta'])) {
        $_SESSION['cesta'][] = htmlspecialchars($_POST['cesta']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 12</title>
</head>
<body>
    <form method="POST">
        <label for="producto">Introduce el nombre de un producto:</label><br>
        <input type="text" name="cesta" id="producto"><br>
        <button type="submit">Añadir a la cesta</button>
    </form>
    <a href="12_vercesta.php">Ver cesta</a>
</body>
</html>