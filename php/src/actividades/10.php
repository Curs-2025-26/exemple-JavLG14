<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
        if (!empty($_POST['modulos']) && 
            isset($_FILES['archivoEnviado']) && 
            $_FILES['archivoEnviado']['error'] === UPLOAD_ERR_OK) {
            
            // Carpeta de destino
            $carpetaDestino = __DIR__ . "/uploads/";

            // Datos del archivo
            $nombre   = basename($_FILES['archivoEnviado']['name']);
            $tipo     = $_FILES['archivoEnviado']['type'];
            $tamanio  = $_FILES['archivoEnviado']['size'];
            $tmp_name = $_FILES['archivoEnviado']['tmp_name'];
            $rutaDestino = $carpetaDestino . $nombre;

            // Mover el archivo
            if (move_uploaded_file($_FILES['archivoEnviado']['tmp_name'], "./uploads/{$nombre}")) {
                echo "<h2>Dades rebudes:</h2>";
                echo "<p><strong>Nom del fitxer:</strong> " . htmlspecialchars($nombre) . "</p>";
                echo "<p><strong>Tipus:</strong> " . htmlspecialchars($tipo) . "</p>";
                echo "<p><strong>Mida:</strong> " . round($tamanio / 1024, 2) . " KB</p>";
                echo "<p><strong>Ubicació:</strong> " . htmlspecialchars($rutaDestino) . "</p>";
                echo "<p><strong>Opcions seleccionades:</strong> " . implode(", ", $_POST['modulos']) . "</p>";
            } else {
                echo "<p style='color:red;'>Error al moure el fitxer.</p>";
            }

        }else {
            // Recuperamos selección previa
            $modulos = $_POST['modulos'] ?? [];
            ?>
            <?php 
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    echo "<p style='color:red;'>Debes seleccionar al menos un módulo y subir un archivo válido.</p>";
                }
            ?>
            <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                Archivo: <input name="archivoEnviado" type="file" />
                <br />
                <p><input type="checkbox" name="modulos[]" id="modulosDWES" value="DWES"
                    <?php if(in_array("DWES",$modulos)) echo 'checked="checked"'; ?> />
                    <label for="modulosDWES">Desarrollo web en entorno servidor</label>
                </p>
                <p><input type="checkbox" name="modulos[]" id="modulosDWEC" value="DWEC"
                    <?php if(in_array("DWEC",$modulos)) echo 'checked="checked"'; ?> />
                    <label for="modulosDWEC">Desarrollo web en entorno cliente</label>
                </p>
                <input type="submit" value="Enviar" name="enviar"/>
            </form>
    <?php } ?>
</body>
</html>