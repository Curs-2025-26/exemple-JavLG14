<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Actividad 9</h1>
    <!-- COMPROBAR VERSIÓN DEL PROFESOR -->
    <?php
    // Procesamos el formulario si se ha enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = trim(htmlspecialchars($_POST["nombre"]));
        $email = trim(htmlspecialchars($_POST["email"]));

        if (!empty($nombre) && !empty($email)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<h3>Datos recibidos:</h3>";
                echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
                echo "Email: " . htmlspecialchars($email) . "<br>";
                exit();
            }
        } else {
            echo "<p style='color:red;'>⚠️ Por favor, rellena todos los campos.</p>";
        }
    }
    ?>
    <!-- Formulario -->
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?= $nombre ?? '' ?>">
        <br><br>

        <label for="email">Correo electrónico:</label>
        <input type="text" name="email" id="email" value="<?= $email ?? '' ?>">
        <?php
            if (!empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                echo "<span style='color:red;'> ⚠️ El correo electrónico no es válido.</span>";
            }
        ?>
        <br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>