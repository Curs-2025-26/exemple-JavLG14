<?php
require_once './../vendor/autoload.php';
use App\Persona;
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Benvingut a la meva web</h1>
    <p>La data d'avui és: <?= date('Y-m-d') ?></p><br>
    <h3> Bateria de actividades:</h3>
    <a href="actividades/1.php">Hola mundo</a><br>
    <a href="actividades/2.php">Variables</a><br>
    <a href="actividades/3.php">Cometes simples VS dobles</a><br>
    <a href="actividades/4.php">Condicional básico</a><br>
    <a href="actividades/5.php">Arrays y bucles</a><br>
    <a href="actividades/6.php">Estructures match</a><br>
    <a href="actividades/7.php">Informació del servidor amb $_server</a><br>
    <a href="actividades/8.php">Formulari de contacte amb validació</a><br>  
    <a href="actividades/9.php">Formulari amb validació i missatges d’error</a><br>    
    <a href="actividades/10.php">Pujar fitxer i seleccionar opció</a><br>   
    <a href="actividades/11.php">[Sesiones]Contador de visitas</a><br>
    <a href="actividades/12.php">[Sesiones]Cesta de la compra</a><br>
    <a href="actividades/14.php">[14]Sistema bàsic d’autenticació amb sessió</a><br>
    <a href="actividades/15.php">[15]Cookies</a><br>

    <h3> Ejercicios propuestos:</h3>
    <a href="App/p15_echo.php">Creació de la Classe Bàsica i Gestió de Propietats</a><br>
    <a href="App/usuariIndex.php">Creació de la Classe Usuari i Mètode Saluda</a><br>
    <a href="App/producteIndex.php">Creació de la Classe Producte i Mètode ToString</a><br>
</body>
</html>