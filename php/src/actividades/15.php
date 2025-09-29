<?php
    if (isset($_POST['username'])) {
        setcookie('username', $_POST['username'], time() + 3600); // Caduca en 1 hora
        header("Location: " . $_SERVER['PHP_SELF']); // Redirigir para evitar reenvío del formulario
        exit;
    }
    $nombre = $_COOKIE['username'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 15</title>
</head>
<body>
    <h1>Actividad 15</h1>
    <?php
    echo '<form method="POST">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" value="' . $nombre . '"><br><br>
            <button type="submit">Enviar</button>
        </form>';
    if (isset($_COOKIE['username'])) {
        echo "<p>Bienvenido de nuevo, " . htmlspecialchars($_COOKIE['username']) . "!</p>";
    }
    ?>
</body>
</html>