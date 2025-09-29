<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    // Llista d'usuaris predefinits amb contrasenyes en text pla
    $users = [
        'admin' => '1234',
        'admin2' => '1234',
    ];

    // Convertir les contrasenyes a un format encriptat
    foreach ($users as $user => $password) {
        $users[$user] = password_hash($password, PASSWORD_BCRYPT);
    }

    // Formulari d'autenticació
    if (isset($_POST['username'])) {
        $usuario = $_POST['username'];
        $password = $_POST['password'];

        if (isset($users[$usuario]) && password_verify($password, $users[$usuario])) {
            // L'usuari està autenticat
            session_regenerate_id(true);
            $_SESSION["login"] = true;
            $_SESSION['user'] = $usuario;
            echo "Login successful. Welcome, " . $usuario . "!";
        } else {
            // Credencials incorrectes
            echo "Invalid user or password.";
        }
    }
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 14</title>
</head>
<body>
    <?php
    if (!isset($_SESSION['user'])):
        echo '<form method="POST">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit">Iniciar sesión</button>
        </form>';
    else:
        echo "<p>Usuario autenticado: " . htmlspecialchars($_SESSION['user']) . "</p>";
        echo '<form method="POST">
                <button type="submit" name="logout">Cerrar sesión</button>
                </form>';
    endif;
    ?>
</body>
</html>