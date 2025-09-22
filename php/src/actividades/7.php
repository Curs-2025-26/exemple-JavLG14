<!DOCTYPE html>
<html>
<body>
    <h1>Actividad 7</h1>
    <p>
    <?php 
        foreach ($_SERVER as $clave => $valor) {
            if (is_string($valor)){
                echo $clave . " => " . $valor . "<br>";
            }
        }
    ?>
    </p>
</body>
</html>